<?php

/* @App/Events/events.html.twig */
class __TwigTemplate_22359c0b3485b8614043dd0deb0384805d825f3c850a3ae26f04f0f729e16c28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Events/events.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:main_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d96de5587c720d6c70a8b17e0b0a42797a412cdcfe7f1ae29dd861eff99ad9e = $this->env->getExtension("native_profiler");
        $__internal_4d96de5587c720d6c70a8b17e0b0a42797a412cdcfe7f1ae29dd861eff99ad9e->enter($__internal_4d96de5587c720d6c70a8b17e0b0a42797a412cdcfe7f1ae29dd861eff99ad9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Events/events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d96de5587c720d6c70a8b17e0b0a42797a412cdcfe7f1ae29dd861eff99ad9e->leave($__internal_4d96de5587c720d6c70a8b17e0b0a42797a412cdcfe7f1ae29dd861eff99ad9e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_65598e7650d8ae02be30bdd6cb7c1e3ad57b90a36e2306b79ec0f62566e3aa40 = $this->env->getExtension("native_profiler");
        $__internal_65598e7650d8ae02be30bdd6cb7c1e3ad57b90a36e2306b79ec0f62566e3aa40->enter($__internal_65598e7650d8ae02be30bdd6cb7c1e3ad57b90a36e2306b79ec0f62566e3aa40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_65598e7650d8ae02be30bdd6cb7c1e3ad57b90a36e2306b79ec0f62566e3aa40->leave($__internal_65598e7650d8ae02be30bdd6cb7c1e3ad57b90a36e2306b79ec0f62566e3aa40_prof);

    }

    public function getTemplateName()
    {
        return "@App/Events/events.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% block content %}*/
/* {% endblock %}*/
