<?php

/* @App/Teams/team_register.html.twig */
class __TwigTemplate_4db8a24faa0c5480daadf0cae9da61ef6be206344134000e145c97b8fb78ff00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Teams/team_register.html.twig", 1);
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
        $__internal_ea55da0b87db80df922261b3c089ac294834f8e734133b3337292159bf89270c = $this->env->getExtension("native_profiler");
        $__internal_ea55da0b87db80df922261b3c089ac294834f8e734133b3337292159bf89270c->enter($__internal_ea55da0b87db80df922261b3c089ac294834f8e734133b3337292159bf89270c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Teams/team_register.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea55da0b87db80df922261b3c089ac294834f8e734133b3337292159bf89270c->leave($__internal_ea55da0b87db80df922261b3c089ac294834f8e734133b3337292159bf89270c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_408752ded5257424ec07431bb01710a0e86c4d9304bcf0c130f541752ecfc0e0 = $this->env->getExtension("native_profiler");
        $__internal_408752ded5257424ec07431bb01710a0e86c4d9304bcf0c130f541752ecfc0e0->enter($__internal_408752ded5257424ec07431bb01710a0e86c4d9304bcf0c130f541752ecfc0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #team-form {
            margin: 5px;
        }
        
        
    </style>
";
        
        $__internal_408752ded5257424ec07431bb01710a0e86c4d9304bcf0c130f541752ecfc0e0->leave($__internal_408752ded5257424ec07431bb01710a0e86c4d9304bcf0c130f541752ecfc0e0_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_1d019f6b73ab9c4949b1f951bd04f6bbd836ee8af10e3aecc23e124c282c9cee = $this->env->getExtension("native_profiler");
        $__internal_1d019f6b73ab9c4949b1f951bd04f6bbd836ee8af10e3aecc23e124c282c9cee->enter($__internal_1d019f6b73ab9c4949b1f951bd04f6bbd836ee8af10e3aecc23e124c282c9cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <div id=\"team-form\">
        <div class=\"form-title\">
            Create team
        </div>
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
        ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_1d019f6b73ab9c4949b1f951bd04f6bbd836ee8af10e3aecc23e124c282c9cee->leave($__internal_1d019f6b73ab9c4949b1f951bd04f6bbd836ee8af10e3aecc23e124c282c9cee_prof);

    }

    public function getTemplateName()
    {
        return "@App/Teams/team_register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 21,  81 => 20,  77 => 19,  73 => 18,  67 => 14,  61 => 13,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle:Layouts:main_layout.html.twig' %}*/
/* {% form_theme form 'AppBundle:FormTemplates:form_row_template.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #team-form {*/
/*             margin: 5px;*/
/*         }*/
/*         */
/*         */
/*     </style>*/
/* {% endblock %}*/
/* {% block content %}*/
/*     <div id="team-form">*/
/*         <div class="form-title">*/
/*             Create team*/
/*         </div>*/
/*         {{ form_start(form) }}*/
/*         {{ form_row(form.name) }}*/
/*         {{ form_row(form.submit)}}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
