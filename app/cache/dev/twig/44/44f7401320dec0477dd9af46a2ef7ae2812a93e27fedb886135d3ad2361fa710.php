<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_8a1965cf09d711e50be4195a6ab8b0de64b1c2fc22099e6be058eb35aeca6107 extends Twig_Template
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
        $__internal_fc3e8e22f8d42dd4ab62e4815a5c6612bbfc7139749adbb9e8c8e05e8042fef1 = $this->env->getExtension("native_profiler");
        $__internal_fc3e8e22f8d42dd4ab62e4815a5c6612bbfc7139749adbb9e8c8e05e8042fef1->enter($__internal_fc3e8e22f8d42dd4ab62e4815a5c6612bbfc7139749adbb9e8c8e05e8042fef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fc3e8e22f8d42dd4ab62e4815a5c6612bbfc7139749adbb9e8c8e05e8042fef1->leave($__internal_fc3e8e22f8d42dd4ab62e4815a5c6612bbfc7139749adbb9e8c8e05e8042fef1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
