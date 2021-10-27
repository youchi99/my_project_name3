<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\SipusersTriger;
use App\Form\SipusersTrigerType;

class SipusersTrigerController extends AbstractController
{
       /**
      * @Route("/sipusersTriger",name="sipusersTriger")
      */
    public function index(Request $request)
    {
        $sipusersTriger = new SipusersTriger();
        // ...

        $form = $this->createForm(SipusersTrigerType::class,$sipusersTriger);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $sipusersTriger = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($sipusersTriger);
            $entityManager->flush();

            return $this->redirectToRoute('sipusersTriger');

        }

        return $this->renderForm('sipusersTriger.html.twig', [
            'form' => $form,
        ]);

        
    }
}