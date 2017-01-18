<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_528654083a4454fa5ab8010ed0f4b34880dcdd7b5c4112f41475e54a016e92a1 extends Twig_Template
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
        $__internal_1cd06d437ff3fbc4e08991556c1a72f16863e6a7a4ef021977c0e8c08542b727 = $this->env->getExtension("native_profiler");
        $__internal_1cd06d437ff3fbc4e08991556c1a72f16863e6a7a4ef021977c0e8c08542b727->enter($__internal_1cd06d437ff3fbc4e08991556c1a72f16863e6a7a4ef021977c0e8c08542b727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1cd06d437ff3fbc4e08991556c1a72f16863e6a7a4ef021977c0e8c08542b727->leave($__internal_1cd06d437ff3fbc4e08991556c1a72f16863e6a7a4ef021977c0e8c08542b727_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
