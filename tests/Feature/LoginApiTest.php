<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LoginApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    use RefreshDatabase;


//    /**
//     * @test
//     */
//    public function should_登録済みのユーザーを認証して返却する()
//    {
//
//        // テストユーザー作成
//        $this->user = factory(User::class)->create();
//
//        $response = $this->json('POST', route('login'), [
//            'email' => $this->user->email,
//            'password' => 'secret',
//        ]);
//
//        $response
//            ->assertStatus(200)
//            ->assertJson(['name' => $this->user->name]);
//
//        $this->assertAuthenticatedAs($this->user);
//    }
}
