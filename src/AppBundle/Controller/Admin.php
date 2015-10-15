<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

class Admin
{
    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    public function __invoke()
    {
        return new Response(
            $this->templating->render('AppBundle:Admin:admin.html.twig')
        );
    }
}