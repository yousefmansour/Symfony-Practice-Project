<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_321f4ce39883198f48d0202fc2add41ff57df0bd60bd2b04b341b4a79b448e90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d95ad65d7ff5aaaebb9488a10ebf4d489c286702d9316c4d7ef473e180d6b4a8 = $this->env->getExtension("native_profiler");
        $__internal_d95ad65d7ff5aaaebb9488a10ebf4d489c286702d9316c4d7ef473e180d6b4a8->enter($__internal_d95ad65d7ff5aaaebb9488a10ebf4d489c286702d9316c4d7ef473e180d6b4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d95ad65d7ff5aaaebb9488a10ebf4d489c286702d9316c4d7ef473e180d6b4a8->leave($__internal_d95ad65d7ff5aaaebb9488a10ebf4d489c286702d9316c4d7ef473e180d6b4a8_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_98a850fb7b1f795253fe60a4518b03fcbd5b7cddd39ba96eabaa35c196666e42 = $this->env->getExtension("native_profiler");
        $__internal_98a850fb7b1f795253fe60a4518b03fcbd5b7cddd39ba96eabaa35c196666e42->enter($__internal_98a850fb7b1f795253fe60a4518b03fcbd5b7cddd39ba96eabaa35c196666e42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_98a850fb7b1f795253fe60a4518b03fcbd5b7cddd39ba96eabaa35c196666e42->leave($__internal_98a850fb7b1f795253fe60a4518b03fcbd5b7cddd39ba96eabaa35c196666e42_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
