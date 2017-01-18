<?php

/* AppBundle:Events:events.html.twig */
class __TwigTemplate_09af9088e3464db18e2c04f0b7437b9d0cce3bf8565fc8ea65ece6f071974f54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Events:events.html.twig", 1);
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
        $__internal_bad893109e451cdf70701ef26f713c8bcb701ffcf0f1c07ac6b7c05c301e7bc0 = $this->env->getExtension("native_profiler");
        $__internal_bad893109e451cdf70701ef26f713c8bcb701ffcf0f1c07ac6b7c05c301e7bc0->enter($__internal_bad893109e451cdf70701ef26f713c8bcb701ffcf0f1c07ac6b7c05c301e7bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Events:events.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bad893109e451cdf70701ef26f713c8bcb701ffcf0f1c07ac6b7c05c301e7bc0->leave($__internal_bad893109e451cdf70701ef26f713c8bcb701ffcf0f1c07ac6b7c05c301e7bc0_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b06c029fe3b5c31a35dfe7882c183b9f1f9a073830c8c44230d26a9c47854724 = $this->env->getExtension("native_profiler");
        $__internal_b06c029fe3b5c31a35dfe7882c183b9f1f9a073830c8c44230d26a9c47854724->enter($__internal_b06c029fe3b5c31a35dfe7882c183b9f1f9a073830c8c44230d26a9c47854724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_b06c029fe3b5c31a35dfe7882c183b9f1f9a073830c8c44230d26a9c47854724->leave($__internal_b06c029fe3b5c31a35dfe7882c183b9f1f9a073830c8c44230d26a9c47854724_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Events:events.html.twig";
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
