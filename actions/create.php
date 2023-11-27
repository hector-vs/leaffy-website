<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Post;

if($_POST){
    $post_nome = $_POST["post-nome"];
    $post_texto = $_POST["post-texto"];
    $slug = $_POST["slug"];
    $post = new Post();
    $post->post_nome = $post_nome;
    $post->post_text = $post_texto;
    $post->slug = $slug;
    $post->save();
    header("Location: " . URL_BASE);
}