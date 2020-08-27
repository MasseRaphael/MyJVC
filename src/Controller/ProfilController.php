<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{
    /**
     * @Route("/profil/{username}", name="profil")
     */
    public function index($username)
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findOneBy(['username' => $username]);
        $articles = $this->getDoctrine()->getRepository(Articles::class)->findBy(['users' => $users]);
        return $this->render('profil/index.html.twig', [
            'users' => $users,
            'articles' => $articles,
        ]);
    }
}
