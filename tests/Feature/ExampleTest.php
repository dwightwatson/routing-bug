<?php

namespace Tests\Feature;

use App\Models\{Campus, Category, University};
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_it_scopes_the_campus_association()
    {
        $university = University::factory()->create(['slug' => 'university']);

        $campus = Campus::factory()->for($university)->create(['slug' => 'campus']);

        $category = Category::factory()->create(['slug' => 'category']);

        $response = $this->get('/university/campus/categories/category');

        $response->assertStatus(200);
    }

    public function test_it_does_not_find_campus_of_another_university()
    {
        $university = University::factory()->create(['slug' => 'university']);

        // This campus has a different university
        $campus = Campus::factory()->create(['slug' => 'campus']);

        $category = Category::factory()->create(['slug' => 'category']);

        $response = $this->get('/university/campus/categories/category');

        $response->assertStatus(404);
    }
}
