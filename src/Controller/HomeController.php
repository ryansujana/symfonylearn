<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

          class HomeController 
          {
          /**
          * @Route("/", name="RouteName")
          */
          public function home()
          {
                    $number = 125;
                    return new Response ( content: "holaaa $number" );
          }

          /**
          * @Route("/params/{name}", name="name", defaults={"name": "Suwandi"}, methods={"GET"})
          */
          public function params(string $name)
          {
                    return new Response( "Nama : $name" );
          }
          
          }
