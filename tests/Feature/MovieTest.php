<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MovieTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutExceptionHandling();
    }

    /** @test */
    public function only_logged_in_users_can_view_the_homepage() {
        $response = $this->get('/')->assertRedirect('/login');
    }

    /** @test */
    public function authenticated_users_can_view_the_homepage() {
        $this->actingAs($this->factory(User::class)->create());

        $response = $this->get('/')->assertRedirect('/user/home');
    }

    /** @test */
    public function a_title_is_required() {
        $this->actingAs(factory(User::class)->create());

        $response = $this->post('/admin/movie', array_merge($this->sampleData_Required(), [ 'title'=>'' ]));
        $response->assertSessionHasErrors('title');

    }

    protected function sampleData_Required () : array
    {
        return $this->factory(Movie::class)->create();
    }


}
