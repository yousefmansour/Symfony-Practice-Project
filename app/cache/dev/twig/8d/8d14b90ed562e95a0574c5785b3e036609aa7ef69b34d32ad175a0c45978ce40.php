<?php

/* AppBundle:FormTemplates:test.html.twig */
class __TwigTemplate_9b21861a2c927c7ab939e2ca71aef7ca409997d6e9bb60bc901503e7168df3a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b1ed845def145e1983143941ff5a1da841e1c0948c6349c424c139c9afbab5f = $this->env->getExtension("native_profiler");
        $__internal_2b1ed845def145e1983143941ff5a1da841e1c0948c6349c424c139c9afbab5f->enter($__internal_2b1ed845def145e1983143941ff5a1da841e1c0948c6349c424c139c9afbab5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:FormTemplates:test.html.twig"));

        // line 1
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        
        $__internal_2b1ed845def145e1983143941ff5a1da841e1c0948c6349c424c139c9afbab5f->leave($__internal_2b1ed845def145e1983143941ff5a1da841e1c0948c6349c424c139c9afbab5f_prof);

    }

    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_da7cbcef379d72191c11a4be01b45176d8c8f635b4c24f0920b34f1bc815a997 = $this->env->getExtension("native_profiler");
        $__internal_da7cbcef379d72191c11a4be01b45176d8c8f635b4c24f0920b34f1bc815a997->enter($__internal_da7cbcef379d72191c11a4be01b45176d8c8f635b4c24f0920b34f1bc815a997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 2
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 3
            $context["required"] = false;
        }
        // line 6
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 7
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 8
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 10
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 11
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 12
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 13
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 14
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 17
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 18
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 19
        echo "</select>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        
        $__internal_da7cbcef379d72191c11a4be01b45176d8c8f635b4c24f0920b34f1bc815a997->leave($__internal_da7cbcef379d72191c11a4be01b45176d8c8f635b4c24f0920b34f1bc815a997_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 19,  74 => 18,  72 => 17,  66 => 14,  64 => 13,  62 => 12,  60 => 11,  58 => 10,  49 => 8,  47 => 7,  40 => 6,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/* */
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>{{ form_errors(form) }}*/
/* {%- endblock choice_widget_collapsed -%}*/
