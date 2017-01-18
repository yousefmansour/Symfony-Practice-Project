<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_7178e4c7ca0946a59a3964719bc3eeb32b416f5194bb1cdd5c982ffe83caaf3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9415541a31eaab6e874e23a74bcbb3e103822676492d3915373136651f41c0b2 = $this->env->getExtension("native_profiler");
        $__internal_9415541a31eaab6e874e23a74bcbb3e103822676492d3915373136651f41c0b2->enter($__internal_9415541a31eaab6e874e23a74bcbb3e103822676492d3915373136651f41c0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9415541a31eaab6e874e23a74bcbb3e103822676492d3915373136651f41c0b2->leave($__internal_9415541a31eaab6e874e23a74bcbb3e103822676492d3915373136651f41c0b2_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ef8b9d30e5701c48659164dce64f0e909bd4f275d97f24762fbaf2588c5074b = $this->env->getExtension("native_profiler");
        $__internal_3ef8b9d30e5701c48659164dce64f0e909bd4f275d97f24762fbaf2588c5074b->enter($__internal_3ef8b9d30e5701c48659164dce64f0e909bd4f275d97f24762fbaf2588c5074b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #register-form {
            margin: 2px;
        }
        
        .form-title{
            margin-bottom: 1em;
        }
    </style>
";
        
        $__internal_3ef8b9d30e5701c48659164dce64f0e909bd4f275d97f24762fbaf2588c5074b->leave($__internal_3ef8b9d30e5701c48659164dce64f0e909bd4f275d97f24762fbaf2588c5074b_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_48923803f752138145ee019d4a85f9170ee932849130372e5916d2ad4370a307 = $this->env->getExtension("native_profiler");
        $__internal_48923803f752138145ee019d4a85f9170ee932849130372e5916d2ad4370a307->enter($__internal_48923803f752138145ee019d4a85f9170ee932849130372e5916d2ad4370a307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div id=\"register-form\">
        <div class=\"form-title\">
            Register
        </div>
        ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'row');
        echo "
        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <br />    
    <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login");
        echo "\">Log in</a>    
    
";
        
        $__internal_48923803f752138145ee019d4a85f9170ee932849130372e5916d2ad4370a307->leave($__internal_48923803f752138145ee019d4a85f9170ee932849130372e5916d2ad4370a307_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 28,  87 => 25,  83 => 24,  79 => 23,  75 => 22,  69 => 18,  63 => 17,  44 => 5,  38 => 4,  31 => 1,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% form_theme form 'AppBundle:FormTemplates:form_row_template.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #register-form {*/
/*             margin: 2px;*/
/*         }*/
/*         */
/*         .form-title{*/
/*             margin-bottom: 1em;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="register-form">*/
/*         <div class="form-title">*/
/*             Register*/
/*         </div>*/
/*         {{ form_start(form) }}*/
/*         {{ form_row(form.username) }}*/
/*         {{ form_row(form.email) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <br />    */
/*     <a href="{{ path('login') }}">Log in</a>    */
/*     */
/* {% endblock %}*/
/* */
