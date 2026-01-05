<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class HomepageControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     * @return void
     */
    public function homepage_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
