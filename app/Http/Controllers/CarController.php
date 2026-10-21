<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function search(Request $request)
    {
        $validated = $request->validate([
            'brand' => ['nullable', 'string', 'max:100'],
            'model' => ['nullable', 'string', 'max:100'],
            'body_type' => ['nullable', 'in:SUV,Sedan,Hatchback,Pickup'],
            'min_price' => ['nullable', 'numeric', 'min:0'],
            'max_price' => ['nullable', 'numeric', 'min:0'],
        ]);

        $query = Car::query();

        if (!empty($validated['brand'])) {
            $query->where('brand', $validated['brand']);
        }

        if (!empty($validated['model'])) {
            $query->where('model', $validated['model']);
        }

        if (!empty($validated['body_type'])) {
            $query->where('body_type', $validated['body_type']);
        }

        if (isset($validated['min_price'])) {
            $query->where('price', '>=', $validated['min_price']);
        }

        if (isset($validated['max_price'])) {
            $query->where('price', '<=', $validated['max_price']);
        }

        $cars = $query
            ->orderBy('price')
            ->get([
                'id',
                'brand',
                'model',
                'body_type',
                'year',
                'price',
                'image_path',
                'description',
            ]);

        return response()->json([
            'cars' => $cars,
            'count' => $cars->count(),
        ]);
    }

    public function models(Request $request)
    {
        $validated = $request->validate([
            'brand' => ['required', 'string', 'max:100'],
        ]);

        $models = Car::where('brand', $validated['brand'])
            ->distinct()
            ->orderBy('model')
            ->pluck('model');

        return response()->json([
            'models' => $models,
        ]);
    }
    public function show(Car $car)
    {
        return view('listing-detail', compact('car'));
    }
}