<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\General;
use App\Form\GeneralType;

class ConfGeneralController extends AbstractController
{
       /**
      * @Route("/conf",name="configuration_general")
      */
    public function index(Request $request)
    {
        $general = new General();
        // ...

        $form = $this->createForm(GeneralType::class,$general);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $general = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($general);
            $entityManager->flush();

            return $this->redirectToRoute('configuration_general');

        }

        return $this->renderForm('conf_general.html.twig', [
            'form' => $form,
        ]);

        
    }
}