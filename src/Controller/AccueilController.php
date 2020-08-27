<?php

namespace App\Controller;

use App\Entity\Articles;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy([],['created_at' => 'desc'], 6);
        $listeArticles = $this->getDoctrine()->getRepository(Articles::class)->findBy([],['created_at' => 'desc'], 10);
        return $this->render('accueil/index.html.twig',
        [
            'articles' => $articles,
            'listeArticles' => $listeArticles,
        ]);
    }

}