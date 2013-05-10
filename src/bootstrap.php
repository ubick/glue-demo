<?php

/**
 *
 * PHP version  5.3
 * @author      Liviu Panainte <liviu.panainte at gmail.com>
 */

$app = new Glue\Application();
$app->loadConfig(__DIR__ . '/../app/config');
$app->loadRoutes(__DIR__ . '/../app/config/routing.yml');

// twig templating engine
$app->register(new Glue\Provider\TwigProvider());

$app->run();