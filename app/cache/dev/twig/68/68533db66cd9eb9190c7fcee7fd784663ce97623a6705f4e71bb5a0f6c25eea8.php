<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_834c07e893656639a0a7700b116a75d6031fc088848708d23e4b658117024412 extends Twig_Template
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
        $__internal_12d058f4ea53d981213f753c5dbc3faec3361582a2a18b958ddbd3cedb20f730 = $this->env->getExtension("native_profiler");
        $__internal_12d058f4ea53d981213f753c5dbc3faec3361582a2a18b958ddbd3cedb20f730->enter($__internal_12d058f4ea53d981213f753c5dbc3faec3361582a2a18b958ddbd3cedb20f730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_12d058f4ea53d981213f753c5dbc3faec3361582a2a18b958ddbd3cedb20f730->leave($__internal_12d058f4ea53d981213f753c5dbc3faec3361582a2a18b958ddbd3cedb20f730_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
