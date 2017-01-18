<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;

class LoginController extends Controller
{
    public function loginAction(Request $request)
    {          
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        
        $session = $request->getSession();
        $lastUsername = $session->get('registered');
        
        if(!$lastUsername){
            
            $lastUsername = $authenticationUtils->getLastUsername();
        }
        
        $form = $this->get('form.factory')->createNamedBuilder(null)
                ->add('_username', TextType::class, array(
                    'label' => 'Username',
                    'block_name' => 'custom_name', 
                    'data' => $lastUsername))
                ->add('_password', PasswordType::class, array(
                    'label' => 'Password'))
                ->add('submit', SubmitType::class, array(
                    'label' => 'Log in'))
                ->getForm();
           
        return $this->render(
            'AppBundle:Login:login.html.twig', 
            array(
                'form' => $form->createView(),
                'last_username' => $lastUsername,
                'error' => $error
            )
        );
    }
}
