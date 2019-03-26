<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LogoutApiTest extends TestCase
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

//    public function setUp()
//    {
//
//    }
//
//    /**
//     * @test
//     */
//    public function should_認証済みのユーザーをログアウトさせる()
//    {
//        parent::setUp();
//
//        // テストユーザー作成
//        $this->user = factory(User::class)->create();
//
//        $response = $this->actingAs($this->user)
//            ->json('POST', route('logout'));
//
//        $response->assertStatus(200);
//        $this->assertGuest();
//    }
}
