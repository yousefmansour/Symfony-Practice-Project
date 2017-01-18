<?php

/* AppBundle:FormTemplates:form_error_template.html.twig */
class __TwigTemplate_77571ab66b3292640eee3f9777f93036784d7d76c09378fb29d10d02791fc1ea extends Twig_Template
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
        $__internal_7650cb2c36b12bd898d9bdbbc9cce9abb3c8d7afff14933340bcf869d7610e8e = $this->env->getExtension("native_profiler");
        $__internal_7650cb2c36b12bd898d9bdbbc9cce9abb3c8d7afff14933340bcf869d7610e8e->enter($__internal_7650cb2c36b12bd898d9bdbbc9cce9abb3c8d7afff14933340bcf869d7610e8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:FormTemplates:form_error_template.html.twig"));

        // line 1
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_7650cb2c36b12bd898d9bdbbc9cce9abb3c8d7afff14933340bcf869d7610e8e->leave($__internal_7650cb2c36b12bd898d9bdbbc9cce9abb3c8d7afff14933340bcf869d7610e8e_prof);

    }

    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1e15251ac37ba51e715a21e7a0c7b5e8689ce98280be53833fb9c15c8d0a8b6d = $this->env->getExtension("native_profiler");
        $__internal_1e15251ac37ba51e715a21e7a0c7b5e8689ce98280be53833fb9c15c8d0a8b6d->enter($__internal_1e15251ac37ba51e715a21e7a0c7b5e8689ce98280be53833fb9c15c8d0a8b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_1e15251ac37ba51e715a21e7a0c7b5e8689ce98280be53833fb9c15c8d0a8b6d->leave($__internal_1e15251ac37ba51e715a21e7a0c7b5e8689ce98280be53833fb9c15c8d0a8b6d_prof);

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
