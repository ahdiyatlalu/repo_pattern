<?php

namespace App\Repositories;

use App\Interfaces\ArticleRepositoryInterface;
use App\Models\Article;

class ArticleRepository implements ArticleRepositoryInterface {
    
    public function getAll()
    {
        return Article::all();
    }

    public function store($data)
    {
        return Article::create($data);
    }
}