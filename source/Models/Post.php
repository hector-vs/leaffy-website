<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Post extends DataLayer
{
    public function __construct()
    {
        //string $entity, array $required, string $primary = 'id', bool $timestamps = true
        parent::__construct("posts", ["post_nome","post_desc", "titulo1","texto1","imagem1","titulo2","texto2","imagem2","titulo3","texto3","imagem3","titulo4","texto4","imagem4","titulo5","texto5","imagem5", "slug"]);
    }

}