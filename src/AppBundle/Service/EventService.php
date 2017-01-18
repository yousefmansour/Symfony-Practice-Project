<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpFoundation\Session\Session;

class EventService {
    
    private $em;
    private $session;
    
    public function __construct(EntityManager $em, Session $session)
    {
        $this->em = $em;
        $this->session = $session;
    }
    
    public function joinEvent($teamId, $eventId){
        
        $event = $this->em->getRepository('AppBundle:Event')->find($eventId);
        $team = $this->em->getRepository('AppBundle:Team')->find($teamId);
        
        $eventTeamSize = $event->getSport()->getTeamSize();
        $playerCount = count($team->getPlayers());
        
        if($playerCount < $eventTeamSize){
            
            $shortage = $eventTeamSize - $playerCount;
            $errorMessage = '';
            
            if($shortage === 1){
                
                $errorMessage = 'Your team needs 1 more player.';
            } else {
                
                $errorMessage = 'Your team needs '.$shortage.' more players.';
            }
            $this->session
                ->getFlashBag()
                ->add('error', $errorMessage);
            
            return false;
        }
        
        if($team && $event){
            
            $event->addTeam($team);
            $this->em->persist($event);
            $this->em->flush();
            
            return true;
        }

        return false;
    }
    
    public function leaveEvent($teamId, $eventId){
        
        $event = $this->em->getRepository('AppBundle:Event')->find($eventId);
        $team = $this->em->getRepository('AppBundle:Team')->find($teamId);
        
        if($team){
            
            $event->removeTeam($team);
            $this->em->persist($event);
            $this->em->flush();
        }
        
        return $this;
    }
    
    public function deleteEvent($eventId){
        
        $event = $this->em->getRepository('AppBundle:Event')->find($eventId);
        $this->em->remove($event);
        $this->em->flush();
        
        return $this;
    }
}
