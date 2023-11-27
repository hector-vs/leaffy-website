<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer
{
    public function __construct()
    {
        //string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("posts", ["post_nome", "post_text", "slug"]);
    }

}