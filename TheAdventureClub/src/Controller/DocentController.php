<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DocentController extends AbstractController
{
    #[Route('/docent', name: 'app_docent')]
    public function index(): Response
    {
        return $this->render('docent/index.html.twig', [
            'controller_name' => 'DocentController',
        ]);
    }
}
