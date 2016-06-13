<?php

namespace Application\Homepage;

use Symfony\Component\HttpFoundation\Response;

class Controller
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
            $this->twigEnvironment->render('@Application/homepage.html.twig', []),
            Response::HTTP_OK
        );
    }
}
