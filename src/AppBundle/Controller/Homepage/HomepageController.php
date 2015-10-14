<?php

namespace AppBundle\Controller\Homepage;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Templating\EngineInterface;

class HomepageController
{

    protected $templating;

    public function __construct(EngineInterface $templating)
    {
        $this->templating = $templating;
    }

    public function __invoke()
    {
//        return new Response($this->renderView("AppBundle.index.html.twig"));
        echo "hello calvin";
    }
}