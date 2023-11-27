<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Post;

$post = new Post();
$postlist = $post->find()->order("id ASC")->fetch(true);