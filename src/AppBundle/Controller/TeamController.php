<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\TeamType;
use AppBundle\Entity\Team;

class TeamController extends Controller
{
    public function listTeamsAction()
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Team');
        $teams = $repository->findAll();
            
        return $this->render('AppBundle:Teams:team_list.html.twig', array(
            'teams' => $teams
        ));
    }   
    
    public function createTeamAction(Request $request){
        
        $team = new Team();
        $form = $this->createForm(TeamType::class, $team);
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($team);
            $em->flush();
            
            $teamId = $team->getId();
            $userId = $this->getUser()->getId();
            
            $this->get('app.player')->joinTeam($userId, $teamId);
            
            $this->addFlash('success', 'Team has been created!');
            
            return $this->redirectToRoute('team_list');
        }
        
        return $this->render('AppBundle:Teams:team_create.html.twig', array(
            'form' => $form->createView()
        ));
    }
    
    public function viewTeamAction($teamId){
        
        $repository = $this->getDoctrine()->getRepository('AppBundle:Team');
        
        $team = $repository->find($teamId); 
        
        if($team){
            
            return $this->render('AppBundle:Teams:team_view.html.twig', array(
                'team' => $team
            ));
        } else {
            return $this->redirectToRoute('team_list');
        }
    }
    
    public function deleteTeamAction($teamId){

        $this->get('app.team')->deleteTeam($teamId);
        
        return $this->redirectToRoute('team_list');
    }
}
