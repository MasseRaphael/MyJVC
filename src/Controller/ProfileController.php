<?php

namespace App\Controller;

use App\Entity\Articles;
use App\Entity\Users;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProfileController extends AbstractController
{
    /**
     * @Route("/profile/{username}", name="profile")
     */
    public function index($username)
    {
        $users = $this->getDoctrine()->getRepository(Users::class)->findOneBy(['username' => $username]);
        return $this->render('profile/index.html.twig', [
            'users' => $users,
        ]);
    }
}
