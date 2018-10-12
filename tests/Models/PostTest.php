<?php

use PHPUnit\Framework\TestCase;

use MyBlog\App\Models\Post;

class PostTest extends TestCase
{
    public function test_if_title_can_be_assign()
    {
        $post = new Post();
        $post->setTitle('Loren Ipsum');

        $this->assertEquals('Loren Ipsum', $post->getTitle());
    }
}