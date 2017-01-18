<?php

/* @App/FormTemplates/form_error_template.html.twig */
class __TwigTemplate_f9620fe626e220e3561e88de6567c2ffad8718fd1bcdb5e7416bbbbbea2f0683 extends Twig_Template
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
        $__internal_383713f31a683797c9dab7e0f578e3a85f785f2a9fd8d749f0d053c7cbd2b12b = $this->env->getExtension("native_profiler");
        $__internal_383713f31a683797c9dab7e0f578e3a85f785f2a9fd8d749f0d053c7cbd2b12b->enter($__internal_383713f31a683797c9dab7e0f578e3a85f785f2a9fd8d749f0d053c7cbd2b12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/FormTemplates/form_error_template.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_383713f31a683797c9dab7e0f578e3a85f785f2a9fd8d749f0d053c7cbd2b12b->leave($__internal_383713f31a683797c9dab7e0f578e3a85f785f2a9fd8d749f0d053c7cbd2b12b_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_91c83055b40b8b88b57cbfb9fb2e0337dde34204e6a3b92382c4f86c74e8d714 = $this->env->getExtension("native_profiler");
        $__internal_91c83055b40b8b88b57cbfb9fb2e0337dde34204e6a3b92382c4f86c74e8d714->enter($__internal_91c83055b40b8b88b57cbfb9fb2e0337dde34204e6a3b92382c4f86c74e8d714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 2
        ob_start();
        // line 3
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 4
            echo "<i>";
            echo twig_escape_filter($this->env, $this->getAttribute(twig_first($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))), "message", array()), "html", null, true);
            echo "</i>";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_91c83055b40b8b88b57cbfb9fb2e0337dde34204e6a3b92382c4f86c74e8d714->leave($__internal_91c83055b40b8b88b57cbfb9fb2e0337dde34204e6a3b92382c4f86c74e8d714_prof);

    }

    public function getTemplateName()
    {
        return "@App/FormTemplates/form_error_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {%- block form_errors -%}*/
/*     {% spaceless %}*/
/*         {%- if errors|length > 0 -%}*/
/*             <i>{{ errors|first.message }}</i>*/
/*         {%- endif -%}*/
/*     {% endspaceless %}*/
/* {%- endblock form_errors -%}*/
