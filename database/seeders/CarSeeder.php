<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    public function run(): void
    {
        $cars = [
            [
                'brand' => 'Mercedes-Benz',
                'model' => 'Old Classic',
                'body_type' => 'SUV',
                'year' => 2022,
                'price' => 50000,
                'image_path' => 'assets/images/car-list/car1.webp',
                'description' => 'Luxury Mercedes-Benz SUV with a comfortable interior.',
            ],
            [
                'brand' => 'Land Rover',
                'model' => 'Off-Road/Truck',
                'body_type' => 'SUV',
                'year' => 2023,
                'price' => 100000,
                'image_path' => 'assets/images/car-list/car2.webp',
                'description' => 'Land Rover designed for comfortable travel and off-road driving.',
            ],
            [
                'brand' => 'KIA',
                'model' => 'Modern Supercar',
                'body_type' => 'Hatchback',
                'year' => 2023,
                'price' => 20000,
                'image_path' => 'assets/images/car-list/car3.webp',
                'description' => 'Modern KIA with practical everyday performance.',
            ],
            [
                'brand' => 'Renault',
                'model' => 'JDM',
                'body_type' => 'Coupe',
                'year' => 2021,
                'price' => 15000,
                'image_path' => 'assets/images/car-list/car4.webp',
                'description' => 'Stylish coupe with a sporty appearance.',
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Muscle Car',
                'body_type' => 'Hybrid',
                'year' => 2024,
                'price' => 30000,
                'image_path' => 'assets/images/car-list/car5.webp',
                'description' => 'Nissan vehicle with a modern design and comfortable cabin.',
            ],
            [
                'brand' => 'Ford',
                'model' => 'Rally/F1 Race Car',
                'body_type' => 'Coupe',
                'year' => 2022,
                'price' => 40000,
                'image_path' => 'assets/images/car-list/car6.webp',
                'description' => 'Sporty Ford coupe inspired by performance vehicles.',
            ],
            [
                'brand' => 'BMW',
                'model' => 'Modern Supercar',
                'body_type' => 'SUV',
                'year' => 2024,
                'price' => 65000,
                'image_path' => 'assets/images/car-list/car7.webp',
                'description' => 'Premium BMW SUV with a refined driving experience.',
            ],
            [
                'brand' => 'NIO',
                'model' => 'Old Classic',
                'body_type' => 'Hybrid',
                'year' => 2023,
                'price' => 45000,
                'image_path' => 'assets/images/car-list/car8.webp',
                'description' => 'Modern NIO vehicle with a technology-focused design.',
            ],
            [
                'brand' => 'Mini',
                'model' => 'JDM',
                'body_type' => 'Hatchback',
                'year' => 2022,
                'price' => 18000,
                'image_path' => 'assets/images/car-list/car9.webp',
                'description' => 'Compact Mini suited to city driving.',
            ],
            [
                'brand' => 'Jeep',
                'model' => 'Off-Road/Truck',
                'body_type' => 'SUV',
                'year' => 2024,
                'price' => 55000,
                'image_path' => 'assets/images/car-list/car10.webp',
                'description' => 'Rugged Jeep SUV for everyday travel and off-road adventures.',
            ],
        ];

        foreach ($cars as $car) {
            Car::updateOrCreate(
                [
                    'brand' => $car['brand'],
                    'model' => $car['model'],
                ],
                $car
            );
        }
    }
}