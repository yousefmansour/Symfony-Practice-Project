<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_c15ae91f5733667e0920e65674b16ffe0c3700d764c6915a7113adb74e03a2bb extends Twig_Template
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
        $__internal_a410487bc3feca23cafec6f425cd7c2b1fc535cebf87b3a631318b8cc4620a3d = $this->env->getExtension("native_profiler");
        $__internal_a410487bc3feca23cafec6f425cd7c2b1fc535cebf87b3a631318b8cc4620a3d->enter($__internal_a410487bc3feca23cafec6f425cd7c2b1fc535cebf87b3a631318b8cc4620a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_a410487bc3feca23cafec6f425cd7c2b1fc535cebf87b3a631318b8cc4620a3d->leave($__internal_a410487bc3feca23cafec6f425cd7c2b1fc535cebf87b3a631318b8cc4620a3d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
