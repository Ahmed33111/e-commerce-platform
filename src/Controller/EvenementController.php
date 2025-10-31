<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EvenementController extends AbstractController
{
    #[Route('/evenements', name: 'evenement_index')]
    public function index(): Response
    {
        return $this->render('evenement/index.html.twig');
    }

    #[Route('/evenements/new', name: 'evenement_new')]
    public function new(): Response
    {
        return $this->render('evenement/form.html.twig', ['title' => 'Créer un événement']);
    }
}
