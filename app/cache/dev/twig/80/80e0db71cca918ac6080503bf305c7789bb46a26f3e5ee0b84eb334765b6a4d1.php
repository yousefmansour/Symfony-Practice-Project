<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_fc746a32ec6d49a89530d1fc08f4356c6850fcd933627de48b211b98d678329f extends Twig_Template
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
        $__internal_d67f24ee03d965e78974beb91897e8685ab18e49208b5e87ed9fee2c2ba0e3d8 = $this->env->getExtension("native_profiler");
        $__internal_d67f24ee03d965e78974beb91897e8685ab18e49208b5e87ed9fee2c2ba0e3d8->enter($__internal_d67f24ee03d965e78974beb91897e8685ab18e49208b5e87ed9fee2c2ba0e3d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_d67f24ee03d965e78974beb91897e8685ab18e49208b5e87ed9fee2c2ba0e3d8->leave($__internal_d67f24ee03d965e78974beb91897e8685ab18e49208b5e87ed9fee2c2ba0e3d8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
