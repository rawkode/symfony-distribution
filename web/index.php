<?php

require_once __DIR__.'/../boot/autoload.php';

use Symfony\Component\HttpFoundation\Request;

$environment = $_SERVER['SYMFONY_ENVIRONMENT'] ?: 'production';
$debug = $_SERVER['SYMFONY_DEBUG'] ?: false;

$kernel = new AppKernel($environment, $debug);

$kernel->loadClassCache();

$request = Request::createFromGlobals();

$response = $kernel->handle($request);
$response->send();

$kernel->terminate($request, $response);
