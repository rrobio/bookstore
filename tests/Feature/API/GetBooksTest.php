<?php

namespace Feature\API;

// use Illuminate\Foundation\Testing\RefreshDatabase;
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
}
