<?php

/* AppBundle:Teams:team_create.html.twig */
class __TwigTemplate_988bd9eb415691cb1e725fed59086bfcc92267507a1204ac8189bc7d72ea0c21 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:team_create.html.twig", 1);
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
        $__internal_c11fc4cf4d99aa67781825501233f7fcbd1d497d547a26331090c5b18fe859af = $this->env->getExtension("native_profiler");
        $__internal_c11fc4cf4d99aa67781825501233f7fcbd1d497d547a26331090c5b18fe859af->enter($__internal_c11fc4cf4d99aa67781825501233f7fcbd1d497d547a26331090c5b18fe859af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:team_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c11fc4cf4d99aa67781825501233f7fcbd1d497d547a26331090c5b18fe859af->leave($__internal_c11fc4cf4d99aa67781825501233f7fcbd1d497d547a26331090c5b18fe859af_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7664f3f9a61dcb05f80813c9692aaed0c9d75144cab34a39fe34a17fba96b693 = $this->env->getExtension("native_profiler");
        $__internal_7664f3f9a61dcb05f80813c9692aaed0c9d75144cab34a39fe34a17fba96b693->enter($__internal_7664f3f9a61dcb05f80813c9692aaed0c9d75144cab34a39fe34a17fba96b693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_7664f3f9a61dcb05f80813c9692aaed0c9d75144cab34a39fe34a17fba96b693->leave($__internal_7664f3f9a61dcb05f80813c9692aaed0c9d75144cab34a39fe34a17fba96b693_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_453876f9b8fb105907e0c31d2d41405ecda6c10c2b8f787f37e3fe41ef78ee35 = $this->env->getExtension("native_profiler");
        $__internal_453876f9b8fb105907e0c31d2d41405ecda6c10c2b8f787f37e3fe41ef78ee35->enter($__internal_453876f9b8fb105907e0c31d2d41405ecda6c10c2b8f787f37e3fe41ef78ee35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_453876f9b8fb105907e0c31d2d41405ecda6c10c2b8f787f37e3fe41ef78ee35->leave($__internal_453876f9b8fb105907e0c31d2d41405ecda6c10c2b8f787f37e3fe41ef78ee35_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:team_create.html.twig";
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
