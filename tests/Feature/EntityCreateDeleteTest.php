<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EntityCreateDeleteTest extends TestCase
{
    use RefreshDatabase;

    public function test_category_create_and_delete_work(): void
    {
        $response = $this->post(route('categories.create'), [
            'name' => 'Nieuwe categorie',
        ]);

        $response->assertRedirect(route('categories.index'));
        $this->assertDatabaseHas('categories', ['name' => 'Nieuwe categorie']);

        $category = Category::query()->where('name', 'Nieuwe categorie')->firstOrFail();

        $deleteResponse = $this->delete(route('categories.delete', $category->id));

        $deleteResponse->assertRedirect(route('categories.index'));
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
