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
                            <abbr title="Logo Leaffy"><img style="width: 330px; height: 50px;" src="assets/img/logo.png" alt="Placa ESP32"></abbr>
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
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Como e quando regar suas plantinhas</h3>
                                <p>Saiba o que fazer quando sua plantinha precisar de água!</p>
                            </div>
                        </a>
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Iluminação ideal para cada tipo de planta</h3>
                                <p>Cuidado com a quantidade de exposição à luz de sua plantinha!</p>
                            </div>
                        </a>
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Como e quando regar suas plantinhas</h3>
                                <p>Saiba o que fazer quando sua plantinha precisar de água!</p>
                            </div>
                        </a>
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Como e quando regar suas plantinhas</h3>
                                <p>Saiba o que fazer quando sua plantinha precisar de água!</p>
                            </div>
                        </a>
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Como e quando regar suas plantinhas</h3>
                                <p>Saiba o que fazer quando sua plantinha precisar de água!</p>
                            </div>
                        </a>
                        <a class="apost" href="#">
                            <div class="postagem">
                                <h3>Iluminação ideal para cada tipo de planta</h3>
                                <p>Cuidado com a quantidade de exposição à luz de sua plantinha!</p>
                            </div>
                        </a>
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
        echo '<h1>Aqui terá um post</h1>';
        var_dump($data);
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
                            <p class="justify">Nosso produto é um dispositivo feito em Arduino, utilizando a placa Esp32. Sua função é te auxiliar nos cuidados com a sua plantinha!</p>
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
        echo "<h1>Web Erro!! {$data["errcode"]}</h1>";
        var_dump($data);
    }

}