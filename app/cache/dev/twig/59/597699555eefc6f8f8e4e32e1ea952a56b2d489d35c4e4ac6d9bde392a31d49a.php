<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_382b12619010a7405d723bdb87b8ecfeb26ed198059bcfda2307347b5f15c5d5 extends Twig_Template
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
        $__internal_376ddbc4e615669ba0e4bdd2358e21af911bbd9b7eb3f536785ae6dd79083c85 = $this->env->getExtension("native_profiler");
        $__internal_376ddbc4e615669ba0e4bdd2358e21af911bbd9b7eb3f536785ae6dd79083c85->enter($__internal_376ddbc4e615669ba0e4bdd2358e21af911bbd9b7eb3f536785ae6dd79083c85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_376ddbc4e615669ba0e4bdd2358e21af911bbd9b7eb3f536785ae6dd79083c85->leave($__internal_376ddbc4e615669ba0e4bdd2358e21af911bbd9b7eb3f536785ae6dd79083c85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
