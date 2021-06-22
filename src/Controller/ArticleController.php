<?php 

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Form\ArticleType;






class ArticleController extends AbstractController
{
	/**
	 * @Route("/article/new", name="article_new")
	 * @param Request $request
	 * @return Response
	 */
	public function new(Request $request): Response
	{
		$article = new Article();
		$form = $this->createForm(ArticleType::class, $article);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid()) { //Jika isian form valid maka,
			$data = $this->getDoctrine()->getManager();

			$data->persist($article);
			$data->flush();

			return $this->redirectToRoute('home');
		}
		return $this->render('article/new.html.twig', [
			"form" => $form->createView()
		]);
	}
}
