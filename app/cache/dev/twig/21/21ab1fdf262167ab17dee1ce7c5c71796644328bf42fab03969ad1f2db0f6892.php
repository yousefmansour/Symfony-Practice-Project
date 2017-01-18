<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_bdda0e8171b1ca4f2f7a3c9e2bf564de99d912e5518d965118e615ca0bba63b7 extends Twig_Template
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
        $__internal_e8781696ca8864638ded157422e1de597e8dbb68d92d6995e1e8e7ad9e1b3f3c = $this->env->getExtension("native_profiler");
        $__internal_e8781696ca8864638ded157422e1de597e8dbb68d92d6995e1e8e7ad9e1b3f3c->enter($__internal_e8781696ca8864638ded157422e1de597e8dbb68d92d6995e1e8e7ad9e1b3f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e8781696ca8864638ded157422e1de597e8dbb68d92d6995e1e8e7ad9e1b3f3c->leave($__internal_e8781696ca8864638ded157422e1de597e8dbb68d92d6995e1e8e7ad9e1b3f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
