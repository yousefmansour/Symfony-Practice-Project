<?php

/* AppBundle:FormTemplates:form_row_template.html.twig */
class __TwigTemplate_3fdda8a9f0091a5d14ebf3f0e9c1ed7debb7f494a6b9036c0aacf0927f20b148 extends Twig_Template
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
        $__internal_468ad5fe98d487e7f9c6ec873d6aa753620f9c23c8b50e945164fea8bded1a52 = $this->env->getExtension("native_profiler");
        $__internal_468ad5fe98d487e7f9c6ec873d6aa753620f9c23c8b50e945164fea8bded1a52->enter($__internal_468ad5fe98d487e7f9c6ec873d6aa753620f9c23c8b50e945164fea8bded1a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:FormTemplates:form_row_template.html.twig"));

        // line 4
        $this->displayBlock('form_row', $context, $blocks);
        
        $__internal_468ad5fe98d487e7f9c6ec873d6aa753620f9c23c8b50e945164fea8bded1a52->leave($__internal_468ad5fe98d487e7f9c6ec873d6aa753620f9c23c8b50e945164fea8bded1a52_prof);

    }

    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7d563553c8e47c74a308d1a973d0cdb0128636dd3bda554aa813c28230c0578b = $this->env->getExtension("native_profiler");
        $__internal_7d563553c8e47c74a308d1a973d0cdb0128636dd3bda554aa813c28230c0578b->enter($__internal_7d563553c8e47c74a308d1a973d0cdb0128636dd3bda554aa813c28230c0578b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_7d563553c8e47c74a308d1a973d0cdb0128636dd3bda554aa813c28230c0578b->leave($__internal_7d563553c8e47c74a308d1a973d0cdb0128636dd3bda554aa813c28230c0578b_prof);

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
