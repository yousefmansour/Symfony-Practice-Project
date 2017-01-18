<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cfa9fdd6c07f02561a37f7ad5e4b7e14ba9fe035fbd09562d3d9e874538f9d68 extends Twig_Template
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
        $__internal_0416043b8c329d1b0452143a9a9f7d5fb07d6bb39c6920ea1a5d37758ccefd96 = $this->env->getExtension("native_profiler");
        $__internal_0416043b8c329d1b0452143a9a9f7d5fb07d6bb39c6920ea1a5d37758ccefd96->enter($__internal_0416043b8c329d1b0452143a9a9f7d5fb07d6bb39c6920ea1a5d37758ccefd96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_0416043b8c329d1b0452143a9a9f7d5fb07d6bb39c6920ea1a5d37758ccefd96->leave($__internal_0416043b8c329d1b0452143a9a9f7d5fb07d6bb39c6920ea1a5d37758ccefd96_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
