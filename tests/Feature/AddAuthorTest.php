<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AddAuthorTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/authors');
        $response->assertStatus(200);
    }

    public function test_adding_an_author(): void
    {
        $response = $this->post('/authors', ['author_first_name' => 'FirstTest', 'author_last_name' => 'LastTest']);
        $response->assertStatus(302);
        $this->assertDatabaseHas('authors', ['first_name' => 'FirstTest']);
    }

    public function test_should_fail_to_add_an_author(): void
    {
        $response = $this->post('/authors', ['author_last_name' => 'LastTest']);
        $response->assertSessionHasErrorsIn('authorAdd');
    }
}
