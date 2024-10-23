<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewFeatureController extends AbstractController
{
    #[Route('/new/feature', name: 'app_new_feature')]
    public function index(): Response
    {
        return $this->render('new_feature/index.html.twig', [
            'controller_name' => 'NewFeatureController',
        ]);
    }
}
