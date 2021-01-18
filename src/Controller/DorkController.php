<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DorkController extends AbstractController
{
    /**
     * @Route("/dork", name="dork")
     */
    public function index(): Response
    {
        return $this->render('dork/index.html.twig', [
            'controller_name' => 'DorkController',
        ]);
    }
}
