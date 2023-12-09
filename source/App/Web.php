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
            <title>Home</title>
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>
            <header class="landing-header">
                <nav id="nav">
                    <abbr title="Leaffy"><img src="assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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
                            <p>A Leaffy&copy; é uma empresa criada por uma equipe de programadores e analistas, e seu principal objetivo é promover a <span class="destaque">conscientização ambiental</span> através de um <a href="'.URL_BASE.'/dispositivo" class="inlinea">dispositivo de auxílio de plantio</a>!</p>
                        </div>
                        <div class="img">
                            <abbr title="Logo Leaffy"><img id="logoblack" style="width: 330px; height: 50px;" src="assets/img/logo.png" alt="Logotipo"></abbr>
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
        </head>
        <body>
            <header class="landing-header" id="headerposts">
                <nav id="nav">
                    <abbr title="Leaffy"><img src="assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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
                <abbr title="Leaffy"><img src="../assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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
                if($postlist->titulo1 != ""){
                    echo '<h2>'.$postlist->titulo1.'</h2>';
                }
                if($postlist->texto1 != ""){
                    echo '<p>'.$postlist->texto1.'</p>';
                }
                if($postlist->imagem1 != ""){
                    echo '<img src="'.$postlist->imagem1.'">';
                }
                if($postlist->titulo2 != ""){
                    echo '<h2>'.$postlist->titulo2.'</h2>';
                }
                if($postlist->texto2 != ""){
                    echo '<p>'.$postlist->texto2.'</p>';
                }
                if($postlist->imagem2 != ""){
                    echo '<img src="'.$postlist->imagem2.'">';
                }
                if($postlist->titulo3 != ""){
                    echo '<h2>'.$postlist->titulo3.'</h2>';
                }
                if($postlist->texto3 != ""){
                    echo '<p>'.$postlist->texto3.'</p>';
                }
                if($postlist->imagem3 != ""){
                    echo '<img src="'.$postlist->imagem3.'">';
                }
                if($postlist->titulo4 != ""){
                    echo '<h2>'.$postlist->titulo4.'</h2>';
                }
                if($postlist->texto4 != ""){
                    echo '<p>'.$postlist->texto4.'</p>';
                }
                if($postlist->imagem4 != ""){
                    echo '<img src="'.$postlist->imagem4.'">';
                }
                if($postlist->titulo5 != ""){
                    echo '<h2>'.$postlist->titulo5.'</h2>';
                }
                if($postlist->texto5 != ""){
                    echo '<p>'.$postlist->texto5.'</p>';
                }
                if($postlist->imagem5 != ""){
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

    public function dispositivo($data){
        echo '
        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Dispositivo</title>
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>
            <header class="landing-header">
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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
                            <abbr title="Placa ARDUINO ESP32"><img src="assets/img/esp32.png" alt="Placa ESP32"></abbr>
                        </div>
                    </div>
                </section>
                <section class="bloco" id="bloco2">
                    <div class="conteudo">
                        <div class="img">
                            <abbr title="Ícone umidade/temperatura"><img src="assets/img/icon.png" alt="Placa ESP32"></abbr>
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
                            <h2 class="center">Adquira seu <span class="destaque">Dispositivo Leaffy</span> e faça do mundo um lugar melhor!</h2>
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
            <title>Posts</title>
            <link rel="stylesheet" href="assets/css/style.css">
        </head>
        <body>
            <header class="landing-header" id="headercontato">
            <nav id="nav">
                <abbr title="Leaffy"><img src="assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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
                    <form id="formcontato">
                        <label for="email">Seu e-mail:</label>
                        <input type="email" name="email" id="email" value="@gmail.com" required>
                        <label for="assunto">Assunto:</label>
                        <input type="text" name="assunto" id="assunto" required>
                        <label for="texto">Texto:</label>
                        <textarea name="texto" id="texto" cols="45" rows="10" required></textarea>
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

    public function delete($data){

        $id = $data["id"];
        $user = (new Post())->findById($id);
        if($user) {
            $user->destroy();
        }
        header("Location: ". URL_BASE);
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
        </head>
        <body>
            <header>
            <nav id="nav">
                <abbr title="Leaffy"><img src="../assets/img/logo-white.png" class="logo" alt="Logo Leaffy"></abbr>
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