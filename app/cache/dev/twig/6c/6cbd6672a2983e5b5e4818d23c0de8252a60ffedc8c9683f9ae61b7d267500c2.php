<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_4178af39f0030698d317bdacc4129318c7de489970d2f2c53edb0108f6b6632a extends Twig_Template
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
        $__internal_30940c263ba217c7e9f9f0eccf47debdc8542754efa35bfd27be0b40e972511a = $this->env->getExtension("native_profiler");
        $__internal_30940c263ba217c7e9f9f0eccf47debdc8542754efa35bfd27be0b40e972511a->enter($__internal_30940c263ba217c7e9f9f0eccf47debdc8542754efa35bfd27be0b40e972511a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_30940c263ba217c7e9f9f0eccf47debdc8542754efa35bfd27be0b40e972511a->leave($__internal_30940c263ba217c7e9f9f0eccf47debdc8542754efa35bfd27be0b40e972511a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
