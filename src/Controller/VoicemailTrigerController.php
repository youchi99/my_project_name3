<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\VoicemailTriger;
use App\Form\VoicemailTrigerType;

class VoicemailTrigerController extends AbstractController
{
       /**
      * @Route("/voicemailTriger",name="voicemailTriger")
      */
    public function index(Request $request)
    {
        $voicemailTriger = new VoicemailTriger();
        // ...

        $form = $this->createForm(VoicemailTrigerType::class,$voicemailTriger);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $voicemailTriger = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($voicemailTriger);
            $entityManager->flush();

            return $this->redirectToRoute('voicemailTriger');

        }

        return $this->renderForm('voicemailTriger.html.twig', [
            'form' => $form,
        ]);

        
    }
}