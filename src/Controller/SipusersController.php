<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Extensions;
use App\Entity\Sipusers;
use App\Form\SipusersType;

class SipusersController  extends AbstractController
{
    /**
      * @Route("/extension",name="extensions")
      */
      public function index(Request $request)
      {

                // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
      //  $entityManager = $this->getDoctrine()->getManager();

        $sipusers = new Sipusers();


        // $sipusers->setName('1008');
        // $sipusers->setDefaultuser('1008');
        // $sipusers->setHost('dynamic');
        // $sipusers->setFromuser('1008');
        // $sipusers->setFromdomain('ec2lt.sn');
        // $sipusers->setMailbox('1008');
        // $sipusers->setIpaddr(null);
        // $sipusers->setPort(null);
        // $sipusers->setRegseconds(null);
        // $sipusers->setDefaultuser(null);
        // $sipusers->setFullcontact(null);
        // $sipusers->setRegserver(null);
        // $sipusers->setUseragent(null);
        // $sipusers->setLastms(null);
        // $sipusers->setHost(null);
        // $sipusers->setType(null);
        // $sipusers->setContext(null);
        // $sipusers->setPermit(null);
        // $sipusers->setDeny(null);
        // $sipusers->setMd5secret(null);
        // $sipusers->setRemotesecret(null);
        // $sipusers->setTransport(null);
        // $sipusers->setDtmfmode(null);
        // $sipusers->setDirectmedia(null);
        // $sipusers->setNat(null);
        // $sipusers->setCallgroup(null);
        // $sipusers->setPickupgroup(null);
        // $sipusers->setLanguage(null);
        // $sipusers->setDisallow(null);
        // $sipusers->setAllow(null);
        // $sipusers->setInsecure(null);
        // $sipusers->setTrustrpid(null);
        // $sipusers->setProgressinband(null);
        // $sipusers->setPromiscredir(null);
        // $sipusers->setUseclientcode(null);
        // $sipusers->setAccountcode(null);
        // $sipusers->setSetvar(null);
        // $sipusers->setCallerid(null);
        // $sipusers->setAmaflags(null);
        // $sipusers->setCallcounter(null);
        // $sipusers->setBusylevel(null);
        // $sipusers->setAllowoverlap(null);
        // $sipusers->setAllowsubscribe(null);
        // $sipusers->setVideosupport(null);
        // $sipusers->setMaxcallbitrate(null);
        // $sipusers->setRfc2833compensate(null);
        // $sipusers->setMailbox(null);
        // $sipusers->setSessionTimers(null);
        // $sipusers->setSessionExpires(null);
        // $sipusers->setSessionMinse(null);
        // $sipusers->setSessionRefresher(null);
        // $sipusers->setT38ptUsertpsource(null);
        // $sipusers->setRegexten(null);
        // $sipusers->setFromdomain(null);
        // $sipusers->setQualify(null);
        // $sipusers->setDefaultip(null);
        // $sipusers->setRtptimeout(99);
        // $sipusers->setRtpholdtimeout(null);
        // $sipusers->setSendrpid(null);
        // $sipusers->setOutboundproxy(null);
        // $sipusers->setCallbackextension(null);
        // $sipusers->setTimert1(null);
        // $sipusers->setTimerb(null);
        // $sipusers->setQualifyfreq(null);
        // $sipusers->setConstantssrc(null);
        // $sipusers->setContactpermit(null);
        // $sipusers->setContactdeny(null);
        // $sipusers->setUsereqphone(null);
        // $sipusers->setTextsupport(null);
        // $sipusers->setFaxdetect(null);
        // $sipusers->setBuggymwi(null);
        // $sipusers->setAuth(null);
        // $sipusers->setFullname(null);
        // $sipusers->setTrunkname(null);
        // $sipusers->setCidNumber(null);
        // $sipusers->setCallingpres(null);
        // $sipusers->setMohinterpret(null);
        // $sipusers->setMohsuggest(null);
        // $sipusers->setParkinglot(null);
        // $sipusers->setHasvoicemail(null);
        // $sipusers->setSubscribemwi(null);
        // $sipusers->setVmexten(null);
        // $sipusers->setAutoframing(null);
        // $sipusers->setRtpkeepalive(null);
        // $sipusers->setCallLimit(null);
        // $sipusers->setG726nonstandard(null);
        // $sipusers->setIgnoresdpversion(null);
        // $sipusers->setAllowtransfer(null);
        // $sipusers->setDynamic(null);
        // $sipusers->setSippasswd(null);

        // $sipusers->setDescription('Ergonomic and stylish!');
        
        // tell Doctrine you want to (eventually) save the Product (no queries yet)
      //  $entityManager->persist($sipusers);

        // actually executes the queries (i.e. the INSERT query)
     //   $entityManager->flush();






//*******Old code v     ******** */
        $entityManager = $this->getDoctrine()->getManager();


          $extensions = new Extensions();
          
          // ...
  
          $form = $this->createForm(SipusersType::class,$sipusers);
  
          $form->handleRequest($request);
  
          if($form->isSubmitted() && $form->isValid()){
  
              $sipusers->set = $form->getData();
            // dd($sipusers);
            // echo $sipusers->getHost();
  
              $sipusers = $this->getDoctrine()->getManager();
             $sipusers->persist($sipusers);
              $sipusers->flush();
  
              return $this->redirectToRoute('extensions');
  
          }
  
          return $this->renderForm('extensions.html.twig', [
              'form' => $form,
          ]);
  
          
      }
}