<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
    public function test_article_get()
    {
        $this->json('get',
                    'api/article'
                )->assertStatus(200);
    }

    public function test_article_post_success()
    {
        $this->json('post', 'api/article', [
            'title' => 'Article Title',
            'description' => 'Article Body',
        ])->assertStatus(201);
    }
    
    public function test_article_post_failed()
    {
        $this->json('post',
                    'api/article',
                    ['title' => 'Article Title'],
                    ['Accept' => 'aplication/json']
                )->assertStatus(422);
    }
    
}
