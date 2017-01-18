<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PlayerController extends Controller {
    
    public function joinTeamAction($teamId){
        
        $user = $this->getUser();
        $userId = $user->getId();
        
        if(!$user->getTeam()){
            
            $this->get('app.player')->joinTeam($userId, $teamId);
            
            $this->addFlash('success', 'You have joined the team!');
        } else {
            
            $this->addFlash('error', 'You already have a team.');
        }
        
        return $this->redirectToRoute('team_list');
    }
    
    public function leaveTeamAction(){   

        $user = $this->getUser();
        
        if(!$user->getTeam()){
            
            return $this->redirectToRoute('team_list');
        }
        $userId = $user->getId();      
        $teamId = $user->getTeam()->getId();
        
        $this->get('app.player')->leaveTeam($userId);
        $this->get('app.team')->deleteTeamIfEmpty($teamId);
        
        $this->addFlash('success', 'You have left the team!');
        
        return $this->redirectToRoute('team_list');
    }
}
