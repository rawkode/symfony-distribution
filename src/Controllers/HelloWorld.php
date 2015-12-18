<?php

namespace Application\Controllers;

use Symfony\Component\HttpFoundation\Response;

class HelloWorld
{
    /** @var \Twig_Environment $twigEnvironment */
    private $twigEnvironment;

    public function __construct(\Twig_Environment $twigEnvironment)
    {
        $this->twigEnvironment = $twigEnvironment;
    }

    public function __invoke()
    {
        return new Response(
            $this->twigEnvironment->render('@Application/HelloWorld.html.twig', []),
            Response::HTTP_OK
        );
    }
}
