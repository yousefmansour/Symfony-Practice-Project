<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_1778d9f0921a55b82bc1e6b95e636ef5d23222c540f709d019aeb23ad3ef6fe9 extends Twig_Template
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
        $__internal_15c7b56968bb7b0dd3c4513128d7204a9e9f1e5f9435ff5434e64e587f9fd243 = $this->env->getExtension("native_profiler");
        $__internal_15c7b56968bb7b0dd3c4513128d7204a9e9f1e5f9435ff5434e64e587f9fd243->enter($__internal_15c7b56968bb7b0dd3c4513128d7204a9e9f1e5f9435ff5434e64e587f9fd243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_15c7b56968bb7b0dd3c4513128d7204a9e9f1e5f9435ff5434e64e587f9fd243->leave($__internal_15c7b56968bb7b0dd3c4513128d7204a9e9f1e5f9435ff5434e64e587f9fd243_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
