<?php

/* AppBundle:Sports:sport_create.html.twig */
class __TwigTemplate_765ef22e26bd571d5e4fc465813740504804df399b77e06758d2a2231ea267b7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Sports:sport_create.html.twig", 1);
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
        $__internal_b16b95ab05ed44c0bf97a3fdb18a1cfbdd5250c3b675516922cf2b0eb71e2916 = $this->env->getExtension("native_profiler");
        $__internal_b16b95ab05ed44c0bf97a3fdb18a1cfbdd5250c3b675516922cf2b0eb71e2916->enter($__internal_b16b95ab05ed44c0bf97a3fdb18a1cfbdd5250c3b675516922cf2b0eb71e2916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Sports:sport_create.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b16b95ab05ed44c0bf97a3fdb18a1cfbdd5250c3b675516922cf2b0eb71e2916->leave($__internal_b16b95ab05ed44c0bf97a3fdb18a1cfbdd5250c3b675516922cf2b0eb71e2916_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c22e82662610ffe732fea17b6ba522d0b2726b047f6b43f15b22b54ff2fb111b = $this->env->getExtension("native_profiler");
        $__internal_c22e82662610ffe732fea17b6ba522d0b2726b047f6b43f15b22b54ff2fb111b->enter($__internal_c22e82662610ffe732fea17b6ba522d0b2726b047f6b43f15b22b54ff2fb111b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_c22e82662610ffe732fea17b6ba522d0b2726b047f6b43f15b22b54ff2fb111b->leave($__internal_c22e82662610ffe732fea17b6ba522d0b2726b047f6b43f15b22b54ff2fb111b_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_f86d17f8874072616286cc8d6fd001a01e07956f40e6807ad7b822edec210e10 = $this->env->getExtension("native_profiler");
        $__internal_f86d17f8874072616286cc8d6fd001a01e07956f40e6807ad7b822edec210e10->enter($__internal_f86d17f8874072616286cc8d6fd001a01e07956f40e6807ad7b822edec210e10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div id=\"form-container\">
        <h3 id=\"team-create-title\">
            Add sport
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
        
        $__internal_f86d17f8874072616286cc8d6fd001a01e07956f40e6807ad7b822edec210e10->leave($__internal_f86d17f8874072616286cc8d6fd001a01e07956f40e6807ad7b822edec210e10_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Sports:sport_create.html.twig";
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
/*             Add sport*/
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
