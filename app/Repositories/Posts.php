<?php

namespace App\Repositories;

use App\Post;

class Posts
{
    public function __custruct()
    {

    }

    public function all()
    {
        return Post::all();
    }
}
