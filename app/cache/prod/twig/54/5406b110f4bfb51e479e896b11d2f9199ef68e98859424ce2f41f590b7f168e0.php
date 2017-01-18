<?php

/* AppBundle:FormTemplates:form_row_template.html.twig */
class __TwigTemplate_f2f09de7f35dde945e110db2c01c15cb0d899c939bf87ef4cba8c2be06770b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("AppBundle:FormTemplates:form_error_template.html.twig", "AppBundle:FormTemplates:form_row_template.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."AppBundle:FormTemplates:form_error_template.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("AppBundle:FormTemplates:form_label_template.html.twig", "AppBundle:FormTemplates:form_row_template.html.twig", 2);
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
        $__internal_68d9c398afe603f9eec307ffd2d4318aee1106a79338820b690ab728952b32c4 = $this->env->getExtension("native_profiler");
        $__internal_68d9c398afe603f9eec307ffd2d4318aee1106a79338820b690ab728952b32c4->enter($__internal_68d9c398afe603f9eec307ffd2d4318aee1106a79338820b690ab728952b32c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:FormTemplates:form_row_template.html.twig"));

        // line 4
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_68d9c398afe603f9eec307ffd2d4318aee1106a79338820b690ab728952b32c4->leave($__internal_68d9c398afe603f9eec307ffd2d4318aee1106a79338820b690ab728952b32c4_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ed645409d3423263cfed8dc6377dcaf71697470c3c548ab4190a09b240c51b10 = $this->env->getExtension("native_profiler");
        $__internal_ed645409d3423263cfed8dc6377dcaf71697470c3c548ab4190a09b240c51b10->enter($__internal_ed645409d3423263cfed8dc6377dcaf71697470c3c548ab4190a09b240c51b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ed645409d3423263cfed8dc6377dcaf71697470c3c548ab4190a09b240c51b10->leave($__internal_ed645409d3423263cfed8dc6377dcaf71697470c3c548ab4190a09b240c51b10_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:form_row_template.html.twig";
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
