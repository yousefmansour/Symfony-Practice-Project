<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_480d029f50ea9b1096770da5a6b0beec0fa5afd2f175bcc0433a2079a45ede7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7cf2945aa788e3c368475c6b4c2ec5a1510965d36bf9d56bc3d0b9a921ed79bf = $this->env->getExtension("native_profiler");
        $__internal_7cf2945aa788e3c368475c6b4c2ec5a1510965d36bf9d56bc3d0b9a921ed79bf->enter($__internal_7cf2945aa788e3c368475c6b4c2ec5a1510965d36bf9d56bc3d0b9a921ed79bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7cf2945aa788e3c368475c6b4c2ec5a1510965d36bf9d56bc3d0b9a921ed79bf->leave($__internal_7cf2945aa788e3c368475c6b4c2ec5a1510965d36bf9d56bc3d0b9a921ed79bf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
