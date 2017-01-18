<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_d93c5695c35681d98c54fd687af0a2e96806fd87e88fda7258b7f7653a29eb3b extends Twig_Template
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
        $__internal_edf61819ad408851a1771a4a61767b15737889dacbe7b65b48c994e7db159fb0 = $this->env->getExtension("native_profiler");
        $__internal_edf61819ad408851a1771a4a61767b15737889dacbe7b65b48c994e7db159fb0->enter($__internal_edf61819ad408851a1771a4a61767b15737889dacbe7b65b48c994e7db159fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_edf61819ad408851a1771a4a61767b15737889dacbe7b65b48c994e7db159fb0->leave($__internal_edf61819ad408851a1771a4a61767b15737889dacbe7b65b48c994e7db159fb0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
