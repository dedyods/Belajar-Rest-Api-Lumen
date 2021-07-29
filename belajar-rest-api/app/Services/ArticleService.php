<?php

namespace App\Services;

use Illuminate\Support\Str;

class ArticleService
{
    public function store(object $request)
    {
        $data   = $request->all();
        $data['slug'] = Str::slug($request->title, '-');
        return $data;
    }
}