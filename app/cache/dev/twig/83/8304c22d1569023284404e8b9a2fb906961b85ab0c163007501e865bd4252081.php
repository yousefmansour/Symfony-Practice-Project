<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_55c679e766ed34bc72427c0a795414d9b32a4be158196e192604e0c75a500762 extends Twig_Template
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
        $__internal_f34fbfac30941b2a6c5c99d871264d7060845bb3db542fd6e5506c228b310a0d = $this->env->getExtension("native_profiler");
        $__internal_f34fbfac30941b2a6c5c99d871264d7060845bb3db542fd6e5506c228b310a0d->enter($__internal_f34fbfac30941b2a6c5c99d871264d7060845bb3db542fd6e5506c228b310a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f34fbfac30941b2a6c5c99d871264d7060845bb3db542fd6e5506c228b310a0d->leave($__internal_f34fbfac30941b2a6c5c99d871264d7060845bb3db542fd6e5506c228b310a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
