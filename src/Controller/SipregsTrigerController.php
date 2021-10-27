<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SipregsTriger;
use App\Form\SipregsTrigerType;

class SipregsTrigerController extends AbstractController
{
       /**
      * @Route("/sipregsTriger",name="sipregsTriger")
      */
    public function index(Request $request)
    {
        $sipregsTriger = new SipregsTriger();
        // ...

        $form = $this->createForm(SipregsTrigerType::class,$sipregsTriger);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $sipregsTriger = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sipregsTriger);
            $entityManager->flush();

            return $this->redirectToRoute('sipregsTriger');

        }

        return $this->renderForm('sipregsTriger.html.twig', [
            'form' => $form,
        ]);

        
    }
}