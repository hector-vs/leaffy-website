<?php
namespace Source\App;

use Source\Models\Post;
require __DIR__ . "/../../vendor/autoload.php";

class Web
{
    public function homepage($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Leaffy</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header class="landing-header">
                <nav id="nav">
                    <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                    <div class="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-list">
                        <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                        <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                        <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                        <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                    </ul>
                </nav>
                <div class="area-display">
                    <h1 class="display-header">Seja bem vindo à página da <span class="destaque">Leaffy</span>!</h1>
                </div>
            </header>
            <main>
                <section class="bloco">
                    <div class="conteudo">
                        <div class="texto">
                            <h2>Quem somos?</h2>
                            <p>A Leaffy&copy; é uma empresa criada por uma equipe de programadores e analistas, e seu principal objetivo é promover a <span class="destaque2">conscientização ambiental</span> através de um <a href="'.URL_BASE.'/dispositivo" class="inlinea">dispositivo de auxílio de plantio</a>!</p>
                        </div>
                        <div class="img">
                            <abbr title="Logo Leaffy"><img id="logoblack" style="width: 330px; height: 50px;" src="assets/img/logo.webp" alt="Logotipo"></abbr>
                        </div>
                    </div>
                </section>
                <section class="bloco" id="destaque-bloco">
                    <div class="conteudo">
                        <div class="texto">
                            <h2 class="center">Acreditamos que uma das principais formas de ajudar na <span class="destaque">preservação ambiental</span> é conscientizando as novas gerações.</h2>
                        </div>
                        
                    </div>
                </section>
                <section class="bloco">
                    <div class="conteudo" id="conteudobutton">
                        <div class="texto">
                            <h2 class="center">Confira dicas e informações sobre plantio na aba <a href="'.URL_BASE.'/dicas" class="inlinea">Dicas</a>, ou veja informações sobre nosso dispositivo na aba <a href="'.URL_BASE.'/dispositivo" class="inlinea">Dispositivo</a>!</h2>
                        </div>
                    </div>
                </section>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

    public function dicas($data){
        include("actions/read.php");
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dicas</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header class="landing-header" id="headerposts">
                <nav id="nav">
                    <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                    <div class="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-list">
                        <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                        <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                        <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                        <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                    </ul>
                </nav>
                <div class="area-display">
                    <h1 class="display-header">Aprenda de maneira <span class="destaque">rápida</span> e <span class="destaque">prática</span>!</h1>
                </div>
            </header>
            <div class="backcontent">
                <main id="mainposts">
                    <h1 class="first">Dicas e informações sobre plantas:</h1>
                    <div class="posts">
                    ';
                    if(isset($postlist)){
                        foreach ($postlist as $postItem){
                            echo '<a class="apost" href="'.URL_BASE.'/dicas/'.$postItem->slug.'">
                                    <div class="postagem">
                                        <h3>'.$postItem->post_nome.'</h3>
                                        <p>'.$postItem->post_desc.'</p>
                                    </div>
                                </a>';
                        } 
                    }
                    echo '
                    </div>
                </main>
            </div>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

    public function post($data){
        $thisPost = new Post();
        $postlist = $thisPost->find("slug = :texto", "texto={$data['slug']}")->fetch();
        if ($postlist->id == ""){
            echo '
                <!DOCTYPE html>
                <html lang="pt-br">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Página não encontrada!</title>
                    <link rel="stylesheet" href="../assets/css/style.css">
                    <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
                </head>
                <body>
                    <header>
                    <nav id="nav">
                        <abbr title="Leaffy"><img src="../assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                        <div class="mobile-menu">
                            <div class="line1"></div>
                            <div class="line2"></div>
                            <div class="line3"></div>
                        </div>
                        <ul class="nav-list">
                            <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                            <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                            <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                            <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                        </ul>
                    </nav>
                    </header>
                    <main id="erromain">
                        <h1><span class="destaque">Oops, parece que essa página não existe!</span></h1>
                        <p>Não foi encontrado nenhum post com este nome!</p>
                    </main>
                    <footer>
                        <p>Leaffy &copy;</p>
                    </footer>
                    <script src="../assets/js/mobile-navbar.js"></script>
                    <script src="../assets/js/menu.js"></script>
                </body>
                </html>
            ';
        }else{
            echo '
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>'.$postlist->post_nome.'</title>
                <link rel="stylesheet" href="../assets/css/style.css">
            </head>
            <body id="bodypost">
                <header class="landing-header" id="header-post">
                <nav id="nav">
                    <abbr title="Leaffy"><img src="../assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                    <div class="mobile-menu">
                        <div class="line1"></div>
                        <div class="line2"></div>
                        <div class="line3"></div>
                    </div>
                    <ul class="nav-list">
                        <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                        <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                        <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                        <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                    </ul>
                </nav>
                <div class="area-display" id="display-post">
                    <h1 class="display-header" id="display-header-post">'.$postlist->post_nome.'</h1>
                    <p>'.$postlist->post_desc.'</p>
                    <p id="categoria">dicas/informações</p>
                </div>
                </header>
                <div class="backcontent">
                    <main id="main-post">';
                    if($postlist->titulo1 != " "){
                        echo '<h2>'.$postlist->titulo1.'</h2>';
                    }
                    if($postlist->texto1 != " "){
                        echo '<p>'.$postlist->texto1.'</p>';
                    }
                    if($postlist->imagem1 != " "){
                        echo '<img src="'.$postlist->imagem1.'">';
                    }
                    if($postlist->titulo2 != " "){
                        echo '<h2>'.$postlist->titulo2.'</h2>';
                    }
                    if($postlist->texto2 != " "){
                        echo '<p>'.$postlist->texto2.'</p>';
                    }
                    if($postlist->imagem2 != " "){
                        echo '<img src="'.$postlist->imagem2.'">';
                    }
                    if($postlist->titulo3 != " "){
                        echo '<h2>'.$postlist->titulo3.'</h2>';
                    }
                    if($postlist->texto3 != " "){
                        echo '<p>'.$postlist->texto3.'</p>';
                    }
                    if($postlist->imagem3 != " "){
                        echo '<img src="'.$postlist->imagem3.'">';
                    }
                    if($postlist->titulo4 != " "){
                        echo '<h2>'.$postlist->titulo4.'</h2>';
                    }
                    if($postlist->texto4 != " "){
                        echo '<p>'.$postlist->texto4.'</p>';
                    }
                    if($postlist->imagem4 != " "){
                        echo '<img src="'.$postlist->imagem4.'">';
                    }
                    if($postlist->titulo5 != " "){
                        echo '<h2>'.$postlist->titulo5.'</h2>';
                    }
                    if($postlist->texto5 != " "){
                        echo '<p>'.$postlist->texto5.'</p>';
                    }
                    if($postlist->imagem5 != " "){
                        echo '<img src="'.$postlist->imagem5.'">';
                    }
                    echo '
                    </main>
                </div>
                <footer>
                    <p>Leaffy &copy;</p>
                </footer>
                <script src="../assets/js/mobile-navbar.js"></script>
                <script src="../assets/js/menu.js"></script>
            </body>
            </html>
            ';
        }
    }

    public function dispositivo($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dispositivo</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header class="landing-header">
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
                <div class="area-display">
                    <h1 class="display-header">Conheça nosso dispositivo de <span class="destaque">auxílio de plantio</span>!</h1>
                </div>
            </header>
            <main>
                <section class="bloco">
                    <div class="conteudo">
                        <div class="texto">
                            <h2>O que é?</h2>
                            <p>Nosso produto é um dispositivo feito em Arduino, utilizando a placa Esp32. Sua função é te auxiliar nos cuidados com a sua plantinha!</p>
                        </div>
                        <div class="img">
                            <abbr title="Placa ARDUINO ESP32"><img src="assets/img/esp32.webp" alt="Placa ESP32"></abbr>
                        </div>
                    </div>
                </section>
                <section class="bloco" id="bloco2">
                    <div class="conteudo">
                        <div class="img">
                            <abbr title="Ícone umidade/temperatura"><img src="assets/img/icon.webp" alt="Placa ESP32"></abbr>
                        </div>
                        <div class="texto">
                            <h2><span class="destaque">Como funciona?</span></h2>
                            <p>Através dos sensores ligados ao dispositivo, são capturadas informações sobre a temperatura e a umidade da planta, de modo a mostrar o que a planta precisa!</p>
                        </div>
                    </div>
                </section>
                <section class="bloco" id="destaque-bloco">
                    <div class="conteudo">
                        <div class="texto">
                            <h2 class="center">A <span class="destaque">educação ambiental</span> promovida pelo nosso produto é essencial para a <span class="destaque">conscientização</span> das nossas crianças!</h2>
                        </div>
                        
                    </div>
                </section>
                <section class="bloco">
                    <div class="conteudo" id="conteudobutton">
                        <div class="texto">
                            <h2 class="center">Adquira seu <span class="destaque2">Dispositivo Leaffy</span> e faça do mundo um lugar melhor!</h2>
                        </div>
                        <a class="button" href="#">ADQUIRIR</a>
                    </div>
                </section>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
        </body>
        </html>
        '; 
    }

    public function contato($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Contato</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header class="landing-header" id="headercontato">
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
                <main id="maincontato">
                    <form id="formcontato" action="https://formsubmit.co/f5f0e03e8e19fb56c308bdeca6312de5" method="POST">
                        <label for="email">Seu e-mail:</label>
                        <input type="email" name="email" id="email" value="@gmail.com" required>
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="_subject" id="assunto" required>
                        <label for="texto">Texto:</label>
                        <textarea name="name" id="texto" cols="45" rows="10" required></textarea>
                        <input type="submit" value="Enviar">
                    </form>
                </main>
            </header>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

    public function login($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Login</title>
            <link rel="stylesheet" href="assets/css/style.css">
            <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header class="landing-header" id="headercontato">
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
                <main id="maincontato">
                    <form id="formcontato" method="post" action="actions/processlog.php">
                        <label for="email">E-mail:</label>
                        <input type="email" name="logemail" id="logemail" value="@gmail.com" required>
                        <label for="assunto">Senha:</label>
                        <input autocomplete="off" type="text" name="logsenha" id="logsenha" required>
                        <input type="submit" value="Enviar">
                    </form>
                </main>
            </header>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
        </body>
        </html>        
        '; 
    } 

    public function admin($data){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION ['id'])){
            header("Location: ".URL_BASE. "/login");
        }
        include("actions/read.php");
        echo '
            <!DOCTYPE html>
            <html lang="pt-br">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Admin</title>
                <link rel="stylesheet" href="assets/css/style.css">
                <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
            </head>
            <body>
            <header>
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
            </header>
            <main id="erromain">
                <a class="button" href="'.URL_BASE.'/admin/criar" style="margin-bottom: 40px; margin-top: 10vh;">Criar post</a>
                <div id="container">
                    <table>
                        <tr>
                        <th>Ações</th>
                        <th>Nome</th>
                        <th>Descrição</th>
                        <th>Criado em</th>
                        </tr>';
                    if(isset($postlist)){
                        foreach ($postlist as $postItem){
                            echo '<tr><td><a href="'.URL_BASE.'/admin/deletar/'.$postItem->id.'">Deletar</a> / <a href="'.URL_BASE.'/admin/update/'.$postItem->id.'">Atualizar</a></td>
                            <td>'.$postItem->post_nome.'</td>
                            <td>'.$postItem->post_desc.'</td>
                            <td>'.$postItem->created_at.'</td></tr>';
                        } 
                    }
                    echo '
                    </table>
                </div>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="assets/js/mobile-navbar.js"></script>
            <script src="assets/js/menu.js"></script>
            </body>
            </html>
        ';
    }

    public function criar($data){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION ['id'])){
            header("Location: ".URL_BASE. "/login");
        }
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Criar</title>
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header>
            <nav id="nav">
                <abbr title="Leaffy"><img src="../assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
            </header>
            <main id="erromain">
                <form id="formcontato" method="post" action="../actions/create.php">
                    <label for="titulo">Título:</label>
                    <input type="text" name="titulo" id="titulo" required>

                    <label for="slug">Nome na URL (não conter caracteres especiais):</label>
                    <input type="text" name="slug" id="slug" required>

                    <label for="desc">Descrição:</label>
                    <input type="text" name="desc" id="desc" required>

                    <label for="titulo1">Título 1:</label>
                    <input type="text" name="titulo1" id="titulo1" required>

                    <label for="texto1">Texto 1:</label>
                    <textarea name="texto1" id="texto1" cols="45" rows="10" required></textarea>

                    <label for="imagem1">Imagem 1:</label>
                    <input type="text" name="imagem1" id="imagem1">

                    <label for="titulo2">Título 2:</label>
                    <input type="text" name="titulo2" id="titulo2" >

                    <label for="texto2">Texto 2:</label>
                    <textarea name="texto2" id="texto2" cols="45" rows="10"></textarea>

                    <label for="imagem2">Imagem 2:</label>
                    <input type="text" name="imagem2" id="imagem2">

                    <label for="titulo3">Título 3:</label>
                    <input type="text" name="titulo3" id="titulo3">

                    <label for="texto3">Texto 3:</label>
                    <textarea name="texto3" id="texto3" cols="45" rows="10"></textarea>

                    <label for="imagem3">Imagem 3:</label>
                    <input type="text" name="imagem3" id="imagem3">

                    <label for="titulo4">Título 4:</label>
                    <input type="text" name="titulo4" id="titulo4">

                    <label for="texto4">Texto 4:</label>
                    <textarea name="texto4" id="texto4" cols="45" rows="10"></textarea>

                    <label for="imagem4">Imagem 4:</label>
                    <input type="text" name="imagem4" id="imagem4">

                    <label for="titulo5">Título 5:</label>
                    <input type="text" name="titulo5" id="titulo5">

                    <label for="texto5">Texto 5:</label>
                    <textarea name="texto5" id="texto5" cols="45" rows="10"></textarea>

                    <label for="imagem5">Imagem 5:</label>
                    <input type="text" name="imagem5" id="imagem5">

                    <input type="submit" value="Publicar">
                </form>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="../assets/js/mobile-navbar.js"></script>
            <script src="../assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

    public function update($data){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION ['id'])){
            header("Location: ".URL_BASE. "/login");
        }
        $thisPost = new Post();
        $postlist = $thisPost->find("id = :id", "id={$data['id']}")->fetch();
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Atualizar</title>
            <link rel="stylesheet" href="../../assets/css/style.css">
            <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header>
            <nav id="nav">
                <abbr title="Leaffy"><img src="../../assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
            </header>
            <main id="erromain">
                <form id="formcontato" method="post" action="../../actions/update.php">
                    <label for="id">ID (não mude este campo!):</label>
                    <input type="text" name="id" id="id" required value="'.$postlist->id.'">

                    <label for="uptitulo">Título:</label>
                    <input type="text" name="uptitulo" id="uptitulo" required value="'.$postlist->post_nome.'">

                    <label for="upslug">Nome na URL (não conter caracteres especiais):</label>
                    <input type="text" name="upslug" id="upslug" required value="'.$postlist->slug.'">

                    <label for="updesc">Descrição:</label>
                    <input type="text" name="updesc" id="updesc" required value="'.$postlist->post_desc.'">

                    <label for="uptitulo1">Título 1:</label>
                    <input type="text" name="uptitulo1" id="uptitulo1" required value="'.$postlist->titulo1.'">

                    <label for="uptexto1">Texto 1:</label>
                    <textarea name="uptexto1" id="uptexto1" cols="45" rows="10" required>'.$postlist->texto1.'</textarea>

                    <label for="upimagem1">Imagem 1:</label>
                    <input type="text" name="upimagem1" id="upimagem1" value="'.$postlist->imagem1.'">

                    <label for="uptitulo2">Título 2:</label>
                    <input type="text" name="uptitulo2" id="uptitulo2" value="'.$postlist->titulo2.'">

                    <label for="uptexto2">Texto 2:</label>
                    <textarea name="uptexto2" id="uptexto2" cols="45" rows="10">'.$postlist->texto2.'</textarea>

                    <label for="upimagem2">Imagem 2:</label>
                    <input type="text" name="upimagem2" id="upimagem2" value="'.$postlist->imagem2.'">

                    <label for="uptitulo3">Título 3:</label>
                    <input type="text" name="uptitulo3" id="uptitulo3" value="'.$postlist->titulo3.'">

                    <label for="uptexto3">Texto 3:</label>
                    <textarea name="uptexto3" id="uptexto3" cols="45" rows="10">'.$postlist->texto3.'</textarea>

                    <label for="upimagem3">Imagem 3:</label>
                    <input type="text" name="upimagem3" id="upimagem3" value="'.$postlist->imagem3.'">

                    <label for="uptitulo4">Título 4:</label>
                    <input type="text" name="uptitulo4" id="uptitulo4" value="'.$postlist->titulo4.'">

                    <label for="uptexto4">Texto 4:</label>
                    <textarea name="uptexto4" id="uptexto4" cols="45" rows="10">'.$postlist->texto4.'</textarea>

                    <label for="upimagem4">Imagem 4:</label>
                    <input type="text" name="upimagem4" id="upimagem4" value="'.$postlist->imagem4.'">

                    <label for="uptitulo5">Título 5:</label>
                    <input type="text" name="uptitulo5" id="uptitulo5" value="'.$postlist->titulo5.'">

                    <label for="uptexto5">Texto 5:</label>
                    <textarea name="uptexto5" id="uptexto5" cols="45" rows="10">'.$postlist->texto5.'</textarea>

                    <label for="upimagem5">Imagem 5:</label>
                    <input type="text" name="upimagem5" id="upimagem5" value="'.$postlist->imagem5.'">


                    <input type="submit" value="Atualizar">
                </form>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="../../assets/js/mobile-navbar.js"></script>
            <script src="../../assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

    public function delete($data){
        if(!isset($_SESSION)){
            session_start();
        }
        if(!isset($_SESSION ['id'])){
            header("Location: ".URL_BASE. "/login");
        }
        $id = $data["id"];
        $user = (new Post())->findById($id);
        if($user) {
            $user->destroy();
        }
        header("Location: ". URL_BASE . "/admin");
    }

    public function error($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Página não encontrada!</title>
            <link rel="stylesheet" href="../assets/css/style.css">
            <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
        </head>
        <body>
            <header>
            <nav id="nav">
                <abbr title="Leaffy"><img src="../assets/img/logo-white.webp" class="logo" alt="Logo Leaffy"></abbr>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="'.URL_BASE.'" class="anav">Home</a></li>
                    <li><a href="'.URL_BASE.'/dicas" class="anav">Dicas</a></li>
                    <li><a href="'.URL_BASE.'/dispositivo" class="anav">Dispositivo</a></li>
                    <li><a href="'.URL_BASE.'/contato" class="anav">Contato</a></li>
                </ul>
            </nav>
            </header>
            <main id="erromain">
                <h1><span class="destaque">Oops, parece que essa página não existe!</span></h1>
                <p>Não foi encontrada nenhuma página com este nome!</p>
                <p>ERRO '.$data["errcode"].'</p>
            </main>
            <footer>
                <p>Leaffy &copy;</p>
            </footer>
            <script src="../assets/js/mobile-navbar.js"></script>
            <script src="../assets/js/menu.js"></script>
        </body>
        </html>
        ';
    }

}