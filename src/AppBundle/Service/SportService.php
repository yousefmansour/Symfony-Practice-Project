<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class SportService {
    
    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function deleteSport($sportId){
        
        $this->deleteEventsWithSport($sportId);
        
        $sport = $this->em->getRepository('AppBundle:Sport')->find($sportId);
        $this->em->remove($sport);
        $this->em->flush();
        
        return $this;
    }
    
    private function deleteEventsWithSport($sportId){
        
        $events = $this->em->getRepository('AppBundle:Event')->findBySport($sportId);
        
        foreach($events as $e){
            $this->em->remove($e);
        }
        
        $this->em->flush();
        
        return $this;
    }
}
