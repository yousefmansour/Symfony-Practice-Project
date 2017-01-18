<?php

/* AppBundle:FormTemplates:form_error_template.html.twig */
class __TwigTemplate_ad19bf337c785837381b9d863ed70ff55dc791f0f5d37222999a6e9182c04191 extends Twig_Template
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
        $__internal_b4cceefdb89520e850ee859115049c205141576f94c0914e093c161aabde662e = $this->env->getExtension("native_profiler");
        $__internal_b4cceefdb89520e850ee859115049c205141576f94c0914e093c161aabde662e->enter($__internal_b4cceefdb89520e850ee859115049c205141576f94c0914e093c161aabde662e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:FormTemplates:form_error_template.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_b4cceefdb89520e850ee859115049c205141576f94c0914e093c161aabde662e->leave($__internal_b4cceefdb89520e850ee859115049c205141576f94c0914e093c161aabde662e_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_17bb9bb3d3f04fe4f724ba3e78f4d57dc35c73137be198c5c0f06cc1319220f0 = $this->env->getExtension("native_profiler");
        $__internal_17bb9bb3d3f04fe4f724ba3e78f4d57dc35c73137be198c5c0f06cc1319220f0->enter($__internal_17bb9bb3d3f04fe4f724ba3e78f4d57dc35c73137be198c5c0f06cc1319220f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_17bb9bb3d3f04fe4f724ba3e78f4d57dc35c73137be198c5c0f06cc1319220f0->leave($__internal_17bb9bb3d3f04fe4f724ba3e78f4d57dc35c73137be198c5c0f06cc1319220f0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:form_error_template.html.twig";
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
