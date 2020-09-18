<?php

require __DIR__ . '/../bootstrap/bootstrap.php';

$router = new \OCMS\Router\Router();

$router->processRoute(\OCMS\Http\Request::getMethod(), \OCMS\Http\Request::getRoute());
