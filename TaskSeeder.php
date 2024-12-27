<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Faker\Factory as Faker;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        foreach (range(1, 10) as $index) {
            Task::create([
                'title' => $faker->sentence(),               // Tiêu đề giả
                'description' => $faker->paragraph(),        // Mô tả ngắn giả
                'long_description' => $faker->optional()->text(), // Mô tả chi tiết (có thể null)
                'completed' => $faker->boolean(),            // Trạng thái hoàn thành (true/false)
            ]);
        }
    }
}
