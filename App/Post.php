<?php
declare(strict_types=1);

namespace App;

class Post
{
    public function action()
    {
        return $this->data();
    }

    private function data()
    {
        return [
            'dunno',
            'good'
        ];
    }
}