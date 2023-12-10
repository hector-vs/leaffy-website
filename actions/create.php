<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Post;
use Cocur\Slugify\Slugify;

if($_POST){
    $post_nome = $_POST['titulo'];
    $post_desc = $_POST['desc'];
    $slug = $_POST['slug'];

    $titulo1 = $_POST['titulo1'];
    $texto1 = $_POST['texto1'];

    if($_POST['imagem1'] != ""){
        $imagem1 = $_POST['imagem1'];
    }else{
        $imagem1 = " ";
    }

    // Bloco para $_POST['titulo2'], $_POST['texto2'], $_POST['imagem2']
    $titulo2 = ($_POST['titulo2'] != "") ? $_POST['titulo2'] : " ";
    $texto2 = ($_POST['texto2'] != "") ? $_POST['texto2'] : " ";
    $imagem2 = ($_POST['imagem2'] != "") ? $_POST['imagem2'] : " ";

    // Bloco para $_POST['titulo3'], $_POST['texto3'], $_POST['imagem3']
    $titulo3 = ($_POST['titulo3'] != "") ? $_POST['titulo3'] : " ";
    $texto3 = ($_POST['texto3'] != "") ? $_POST['texto3'] : " ";
    $imagem3 = ($_POST['imagem3'] != "") ? $_POST['imagem3'] : " ";

    // Bloco para $_POST['titulo4'], $_POST['texto4'], $_POST['imagem4']
    $titulo4 = ($_POST['titulo4'] != "") ? $_POST['titulo4'] : " ";
    $texto4 = ($_POST['texto4'] != "") ? $_POST['texto4'] : " ";
    $imagem4 = ($_POST['imagem4'] != "") ? $_POST['imagem4'] : " ";

    // Bloco para $_POST['titulo5'], $_POST['texto5'], $_POST['imagem5']
    $titulo5 = ($_POST['titulo5'] != "") ? $_POST['titulo5'] : " ";
    $texto5 = ($_POST['texto5'] != "") ? $_POST['texto5'] : " ";
    $imagem5 = ($_POST['imagem5'] != "") ? $_POST['imagem5'] : " ";

    $post = new Post();
    $post->post_nome = $post_nome;
    $post->post_desc = $post_desc;
    $post->slug = $slug;

    $post->titulo1 = $titulo1;
    $post->texto1 = $texto1;
    $post->imagem1 = $imagem1;

    $post->titulo2 = $titulo2;
    $post->texto2 = $texto2;
    $post->imagem2 = $imagem2;

    $post->titulo3 = $titulo3;
    $post->texto3 = $texto3;
    $post->imagem3 = $imagem3;

    $post->titulo4 = $titulo4;
    $post->texto4 = $texto4;
    $post->imagem4 = $imagem4;

    $post->titulo5 = $titulo5;
    $post->texto5 = $texto5;
    $post->imagem5 = $imagem5;

    $post->save();
    header("Location: " . URL_BASE . "/admin");
}