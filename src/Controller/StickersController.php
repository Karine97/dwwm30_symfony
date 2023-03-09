<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StickersController extends AbstractController
{
    #[Route('/stickers', name: 'app_stickers')]
    public function index(): Response
    {
        return $this->render('stickers/index.html.twig', [
            'controller_name' => 'StickersController',
        ]);
    }
}
