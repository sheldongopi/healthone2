<?php

namespace App\Controller;

use App\Form\MedicijnFormType;
use App\Repository\MedicijnenRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MedicijnController extends AbstractController
{
    /**
     * @Route ("/medicijnen/create", name="medicijn_create")
     */
    public function create(EntityManagerInterface $em, Request $request) {
        $form = $this->createForm(MedicijnFormType::class);
        $form->add('create', SubmitType::class, ['label'=>'Aanmaken']);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $em->persist($data);
            $em->flush();

            return $this->redirectToRoute('medicijn');
        }
        return $this->render('medicijnen/create.html.twig', [
            'medicijnForm' => $form->createView(),
        ]);
    }

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
