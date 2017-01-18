<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\UserType;
use AppBundle\Entity\Player;
use Symfony\Component\HttpFoundation\Session\Session;

class RegistrationController extends Controller {
    
    public function registerAction(Request $request){
        
        $user = new Player();
        $form = $this->createForm(UserType::class, $user);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            
            $password = $this->get('security.password_encoder')
                    ->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $this->addFlash('success', 'Registration successful!');
            
            $session = $request->getSession();
            $session->set('registered', $user->getUsername());
            
            return $this->redirectToRoute('login');
        }
        
        return $this->render(
            'AppBundle:Registration:register.html.twig',
            array('form' => $form->createView())    
        );
    }
}
