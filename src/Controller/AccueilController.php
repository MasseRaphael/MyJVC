<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('accueil/index.html.twig',
        [
            'listes' => [
                'Titre_1',
                'Titre_2',
                'Titre_3',
                'Titre_4',
                'Titre_5',
                'Titre_6',
            ],
            'articles' => [
                [
                    'image' => 'images/1.jpg',
                    'titre' => 'Titre_1'
                ],
                [
                    'image' => 'images/2.jpg',
                    'titre' => 'Titre_2'
                ],
                [
                    'image' => 'images/3.jpg',
                    'titre' => 'Titre_3'
                ],
                [
                    'image' => 'images/4.jpg',
                    'titre' => 'Titre_4'
                ],
                [
                    'image' => 'images/5.jpg',
                    'titre' => 'Titre_5'
                ],
                [
                    'image' => 'images/6.jpg',
                    'titre' => 'Titre_6'
                ],
            ]
        ]);
    }

}