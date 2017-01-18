<?php

namespace AppBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class EventType extends AbstractType {
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        
        $builder
            ->add('name', TextType::class, array('label' => 'Event name'))
            ->add('time', DateTimeType::class, array(
                'label' => 'Event time',
                'minutes' => array('10', '20', '30', '40', '50', '60'),
                'years' => range(date('Y'), date('Y') + 1)))
            ->add('sport', EntityType::class, array(
                'label' => 'Sport',
                'class' => 'AppBundle:Sport',
                'choice_label' => 'name'))
            ->add('submit', SubmitType::class, array('label' => 'Create event'));
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Event'
        ));
    }
}