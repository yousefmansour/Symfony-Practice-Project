<?php

/* AppBundle:Registration:register.html.twig */
class __TwigTemplate_de001ed5b2e50a9157fef0fbbbf198fd1c542c48666e265d687973e9be4d887b extends Twig_Template
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
        $__internal_9b29a4db02a2c2a3bf345e09ce80290756125ae5db3d4c0271cdee30672ab8eb = $this->env->getExtension("native_profiler");
        $__internal_9b29a4db02a2c2a3bf345e09ce80290756125ae5db3d4c0271cdee30672ab8eb->enter($__internal_9b29a4db02a2c2a3bf345e09ce80290756125ae5db3d4c0271cdee30672ab8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Registration:register.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b29a4db02a2c2a3bf345e09ce80290756125ae5db3d4c0271cdee30672ab8eb->leave($__internal_9b29a4db02a2c2a3bf345e09ce80290756125ae5db3d4c0271cdee30672ab8eb_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_56fa155802c81b187cb703f280a25a713ea0e98edfdb99d6d5883e1ea9a94dd0 = $this->env->getExtension("native_profiler");
        $__internal_56fa155802c81b187cb703f280a25a713ea0e98edfdb99d6d5883e1ea9a94dd0->enter($__internal_56fa155802c81b187cb703f280a25a713ea0e98edfdb99d6d5883e1ea9a94dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_56fa155802c81b187cb703f280a25a713ea0e98edfdb99d6d5883e1ea9a94dd0->leave($__internal_56fa155802c81b187cb703f280a25a713ea0e98edfdb99d6d5883e1ea9a94dd0_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbc9b986148f2e6c3aaf526e821c24eaf20ba3502fb50e2d9b0814915509902e = $this->env->getExtension("native_profiler");
        $__internal_fbc9b986148f2e6c3aaf526e821c24eaf20ba3502fb50e2d9b0814915509902e->enter($__internal_fbc9b986148f2e6c3aaf526e821c24eaf20ba3502fb50e2d9b0814915509902e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fbc9b986148f2e6c3aaf526e821c24eaf20ba3502fb50e2d9b0814915509902e->leave($__internal_fbc9b986148f2e6c3aaf526e821c24eaf20ba3502fb50e2d9b0814915509902e_prof);

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
