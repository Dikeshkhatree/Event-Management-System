<?php

namespace Database\Seeders;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    public function run()
    {
        // Retrieve categories
        $categories = Category::all();

        // Create 5 events with random categories
        Event::create([
            'title' => 'Laravel Workshop',
            'description' => 'Learn Laravel basics and advanced topics',
            'date' => '2023-12-10',
            'location' => 'Online',
            'category_id' => $categories->random()->id,
        ]);

        Event::create([
            'title' => 'PHP Conference',
            'description' => 'Annual PHP developer conference',
            'date' => '2023-11-20',
            'location' => 'New York',
            'category_id' => $categories->random()->id,
        ]);

        Event::create([
            'title' => 'Tech Seminar',
            'description' => 'Discussing the latest trends in tech',
            'date' => '2023-11-15',
            'location' => 'San Francisco',
            'category_id' => $categories->random()->id,
        ]);

        Event::create([
            'title' => 'Web Development Bootcamp',
            'description' => 'Intensive bootcamp on modern web development',
            'date' => '2024-01-05',
            'location' => 'Online',
            'category_id' => $categories->random()->id,
        ]);

        Event::create([
            'title' => 'AI Workshop',
            'description' => 'Hands-on workshop on Artificial Intelligence',
            'date' => '2024-02-10',
            'location' => 'Boston',
            'category_id' => $categories->random()->id,
        ]);
    }
}
