<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CustomerdashboardTest extends TestCase
{
   
    /**
     * A basic test example.
     *
     * @return void
     */
public function testBasicExample()
    {
        $response = $this->get('/dashboard');

        $response->assertSee('Item');
    }
    
    
    
}
