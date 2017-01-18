<?php

/* AppBundle:FormTemplates:form_error_template.html.twig */
class __TwigTemplate_e68b48169a23bfa517b7d99e1506b549fdbbeb632ede3cc81e0224a9cd47e7a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
    }

    public function block_form_errors($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 4
            echo "<i>";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : null)), "message", array()), "html", null, true);
            echo "</i>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:form_error_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {%- block form_errors -%}*/
/*     {% spaceless %}*/
/*         {%- if errors|length > 0 -%}*/
/*             <i>{{ errors|first.message }}</i>*/
/*         {%- endif -%}*/
/*     {% endspaceless %}*/
/* {%- endblock form_errors -%}*/
