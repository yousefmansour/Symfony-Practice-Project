<?php

/* AppBundle:Events:event_create.html.twig */
class __TwigTemplate_fe82a71e3f619e3bde7e212c80098fb953d699c5e60086573aef46f43754684e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Events:event_create.html.twig", 1);
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
        $__internal_2c236b26ccb14d692ab86ef7c8037e0d4d866f5be2dddcc5bbdd59ead452e59f = $this->env->getExtension("native_profiler");
        $__internal_2c236b26ccb14d692ab86ef7c8037e0d4d866f5be2dddcc5bbdd59ead452e59f->enter($__internal_2c236b26ccb14d692ab86ef7c8037e0d4d866f5be2dddcc5bbdd59ead452e59f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Events:event_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c236b26ccb14d692ab86ef7c8037e0d4d866f5be2dddcc5bbdd59ead452e59f->leave($__internal_2c236b26ccb14d692ab86ef7c8037e0d4d866f5be2dddcc5bbdd59ead452e59f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5657ab84a4005d25cbc7f75cf8f1fa34a3ff3028673bbe53fb483fcafa214755 = $this->env->getExtension("native_profiler");
        $__internal_5657ab84a4005d25cbc7f75cf8f1fa34a3ff3028673bbe53fb483fcafa214755->enter($__internal_5657ab84a4005d25cbc7f75cf8f1fa34a3ff3028673bbe53fb483fcafa214755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #form-container {
            margin: 5px;
        }
        
        #sport {
            display: inline-block;
        }
        
        #sport-error {
            margin-left:2px;
            display: inline-block;
        }
        
    </style>
";
        
        $__internal_5657ab84a4005d25cbc7f75cf8f1fa34a3ff3028673bbe53fb483fcafa214755->leave($__internal_5657ab84a4005d25cbc7f75cf8f1fa34a3ff3028673bbe53fb483fcafa214755_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_134bdbabbd09c9d11df93c75d8bb91529ba10ebfad9c47e61aae34d82fa1a4c8 = $this->env->getExtension("native_profiler");
        $__internal_134bdbabbd09c9d11df93c75d8bb91529ba10ebfad9c47e61aae34d82fa1a4c8->enter($__internal_134bdbabbd09c9d11df93c75d8bb91529ba10ebfad9c47e61aae34d82fa1a4c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 22
        echo "    <div id=\"form-container\">
        <h3 id=\"team-create-title\">
            Create event
        </h3>
        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'label');
        echo "<br/>
        <div id=\"sport\">";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
        echo "</div>
        <div id=\"sport-error\">";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
        echo "</div>
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sport", array()), 'row');
        echo "
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
        ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_134bdbabbd09c9d11df93c75d8bb91529ba10ebfad9c47e61aae34d82fa1a4c8->leave($__internal_134bdbabbd09c9d11df93c75d8bb91529ba10ebfad9c47e61aae34d82fa1a4c8_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Events:event_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  106 => 33,  102 => 32,  98 => 31,  94 => 30,  90 => 29,  85 => 27,  81 => 26,  75 => 22,  69 => 21,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% form_theme form 'AppBundle:FormTemplates:form_row_template.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #form-container {*/
/*             margin: 5px;*/
/*         }*/
/*         */
/*         #sport {*/
/*             display: inline-block;*/
/*         }*/
/*         */
/*         #sport-error {*/
/*             margin-left:2px;*/
/*             display: inline-block;*/
/*         }*/
/*         */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="form-container">*/
/*         <h3 id="team-create-title">*/
/*             Create event*/
/*         </h3>*/
/*         {{ form_start(form) }}*/
/*         {{ form_row(form.name) }}*/
/*         */
/*         {{ form_label(form.time) }}<br/>*/
/*         <div id="sport">{{ form_widget(form.time) }}</div>*/
/*         <div id="sport-error">{{ form_errors(form.time) }}</div>*/
/*         {{ form_row(form.sport) }}*/
/*         {{ form_row(form.submit)}}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
