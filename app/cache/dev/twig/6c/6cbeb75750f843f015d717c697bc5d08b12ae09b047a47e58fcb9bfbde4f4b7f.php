<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_2bc42bbecb79be78d7df5d1964319f8ef67a9736af74159e745553a6c6e6e9eb extends Twig_Template
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
        $__internal_bb16bf9348cd9e4417a03f5163df68fedd2761af4a45c9547cb119bdb598e2d1 = $this->env->getExtension("native_profiler");
        $__internal_bb16bf9348cd9e4417a03f5163df68fedd2761af4a45c9547cb119bdb598e2d1->enter($__internal_bb16bf9348cd9e4417a03f5163df68fedd2761af4a45c9547cb119bdb598e2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_bb16bf9348cd9e4417a03f5163df68fedd2761af4a45c9547cb119bdb598e2d1->leave($__internal_bb16bf9348cd9e4417a03f5163df68fedd2761af4a45c9547cb119bdb598e2d1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
