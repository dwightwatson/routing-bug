<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UniversityFactory extends Factory
{
    public function definition()
    {
        return [
            'slug' => $this->faker->slug(),
        ];
    }
}
