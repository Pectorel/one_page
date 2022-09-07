<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController
{

    #[Route("/")]
    public function home(): Response{

        $text = "Hello World";

        return new Response(
            "<html><body><p>" . $text . "</p></body></html>"
        );

    }

}