<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_3a9f1fcd530949e6fd419f7d93f1754b6200ef6098e9a010616aa9374ff301da extends Twig_Template
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
        $__internal_800aa8ecb9c27ffbe8437f2e0f3b1498f673cea43339f65c04d4f83203c4b81e = $this->env->getExtension("native_profiler");
        $__internal_800aa8ecb9c27ffbe8437f2e0f3b1498f673cea43339f65c04d4f83203c4b81e->enter($__internal_800aa8ecb9c27ffbe8437f2e0f3b1498f673cea43339f65c04d4f83203c4b81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_800aa8ecb9c27ffbe8437f2e0f3b1498f673cea43339f65c04d4f83203c4b81e->leave($__internal_800aa8ecb9c27ffbe8437f2e0f3b1498f673cea43339f65c04d4f83203c4b81e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
