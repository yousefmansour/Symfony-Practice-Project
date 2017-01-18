<?php

namespace AppBundle\Service;

use Doctrine\ORM\EntityManager;

class PlayerService {
    
    private $em;
    
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function joinTeam($userId, $teamId){
        
        $query = $this->em->createQuery(
                'UPDATE AppBundle:Player p
                SET p.team = :teamId
                WHERE p.id = :userId'
        )->setParameters(array(
            'userId' => $userId,
            'teamId' => $teamId
        ));
        
        $query->execute();
        
        return $this;
    }
    
    public function leaveTeam($userId){
        
        $query = $this->em->createQuery(
                'UPDATE AppBundle:Player p
                 SET p.team = NULL
                 WHERE p.id = :id'
        )->setParameter('id', $userId);

        $query->execute();
        
        return $this;
    }    
}
