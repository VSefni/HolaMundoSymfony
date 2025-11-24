<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HolaMundoController extends AbstractController
{
    #[Route('/', name: 'inicio')]
    public function inicio() : Response
    {
        return $this->render('base.html.twig');
    }

    #[Route('/saludar/{nombre}', name: 'saludar')]
    public function saludar($nombre = 'Chuck') : Response
    {
        return $this->render('saludo.html.twig', [
            'nombre' => $nombre,
            'hobbies' => ['Pelear', 'Dispara', 'Hacer botijos', 'Curar chorizos']
        ]);
    }
}