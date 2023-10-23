<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LoginTest extends DuskTestCase
{
    use RefreshDatabase;
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $user = User::factory()->create([
            'email' => 'johndoe@example.com',
            'password' => bcrypt(1234),
        ]);

        $this->browse(function (Browser $browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', '1234')
                ->screenshot('beforelogin')
                ->press('login')
                ->assertPathIs('/dashboard');
        });
    }
}
