<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TagControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_Store()
    {
        $this
            ->post('tags', ['name' => 'PHP'])
            ->assertRedirect('/');

       $this->makeFaker('tags', ['name' => 'PHP']);
    }


}
