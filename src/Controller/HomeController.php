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
                    return $this->render('index.html.twig',[
                              "var" => "Memang ganteng"
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
