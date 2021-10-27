<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Goip;
use App\Form\GoipType;

class GoipController extends AbstractController
{
       /**
      * @Route("/goip",name="goip")
      */
      public function index(Request $request)
      {
          $goip = new Goip();
          // ...
  
          $form = $this->createForm(GoipType::class,$goip);
  
          $form->handleRequest($request);
  
          if($form->isSubmitted() && $form->isValid()){
  
              $goip = $form->getData();
  
              $entityManager = $this->getDoctrine()->getManager();
              $entityManager->persist($goip);
              $entityManager->flush();
  
              return $this->redirectToRoute('goip');
  
          }
  
          return $this->renderForm('Goip.html.twig', [
              'form' => $form,
          ]);
  
          
      }
}