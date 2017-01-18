<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a5032a4edfd6d746da5ced49e3f2917da84e8aef58c464d4b87f69f05b8f6e2e extends Twig_Template
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
        $__internal_57ad01bbe12b09222e9463efe472d120d7625e013783e14b9ef30bd23e8f0615 = $this->env->getExtension("native_profiler");
        $__internal_57ad01bbe12b09222e9463efe472d120d7625e013783e14b9ef30bd23e8f0615->enter($__internal_57ad01bbe12b09222e9463efe472d120d7625e013783e14b9ef30bd23e8f0615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_57ad01bbe12b09222e9463efe472d120d7625e013783e14b9ef30bd23e8f0615->leave($__internal_57ad01bbe12b09222e9463efe472d120d7625e013783e14b9ef30bd23e8f0615_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
