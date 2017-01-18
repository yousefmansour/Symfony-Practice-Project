<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_b9e428cae70c12320bfaa8c7ad5ae057f202c8a5072bffd1d25342587163e154 extends Twig_Template
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
        $__internal_7d15800350503c75e0abb5237cc2eb07704b91f7ff2916de0c15b89ac55fa7a8 = $this->env->getExtension("native_profiler");
        $__internal_7d15800350503c75e0abb5237cc2eb07704b91f7ff2916de0c15b89ac55fa7a8->enter($__internal_7d15800350503c75e0abb5237cc2eb07704b91f7ff2916de0c15b89ac55fa7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7d15800350503c75e0abb5237cc2eb07704b91f7ff2916de0c15b89ac55fa7a8->leave($__internal_7d15800350503c75e0abb5237cc2eb07704b91f7ff2916de0c15b89ac55fa7a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
