<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_0225901c1edcac393b23d96d45f5df1099a1b67dd9f1a99ac3bf3e39cdaf3fcb extends Twig_Template
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
        $__internal_7c61d3e3099f0f703fdbe725aff9203865cc0079dc42b6544f963280d603cdef = $this->env->getExtension("native_profiler");
        $__internal_7c61d3e3099f0f703fdbe725aff9203865cc0079dc42b6544f963280d603cdef->enter($__internal_7c61d3e3099f0f703fdbe725aff9203865cc0079dc42b6544f963280d603cdef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7c61d3e3099f0f703fdbe725aff9203865cc0079dc42b6544f963280d603cdef->leave($__internal_7c61d3e3099f0f703fdbe725aff9203865cc0079dc42b6544f963280d603cdef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
