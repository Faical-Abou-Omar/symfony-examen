<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TheAdventureClubController extends AbstractController
{
    #[Route('/', name: 'app_the_adventure_club')]
    public function home(): Response
    {
        if($this->isGranted('ROLE_ADMIN')) {
            return  $this->redirectToRoute(('app_admin'));
        }

        if($this->isGranted('ROLE_MEMBER')) {
            return  $this->redirectToRoute(('app_member'));
        }

        if($this->isGranted('ROLE_DOCENT')) {
            return  $this->redirectToRoute(('app_docent'));
        }
        return $this->render('the_adventure_club/index.html.twig', [
        ]);
    }
}
