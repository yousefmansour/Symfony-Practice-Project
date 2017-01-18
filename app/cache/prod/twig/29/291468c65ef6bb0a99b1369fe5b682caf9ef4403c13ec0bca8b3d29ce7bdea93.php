<?php

/* AppBundle:FormTemplates:form_label_template.html.twig */
class __TwigTemplate_eddf4e7600cfc91facdba480f6d5c41a8ce360de13b811d844a9d3e37d052262 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_label', $context, $blocks);
    }

    public function block_form_label($context, array $blocks = array())
    {
        // line 2
        if ( !((isset($context["label"]) ? $context["label"] : null) === false)) {
            // line 3
            if ( !(isset($context["compound"]) ? $context["compound"] : null)) {
                // line 4
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("for" => (isset($context["id"]) ? $context["id"] : null)));
            }
            // line 6
            if ((isset($context["required"]) ? $context["required"] : null)) {
                // line 7
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : null), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 9
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : null))) {
                // line 10
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : null))) {
                    // line 11
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : null), array("%name%" =>                     // line 12
(isset($context["name"]) ? $context["name"] : null), "%id%" =>                     // line 13
(isset($context["id"]) ? $context["id"] : null)));
                } else {
                    // line 16
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : null));
                }
            }
            // line 19
            ob_start();
            // line 20
            echo "        <span style=\"font-size: 90%; font-weight: bold;\">
            <label";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : null) === false)) ? ((isset($context["label"]) ? $context["label"] : null)) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : null), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : null)))), "html", null, true);
            echo "</label>
        </span>      
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:form_label_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 21,  53 => 20,  51 => 19,  47 => 16,  44 => 13,  43 => 12,  42 => 11,  40 => 10,  38 => 9,  35 => 7,  33 => 6,  30 => 4,  28 => 3,  26 => 2,  20 => 1,);
    }
}
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {% spaceless %}*/
/*         <span style="font-size: 90%; font-weight: bold;">*/
/*             <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*         </span>      */
/*         {% endspaceless %}*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
