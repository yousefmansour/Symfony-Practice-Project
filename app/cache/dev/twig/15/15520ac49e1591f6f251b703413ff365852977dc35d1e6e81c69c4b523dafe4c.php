<?php

/* @App/FormTemplates/form_row_template.html.twig */
class __TwigTemplate_c6530f4d90e78b29fff158c8d94dcd0a66ef45d38cd908d1b5c114367c33a134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("AppBundle:FormTemplates:form_error_template.html.twig", "@App/FormTemplates/form_row_template.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."AppBundle:FormTemplates:form_error_template.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("AppBundle:FormTemplates:form_label_template.html.twig", "@App/FormTemplates/form_row_template.html.twig", 2);
        // line 2
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."AppBundle:FormTemplates:form_label_template.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d104dd1dfaffda87cb582df1e27abd489aef0d9efee7182236b14f6209a6d5d = $this->env->getExtension("native_profiler");
        $__internal_0d104dd1dfaffda87cb582df1e27abd489aef0d9efee7182236b14f6209a6d5d->enter($__internal_0d104dd1dfaffda87cb582df1e27abd489aef0d9efee7182236b14f6209a6d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/FormTemplates/form_row_template.html.twig"));

        // line 4
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_0d104dd1dfaffda87cb582df1e27abd489aef0d9efee7182236b14f6209a6d5d->leave($__internal_0d104dd1dfaffda87cb582df1e27abd489aef0d9efee7182236b14f6209a6d5d_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_44f114425c7799821d3c3db2c4c5cace56aa47497147079fe7e927ee389a50ce = $this->env->getExtension("native_profiler");
        $__internal_44f114425c7799821d3c3db2c4c5cace56aa47497147079fe7e927ee389a50ce->enter($__internal_44f114425c7799821d3c3db2c4c5cace56aa47497147079fe7e927ee389a50ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 5
        echo "<div>
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "</span><br />
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    </div>";
        
        $__internal_44f114425c7799821d3c3db2c4c5cace56aa47497147079fe7e927ee389a50ce->leave($__internal_44f114425c7799821d3c3db2c4c5cace56aa47497147079fe7e927ee389a50ce_prof);

    }

    public function getTemplateName()
    {
        return "@App/FormTemplates/form_row_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  60 => 6,  57 => 5,  45 => 4,  21 => 2,  14 => 1,);
    }
}
/* {% use 'AppBundle:FormTemplates:form_error_template.html.twig' %}*/
/* {% use 'AppBundle:FormTemplates:form_label_template.html.twig' %}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{ form_label(form) }}</span><br />*/
/*         {{ form_widget(form) }} {{ form_errors(form) }}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
