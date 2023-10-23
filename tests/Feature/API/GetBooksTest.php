<?php

namespace Feature\API;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetBooksTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_api_to_get_all_books(): void
    {
        $response = $this->get('/api/books');

        $response->assertJson(fn(AssertableJson $json) => $json->has('books')
        );

        $response->assertStatus(200);
    }

//    public function test_api_get_book_by_id(): void {
//        $response = $this->getJson('/api/books/2');
//        $response->assertStatus(200);
//    }
}
