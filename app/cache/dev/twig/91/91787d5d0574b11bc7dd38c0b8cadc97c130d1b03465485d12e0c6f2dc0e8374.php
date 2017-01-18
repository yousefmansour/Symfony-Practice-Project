<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_027548503b9417dd13473fc8d9e1f24719684858d9662e98c99e2b9212814b93 extends Twig_Template
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
        $__internal_bf7bd5c5be85afc81a3839897ae256bc1e061392e6876d5e744c68c79eb10b8a = $this->env->getExtension("native_profiler");
        $__internal_bf7bd5c5be85afc81a3839897ae256bc1e061392e6876d5e744c68c79eb10b8a->enter($__internal_bf7bd5c5be85afc81a3839897ae256bc1e061392e6876d5e744c68c79eb10b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_bf7bd5c5be85afc81a3839897ae256bc1e061392e6876d5e744c68c79eb10b8a->leave($__internal_bf7bd5c5be85afc81a3839897ae256bc1e061392e6876d5e744c68c79eb10b8a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
