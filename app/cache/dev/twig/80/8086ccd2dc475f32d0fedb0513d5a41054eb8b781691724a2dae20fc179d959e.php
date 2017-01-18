<?php

/* @App/Teams/team_create.html.twig */
class __TwigTemplate_0716cdae68bf69c58aea66956f914f9326e51c5a995a1cc6e983ec3629313889 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Teams/team_create.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle:Layouts:main_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9534b0f6313ad714e170cecb1d09acc80a4dbfde9e53cc39ef88303f691bc829 = $this->env->getExtension("native_profiler");
        $__internal_9534b0f6313ad714e170cecb1d09acc80a4dbfde9e53cc39ef88303f691bc829->enter($__internal_9534b0f6313ad714e170cecb1d09acc80a4dbfde9e53cc39ef88303f691bc829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Teams/team_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9534b0f6313ad714e170cecb1d09acc80a4dbfde9e53cc39ef88303f691bc829->leave($__internal_9534b0f6313ad714e170cecb1d09acc80a4dbfde9e53cc39ef88303f691bc829_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3c57ee3c5f470d985bf01af0576a4911ace8fa8c61d2f3faeb916f08d251d94a = $this->env->getExtension("native_profiler");
        $__internal_3c57ee3c5f470d985bf01af0576a4911ace8fa8c61d2f3faeb916f08d251d94a->enter($__internal_3c57ee3c5f470d985bf01af0576a4911ace8fa8c61d2f3faeb916f08d251d94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #form-container {
            margin: 5px;
            text-align: center;
        }
        
        #team-create-form {
            display: inline;
        }
        
    </style>
";
        
        $__internal_3c57ee3c5f470d985bf01af0576a4911ace8fa8c61d2f3faeb916f08d251d94a->leave($__internal_3c57ee3c5f470d985bf01af0576a4911ace8fa8c61d2f3faeb916f08d251d94a_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_78b67128d512b0e207f95deadc1e3e0d8ac227a52d79d8c14a549dd32ab58ed7 = $this->env->getExtension("native_profiler");
        $__internal_78b67128d512b0e207f95deadc1e3e0d8ac227a52d79d8c14a549dd32ab58ed7->enter($__internal_78b67128d512b0e207f95deadc1e3e0d8ac227a52d79d8c14a549dd32ab58ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "    <div id=\"form-container\">
        <h3 id=\"team-create-title\">
            Create team
        </h3>
        <div id=\"team-create-form\">
            ";
        // line 23
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo "<br />
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'label');
        echo "<br />
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
        echo "
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_78b67128d512b0e207f95deadc1e3e0d8ac227a52d79d8c14a549dd32ab58ed7->leave($__internal_78b67128d512b0e207f95deadc1e3e0d8ac227a52d79d8c14a549dd32ab58ed7_prof);

    }

    public function getTemplateName()
    {
        return "@App/Teams/team_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  90 => 26,  86 => 25,  82 => 24,  78 => 23,  71 => 18,  65 => 17,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% form_theme form 'AppBundle:FormTemplates:form_row_template.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #form-container {*/
/*             margin: 5px;*/
/*             text-align: center;*/
/*         }*/
/*         */
/*         #team-create-form {*/
/*             display: inline;*/
/*         }*/
/*         */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="form-container">*/
/*         <h3 id="team-create-title">*/
/*             Create team*/
/*         </h3>*/
/*         <div id="team-create-form">*/
/*             {{ form_start(form) }}*/
/*             {{ form_errors(form.name) }}<br />*/
/*             {{ form_label(form.name) }}<br />*/
/*             {{ form_widget(form.name) }}*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
