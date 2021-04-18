<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *  @test
     * @return void
     */
    public function redirect_back_if_user_is_not_admin()
    {
        $user = User::find(2);
        $this->actingAs($user);
        $response = $this->get('/admin');
        $response->assertStatus(404);

    }
}
