<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_a7e357a07e1d528ec9c7cf149c98f45d1527a68dadf61ee1dfe5c49bdf7eec55 extends Twig_Template
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
        $__internal_5de503a61112a5463b92e124b7e13737c994be758777dd63f406f18778af31e1 = $this->env->getExtension("native_profiler");
        $__internal_5de503a61112a5463b92e124b7e13737c994be758777dd63f406f18778af31e1->enter($__internal_5de503a61112a5463b92e124b7e13737c994be758777dd63f406f18778af31e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5de503a61112a5463b92e124b7e13737c994be758777dd63f406f18778af31e1->leave($__internal_5de503a61112a5463b92e124b7e13737c994be758777dd63f406f18778af31e1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
