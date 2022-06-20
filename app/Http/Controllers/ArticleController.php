<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Interfaces\ArticleRepositoryInterface;
use App\Http\Resources\{Article, ArticleCollection};

class ArticleController extends Controller
{

    private $articleRepository;

    public function __construct(ArticleRepositoryInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    public function index()
    {
        return new ArticleCollection(
            $this->articleRepository->getAll()
        );
    }

    public function store(ArticleRequest $request)
    {        
        $request->validated();

        return new Article(
            $this->articleRepository->store($request->safe()->only(['title', 'description']))
        );
    }
}
