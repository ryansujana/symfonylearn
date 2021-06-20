<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
          /**
          * @Route("/", name="RouteName")
          */
          public function home()
          {
               $tabs = [1, 2, 3, 4, 5]; 
               $bool = true;
               return $this->render('index.html.twig',[
                    "var"     => "Memang ganteng",
                    'tabs'    => $tabs,
                    "bool"    => $bool
               ]);
          }

               /**
          * @Route("/params/{name}", name="name", defaults={"name": "Suwandi"}, methods={"GET"})
          */
               public function params(string $name)
               {
                    return new Response( "Nama : $name" );
               }

          }
