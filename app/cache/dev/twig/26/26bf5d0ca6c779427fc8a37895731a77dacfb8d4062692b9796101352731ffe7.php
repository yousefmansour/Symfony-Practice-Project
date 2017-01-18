<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_639568ad4f9d0f7cd76a16ac97bc0128b469149b6ad5671e84b14ecd86eb2461 extends Twig_Template
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
        $__internal_fe3bc983b4b0e2b76f334c2cd2e85e1b00b45e9ef5bc7f3a62d8c1ceaf7b9edb = $this->env->getExtension("native_profiler");
        $__internal_fe3bc983b4b0e2b76f334c2cd2e85e1b00b45e9ef5bc7f3a62d8c1ceaf7b9edb->enter($__internal_fe3bc983b4b0e2b76f334c2cd2e85e1b00b45e9ef5bc7f3a62d8c1ceaf7b9edb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fe3bc983b4b0e2b76f334c2cd2e85e1b00b45e9ef5bc7f3a62d8c1ceaf7b9edb->leave($__internal_fe3bc983b4b0e2b76f334c2cd2e85e1b00b45e9ef5bc7f3a62d8c1ceaf7b9edb_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
