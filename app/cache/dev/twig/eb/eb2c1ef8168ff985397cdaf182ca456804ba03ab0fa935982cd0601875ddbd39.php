<?php

/* @App/Sports/sport_create.html.twig */
class __TwigTemplate_f54f23da82d3aff005bbbe951da2c621e2932cb06530c01d7f7aa05fc297b830 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "@App/Sports/sport_create.html.twig", 1);
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
        $__internal_2795feb2b068ce258c4acb6a182e900d17b455263aef997da6efc9fe7389df5f = $this->env->getExtension("native_profiler");
        $__internal_2795feb2b068ce258c4acb6a182e900d17b455263aef997da6efc9fe7389df5f->enter($__internal_2795feb2b068ce258c4acb6a182e900d17b455263aef997da6efc9fe7389df5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Sports/sport_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2795feb2b068ce258c4acb6a182e900d17b455263aef997da6efc9fe7389df5f->leave($__internal_2795feb2b068ce258c4acb6a182e900d17b455263aef997da6efc9fe7389df5f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c391996076a034a4f77d6d2c5395845a54abd51fadf860ce5b60673f1a5dbaf2 = $this->env->getExtension("native_profiler");
        $__internal_c391996076a034a4f77d6d2c5395845a54abd51fadf860ce5b60673f1a5dbaf2->enter($__internal_c391996076a034a4f77d6d2c5395845a54abd51fadf860ce5b60673f1a5dbaf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #form-container {
            margin: 5px;
        }
        
        #team-create-form {
        }
        
    </style>
";
        
        $__internal_c391996076a034a4f77d6d2c5395845a54abd51fadf860ce5b60673f1a5dbaf2->leave($__internal_c391996076a034a4f77d6d2c5395845a54abd51fadf860ce5b60673f1a5dbaf2_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_e503cf06ad5e4bc619a6e06633f0c4d53d73ccc00397d2c62083b708ebad152a = $this->env->getExtension("native_profiler");
        $__internal_e503cf06ad5e4bc619a6e06633f0c4d53d73ccc00397d2c62083b708ebad152a->enter($__internal_e503cf06ad5e4bc619a6e06633f0c4d53d73ccc00397d2c62083b708ebad152a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div id=\"form-container\">
        <h3 id=\"team-create-title\">
            Create team
        </h3>
        <div id=\"team-create-form\">
            ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "teamSize", array()), 'row');
        echo "
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
            ";
        // line 25
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_e503cf06ad5e4bc619a6e06633f0c4d53d73ccc00397d2c62083b708ebad152a->leave($__internal_e503cf06ad5e4bc619a6e06633f0c4d53d73ccc00397d2c62083b708ebad152a_prof);

    }

    public function getTemplateName()
    {
        return "@App/Sports/sport_create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  88 => 24,  84 => 23,  80 => 22,  76 => 21,  69 => 16,  63 => 15,  44 => 4,  38 => 3,  31 => 1,  29 => 2,  11 => 1,);
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
/*         #team-create-form {*/
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
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.teamSize) }}*/
/*             {{ form_row(form.submit)}}*/
/*             {{ form_end(form) }}*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
