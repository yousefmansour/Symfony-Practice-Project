<?php

/* AppBundle:FormTemplates:form_row_template.html.twig */
class __TwigTemplate_e2bfa998cd7128309f61be582449fc7bcbff2f997689f98032a1d165ec8c9adf extends Twig_Template
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
        // line 4
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 5
        echo "<div>
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label');
        echo "</span><br />
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo " ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    </div>";
    }

    public function getTemplateName()
    {
        return "AppBundle:FormTemplates:form_row_template.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  55 => 7,  51 => 6,  48 => 5,  42 => 4,  21 => 2,  14 => 1,);
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
