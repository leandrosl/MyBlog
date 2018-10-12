<?php

namespace MyBlog\App\Models;

class Post
{
    private $title;

    public function __construct()
    {
        
    }

    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    public function getTitle(): string 
    {
        return $this->title;
    }
}