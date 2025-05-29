<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class KervenController extends AbstractController
{
    #[Route('/kerven', name: 'app_kerven')]
    public function index(): Response
    {
        return $this->render('kerven/index.html.twig', [
            'controller_name' => 'KervenController',
        ]);
    }
} 