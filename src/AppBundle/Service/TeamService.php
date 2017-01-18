<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class TeamService {
    
    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }
    
    public function deleteTeamIfEmpty($teamId){
        
        $team = $this->em->getRepository('AppBundle:Team')->find($teamId);
        if($team && count($team->getPlayers()) === 0){

            $this->delete($team);
        }
        
        return $this;
    }
    
    public function deleteTeam($teamId){

        $team = $this->em->getRepository('AppBundle:Team')->find($teamId);
        if($team){
             
            $this->emptyTeam($teamId);
            $this->delete($team);
        }
        
        return $this;
    }
    
    public function emptyTeam($teamId){
        $query = $this->em->createQuery(
            'UPDATE AppBundle:Player p
             SET p.team = NULL
             WHERE p.team = :id'
        )->setParameter('id', $teamId);
        
        $query->execute();
        
        return $this;
    }
    
    private function delete($team){
        
        $this->em->remove($team);
        $this->em->flush();
        
        return $this;
    }
    
    public function getTeamEvents($teamId){
        
        $events = $this->em->getRepository('AppBundle:Event')->findAll();
        
        $eventArr = [];
        
        foreach($events as $e){
            
            $teams = $e->getTeams();
            foreach($teams as $t){
                if($t->getId() === (int)$teamId){
                    $eventArr[] = $e->getId();
                }
            }
        }
        
        return $eventArr;
    }
}
