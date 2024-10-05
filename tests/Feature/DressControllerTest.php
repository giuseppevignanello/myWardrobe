<?php

namespace Tests\Feature;

use App\Models\Dress;
use App\Models\Brand;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DressControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_add_a_new_dress()
    {
        $brand = Brand::factory()->create();

        $data = [
            'name' => 'Red Dress',
            'type' => 'Evening',
            'brand_id' => $brand->id,
            'size' => 'M',
            'color' => 'Red',
            'description' => 'A beautiful red evening dress.',
            'price' => 100,
            'purchase_date' => '2024-01-01',
            'season' => 'Winter',
            'image' => 'path/to/image.jpg',
        ];

        $response = $this->postJson('/api/dresses', $data);
        $response->assertStatus(201);

        $this->assertDatabaseHas('dresses', [
            'name' => 'Red Dress',
            'brand_id' => $brand->id,
            'color' => 'Red',
        ]);
    }
}
