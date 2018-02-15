<?php

namespace Tests\Feature\Api;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleTest extends TestCase
{
    protected function setUp()
    {
        parent::setUp();
    }

    public function testGettingNoArticles()
    {
        $response = $this->get('/api/v1/articles');
        $response->assertStatus(404);
        $response->assertJsonStructure(['error']);
        $response->assertSeeText("Could not find any articles");
    }

    public function testGettingAllArticles()
    {
        $this->artisan('db:seed');
        $response = $this->get('/api/v1/articles');
        $response->assertStatus(200);
        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id', 'title', 'slug', 'content', 'published',
                    'dates' => [ 'created_at', 'created_diff', 'updated_at', 'updated_diff' ],
                    'links' => [ 'web_link', 'api_link' ],
                    'author' => [ 'id', 'name', 'web_link', 'api_link' ],
                ]
            ],
            'meta' => [
                'current_page', 'from', 'last_page',
                'path', 'per_page', 'to', 'total'
            ]
        ]);
    }
}
