<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_e86a397d759145ba62c6dc65f0e8c3695ee5fb39249036fae028199f509683d0 extends Twig_Template
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
        $__internal_a95fc78f9f2c382d01cfb1b28e4904be5a40b148e32b151a97dbaea1db19428d = $this->env->getExtension("native_profiler");
        $__internal_a95fc78f9f2c382d01cfb1b28e4904be5a40b148e32b151a97dbaea1db19428d->enter($__internal_a95fc78f9f2c382d01cfb1b28e4904be5a40b148e32b151a97dbaea1db19428d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_a95fc78f9f2c382d01cfb1b28e4904be5a40b148e32b151a97dbaea1db19428d->leave($__internal_a95fc78f9f2c382d01cfb1b28e4904be5a40b148e32b151a97dbaea1db19428d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
