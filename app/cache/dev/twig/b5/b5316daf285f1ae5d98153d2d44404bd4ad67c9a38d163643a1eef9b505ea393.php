<?php

/* @App/Events/event_create.html.twig */
class __TwigTemplate_96fe58cd39162621b70af64fe98eafdeb47ffc6943aee48c61ceb55f7581eecc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Events/event_create.html.twig", 1);
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
        $__internal_1d5ac361c4125242b576d09915827fbb52de2d89f32ab8d5f66f74c1666ab196 = $this->env->getExtension("native_profiler");
        $__internal_1d5ac361c4125242b576d09915827fbb52de2d89f32ab8d5f66f74c1666ab196->enter($__internal_1d5ac361c4125242b576d09915827fbb52de2d89f32ab8d5f66f74c1666ab196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Events/event_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d5ac361c4125242b576d09915827fbb52de2d89f32ab8d5f66f74c1666ab196->leave($__internal_1d5ac361c4125242b576d09915827fbb52de2d89f32ab8d5f66f74c1666ab196_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9891bb017c8e1acc8bd61a51600d3b78bb864bc0968746c7ec65f0f14fe13a5c = $this->env->getExtension("native_profiler");
        $__internal_9891bb017c8e1acc8bd61a51600d3b78bb864bc0968746c7ec65f0f14fe13a5c->enter($__internal_9891bb017c8e1acc8bd61a51600d3b78bb864bc0968746c7ec65f0f14fe13a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_9891bb017c8e1acc8bd61a51600d3b78bb864bc0968746c7ec65f0f14fe13a5c->leave($__internal_9891bb017c8e1acc8bd61a51600d3b78bb864bc0968746c7ec65f0f14fe13a5c_prof);

    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        $__internal_be39d5184cb44a3896ac2f349c11e0a71b0bc8dc604b88faa28834ec1a035914 = $this->env->getExtension("native_profiler");
        $__internal_be39d5184cb44a3896ac2f349c11e0a71b0bc8dc604b88faa28834ec1a035914->enter($__internal_be39d5184cb44a3896ac2f349c11e0a71b0bc8dc604b88faa28834ec1a035914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_be39d5184cb44a3896ac2f349c11e0a71b0bc8dc604b88faa28834ec1a035914->leave($__internal_be39d5184cb44a3896ac2f349c11e0a71b0bc8dc604b88faa28834ec1a035914_prof);

    }

    public function getTemplateName()
    {
        return "@App/Events/event_create.html.twig";
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
