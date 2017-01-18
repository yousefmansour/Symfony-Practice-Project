<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_fbafe8a2129d7ddcc5d8ece907e30c513f27282c1fe550c40bdac65327791e1f extends Twig_Template
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
        $__internal_fcbc2b28c9fb805238fe5671dee569113db905a2b1f6011ad836cf85a678f3e3 = $this->env->getExtension("native_profiler");
        $__internal_fcbc2b28c9fb805238fe5671dee569113db905a2b1f6011ad836cf85a678f3e3->enter($__internal_fcbc2b28c9fb805238fe5671dee569113db905a2b1f6011ad836cf85a678f3e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fcbc2b28c9fb805238fe5671dee569113db905a2b1f6011ad836cf85a678f3e3->leave($__internal_fcbc2b28c9fb805238fe5671dee569113db905a2b1f6011ad836cf85a678f3e3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
