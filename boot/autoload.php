<?php

/*
 * Want to use @annotations? Add the following use statement and
 * 	the AnnotationRegistry snippet before returning the loader.
 *
 * use Doctrine\Common\Annotations\AnnotationRegistry;
 * AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
 */
use Composer\Autoload\ClassLoader;

/* @var ClassLoader */
$loader = require_once __DIR__.'/../lib/autoload.php';

return $loader;
