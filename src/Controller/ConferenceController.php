<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ConferenceController extends AbstractController
{
    #[Route('/{name}', name: 'conference')]
    public function index(string $name): Response
    {

        return $this->render('conference/index.html.twig', [
            'controller_name' => 'ConferenceController',
			'name' => htmlspecialchars($name)
        ]);
    }
}
