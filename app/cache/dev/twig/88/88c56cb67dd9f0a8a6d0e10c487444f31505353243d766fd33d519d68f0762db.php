<?php

/* @App/FormTemplates/form_label_template.html.twig */
class __TwigTemplate_6de2761c7f74e293cdaadcd715cb6bb749e9eacecc99bae919c56bb7dd8eb1f8 extends Twig_Template
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
        $__internal_072eae359919d957ef1a64484163caea012dbe6b3c5073e0f9575b97836f10d0 = $this->env->getExtension("native_profiler");
        $__internal_072eae359919d957ef1a64484163caea012dbe6b3c5073e0f9575b97836f10d0->enter($__internal_072eae359919d957ef1a64484163caea012dbe6b3c5073e0f9575b97836f10d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/FormTemplates/form_label_template.html.twig"));

        // line 1
        $this->displayBlock('form_label', $context, $blocks);
        
        $__internal_072eae359919d957ef1a64484163caea012dbe6b3c5073e0f9575b97836f10d0->leave($__internal_072eae359919d957ef1a64484163caea012dbe6b3c5073e0f9575b97836f10d0_prof);

    }

    public function block_form_label($context, array $blocks = array())
    {
        $__internal_eb7a9b12e61ea67e74fc468b1eee554d83f81b43470aa590676306c7a438c8fe = $this->env->getExtension("native_profiler");
        $__internal_eb7a9b12e61ea67e74fc468b1eee554d83f81b43470aa590676306c7a438c8fe->enter($__internal_eb7a9b12e61ea67e74fc468b1eee554d83f81b43470aa590676306c7a438c8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 2
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 3
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 4
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 6
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 7
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 9
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 10
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 11
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 12
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 13
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 16
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 19
            ob_start();
            // line 20
            echo "        <span style=\"font-size: 90%; font-weight: bold;\">
            <label";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>
        </span>      
        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_eb7a9b12e61ea67e74fc468b1eee554d83f81b43470aa590676306c7a438c8fe->leave($__internal_eb7a9b12e61ea67e74fc468b1eee554d83f81b43470aa590676306c7a438c8fe_prof);

    }

    public function getTemplateName()
    {
        return "@App/FormTemplates/form_label_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  62 => 20,  60 => 19,  56 => 16,  53 => 13,  52 => 12,  51 => 11,  49 => 10,  47 => 9,  44 => 7,  42 => 6,  39 => 4,  37 => 3,  35 => 2,  23 => 1,);
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
