<?php

namespace Database\Factories;

use App\Models\University;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CampusFactory extends Factory
{
    public function definition()
    {
        return [
            'university_id' => University::factory(),
            'slug' => $this->faker->slug(),
        ];
    }
}
