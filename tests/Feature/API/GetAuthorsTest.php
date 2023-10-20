<?php

namespace Feature\API;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Testing\Fluent\AssertableJson;
use Tests\TestCase;

class GetAuthorsTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_api_to_get_all_authors(): void
    {
        $response = $this->get('/api/authors');

        $response->assertJson(fn (AssertableJson $json) =>
            $json->has('authors')
        );

        $response->assertStatus(200);
    }
}
