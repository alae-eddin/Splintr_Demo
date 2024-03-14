<?php

    // In case one is using PHP 5.4's built-in server
    $filename = __DIR__ . preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
    if (php_sapi_name() === 'cli-server' && is_file($filename)) {
        return false;
    }

    // Include the Router class
    // @note: it's recommended to just use the composer autoloader when working with other packages too
    // require_once __DIR__ . '/../src/Bramus/Router/Router.php';

    // Create a Router
    $router = new \Bramus\Router\Router();

    // Custom 404 Handler
    $router->set404(function () use ($metas) {
        $_metas = $metas[0];
        require("pages/404.php");
    });

    // Before Router Middleware
    $router->before('GET', '/.*', function () {
        header('X-Powered-By: bramus/router');
    });

    // Static route: / (homepage)
    $router->get('/', function () use ($metas) {
         $_metas = $metas[1];
         include "pages/home.php";
    });

    // Static route: /for-business
    $router->get('/for-business', function () use ($metas) {
        $_metas = $metas[4];
        require("pages/for-business.php");
    });

    // Static route: /how-it-works
    $router->get('/how-it-works', function () use ($metas) {
        $_metas = $metas[3];
        require("pages/how-it-works.php");
    });


    // Static route: /splintr-stores
    $router->get('/splintr-stores', function () use ($metas) {
        $_metas = $metas[2];
        require("pages/splintr-stores.php");
    });

    // Static route: /help
    $router->get('/help', function () use ($metas) {
        $_metas = $metas[0];
        require("pages/help.php");
    });

    // Static route: /merchants
    $router->get('/merchants', function () use ($metas) {
        $_metas = $metas[0];
        require("pages/merchants.php");
    });

    // Thunderbirds are go!
    $router->run();

// EOF