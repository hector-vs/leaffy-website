<?php
require __DIR__ . "/../vendor/autoload.php";

use Source\Models\Post;

if($_POST){
    $id = $_POST['id'];
    $post_nome = $_POST['uptitulo'];
    $post_desc = $_POST['updesc'];
    $slug = $_POST['upslug'];

    $titulo1 = $_POST['uptitulo1'];
    $texto1 = $_POST['uptexto1'];
    $imagem1 = ($_POST['upimagem1'] != "") ? $_POST['upimagem1'] : " ";

    // Bloco para $_POST['uptitulo2'], $_POST['uptexto2'], $_POST['upimagem2']
    $titulo2 = ($_POST['uptitulo2'] != "") ? $_POST['uptitulo2'] : " ";
    $texto2 = ($_POST['uptexto2'] != "") ? $_POST['uptexto2'] : " ";
    $imagem2 = ($_POST['upimagem2'] != "") ? $_POST['upimagem2'] : " ";

    // Bloco para $_POST['uptitulo3'], $_POST['uptexto3'], $_POST['upimagem3']
    $titulo3 = ($_POST['uptitulo3'] != "") ? $_POST['uptitulo3'] : " ";
    $texto3 = ($_POST['uptexto3'] != "") ? $_POST['uptexto3'] : " ";
    $imagem3 = ($_POST['upimagem3'] != "") ? $_POST['upimagem3'] : " ";

    // Bloco para $_POST['uptitulo4'], $_POST['uptexto4'], $_POST['upimagem4']
    $titulo4 = ($_POST['uptitulo4'] != "") ? $_POST['uptitulo4'] : " ";
    $texto4 = ($_POST['uptexto4'] != "") ? $_POST['uptexto4'] : " ";
    $imagem4 = ($_POST['upimagem4'] != "") ? $_POST['upimagem4'] : " ";

    // Bloco para $_POST['uptitulo5'], $_POST['uptexto5'], $_POST['upimagem5']
    $titulo5 = ($_POST['uptitulo5'] != "") ? $_POST['uptitulo5'] : " ";
    $texto5 = ($_POST['uptexto5'] != "") ? $_POST['uptexto5'] : " ";
    $imagem5 = ($_POST['upimagem5'] != "") ? $_POST['upimagem5'] : " ";

    $post = (new Post())->findById($id);
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