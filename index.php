<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;


$router = new Router(URL_BASE);

/*
 * Controllers
 */
$router->namespace("Source\App");

/*
 * WEB
 * home
 */
$router->group(null);
$router->get("/", "Web:homepage");

/*
 * Dicas 
*/
$router->group("dicas");
$router->get("/", "Web:dicas");
$router->get("/{slug}", "Web:post");

/*
 * Dispositivo 
*/
$router->group("dispositivo");
$router->get("/", "Web:dispositivo");

/*
 * Contato 
*/
$router->group("contato");
$router->get("/", "Web:contato");

/*
 * Delete 
*/
$router->group("deletar");
$router->get("/", "Web:delete");
$router->get("/{id}", "Web:delete");


/*
 * ERROS
 */
$router->group("oops");
$router->get("/{errcode}", "Web:error");


$router->dispatch();

if($router->error()) {
    $router->redirect("/oops/{$router->error()}");
}