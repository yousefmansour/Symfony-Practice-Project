<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Event;
use AppBundle\Form\EventType;

class EventController extends Controller
{
    public function listEventsAction() {   
        
        $em = $this->getDoctrine()->getManager();
        
        $time = new \DateTime("now");
            
        $query = $em->createQuery('
            SELECT e FROM AppBundle:Event e
            WHERE e.time > :time')
            ->setParameter('time', $time);

        $events = $query->getResult();
        
        $user = $this->getUser();
        $teamEvents = [];

        if($this->userHasTeam($user)){
            
            $teamId = $user->getTeam()->getId();
            $teamEvents = $this->get('app.team')->getTeamEvents($teamId);
        }

        return $this->render('AppBundle:Events:event_list.html.twig', array(
            'events' => $events,
            'teamEvents' => $teamEvents
        ));
    }
    
    public function joinEventAction($eventId) {
        
        $user = $this->getUser();
        
        if(!$this->userHasTeam($user)){
            
            $this->addFlash('error', 'You do not have a team.');
            
            return $this->redirectToRoute('event_list');
        }
        
        $teamId = $user->getTeam()->getId();  
        
        if($this->get('app.event')->joinEvent($teamId, $eventId)){
            
            $this->addFlash('success', 'You have joined the event!');
        }

        return $this->redirectToRoute('event_list');
    }
    
    public function leaveEventAction($eventId){
        
        $user = $this->getUser();
        
        if($this->userHasTeam($user)){
            
            $teamId = $user->getTeam()->getId();
            $this->get('app.event')->leaveEvent($teamId, $eventId);
            
            $this->addFlash('success', 'You have left the event!');
        }
        
        return $this->redirectToRoute('event_list');
    }
    
    public function viewEventAction($eventId){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Event'); 
        $event = $repository->findOneById($eventId); 
        
        if($event){
            
            return $this->render('AppBundle:Events:event_view.html.twig', array(
                'event' => $event
            ));
        } else {
            
            return $this->redirectToRoute('event_list');
        }
    }
    
    public function createEventAction(Request $request){
        
        $event = new Event();
        $form = $this->createForm(EventType::class, $event);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            
            $this->addFlash('success', 'Event has been created!');
            
            return $this->redirectToRoute('event_list');
        }
        
        return $this->render('AppBundle:Events:event_create.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function deleteEventAction($eventId){
        
        $this->get('app.event')->deleteEvent($eventId);
        
        return $this->redirectToRoute('event_list');
    }
    
    private function userHasTeam($user){
        
        if(method_exists($user, 'getTeam')){
            
            if($user->getTeam()){
                return true;
            }
        }
        return false;
    }
}
