<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query();

        if ($request->filled('brand')) {
            $query->where('brand', $request->brand);
        }

        if ($request->filled('model')) {
            $query->where('model', $request->model);
        }

        if ($request->filled('body_type')) {
            $query->where('body_type', $request->body_type);
        }

        if ($request->filled('price_limit') && is_numeric($request->price_limit)) {
            $query->where('price', '<=', $request->price_limit);
        }

        $cars = $query->get();

        $brands = Car::whereNotNull('brand')
            ->where('brand', '!=', '')
            ->distinct()
            ->orderBy('brand')
            ->pluck('brand');

        $models = Car::whereNotNull('model')
            ->where('model', '!=', '')
            ->distinct()
            ->orderBy('model')
            ->pluck('model');

        $bodyTypes = Car::whereNotNull('body_type')
            ->where('body_type', '!=', '')
            ->distinct()
            ->orderBy('body_type')
            ->pluck('body_type');

        return view('index', compact('cars', 'brands', 'models', 'bodyTypes'));
    }
}