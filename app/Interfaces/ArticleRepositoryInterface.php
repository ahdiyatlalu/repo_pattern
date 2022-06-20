<?php

namespace App\Interfaces;

interface ArticleRepositoryInterface {
    
    public function getAll();
    public function store($data);

}