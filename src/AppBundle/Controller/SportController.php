<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\SportType;
use AppBundle\Entity\Sport;

class SportController extends Controller {
    
    public function listSportAction(){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Sport');
        $sports = $repository->findAll();
            
        return $this->render('AppBundle:Sports:sport_list.html.twig', array(
            'sports' => $sports
        ));
    }
    
    public function createSportAction(Request $request){
        
        $sport = new Sport();
        $form = $this->createForm(SportType::class, $sport);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){   
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($sport);
            $em->flush();

            $this->addFlash('success', 'New sport has been added!');
            
            return $this->redirectToRoute('sport_list');
        }
        
        return $this->render(
            'AppBundle:Sports:sport_create.html.twig',
            array('form' => $form->createView())    
        );
    }
    
    public function deleteSportAction($sportId){
        
        $this->get('app.sport')->deleteSport($sportId);
        
        $this->addFlash('success', 'Sport has been removed!');
        
        return $this->redirectToRoute('sport_list');
    }   
}
