<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use App\Repository\ArticleRepository;
use App\Entity\Article;

class HomeController extends AbstractController
{
          /**
          * @Route("/", name="RouteName")
          */
          public function home()
          {
               $data =  $this->getDoctrine()->getManager();
               $article = new Article();

               $article->setTitle('artikel kami');
               $article->setDescription('tentang deskripsi');
               $article->setImage('images');
               $article->setPublished(1);
               $data->persist($article);
               $data->flush();
               return $this->render('index.html.twig',[
                    "article" => $article
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
