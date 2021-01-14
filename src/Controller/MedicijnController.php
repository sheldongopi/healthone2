<?php

namespace App\Controller;

use App\Repository\MedicijnenRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicijnController extends AbstractController
{
    /**
     * @Route("/medicijn", name="medicijn")
     */
    public function read(MedicijnenRepository $medicijnenRepository)
    {
        $medicijn = $medicijnenRepository->findAll();

        return $this->render('medicijnen/medicijn.html.twig', [
            'medicijnen' => $medicijn,
        ]);
    }
}
