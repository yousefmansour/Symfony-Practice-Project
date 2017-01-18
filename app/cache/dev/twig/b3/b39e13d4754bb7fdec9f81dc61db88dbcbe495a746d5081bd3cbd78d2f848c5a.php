<?php

/* AppBundle:Teams:team_register.html.twig */
class __TwigTemplate_bf3c0042e7005b6e71ee0084df28eac1ee24a2d7c854f91558a3798255cecdf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle:Layouts:main_layout.html.twig", "AppBundle:Teams:team_register.html.twig", 1);
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
        $__internal_a064f54666bc4100de2b6d957df2322f1e0d451329dfde062c7647fea74a19af = $this->env->getExtension("native_profiler");
        $__internal_a064f54666bc4100de2b6d957df2322f1e0d451329dfde062c7647fea74a19af->enter($__internal_a064f54666bc4100de2b6d957df2322f1e0d451329dfde062c7647fea74a19af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Teams:team_register.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a064f54666bc4100de2b6d957df2322f1e0d451329dfde062c7647fea74a19af->leave($__internal_a064f54666bc4100de2b6d957df2322f1e0d451329dfde062c7647fea74a19af_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07602d5e22995b6136956bd74a508cad3bed3c529430a591fcd28dae9ec77e6e = $this->env->getExtension("native_profiler");
        $__internal_07602d5e22995b6136956bd74a508cad3bed3c529430a591fcd28dae9ec77e6e->enter($__internal_07602d5e22995b6136956bd74a508cad3bed3c529430a591fcd28dae9ec77e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_07602d5e22995b6136956bd74a508cad3bed3c529430a591fcd28dae9ec77e6e->leave($__internal_07602d5e22995b6136956bd74a508cad3bed3c529430a591fcd28dae9ec77e6e_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_972140927783b549ce15294cb0c75179150b0babab1eacc0b263acf39929c6a6 = $this->env->getExtension("native_profiler");
        $__internal_972140927783b549ce15294cb0c75179150b0babab1eacc0b263acf39929c6a6->enter($__internal_972140927783b549ce15294cb0c75179150b0babab1eacc0b263acf39929c6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_972140927783b549ce15294cb0c75179150b0babab1eacc0b263acf39929c6a6->leave($__internal_972140927783b549ce15294cb0c75179150b0babab1eacc0b263acf39929c6a6_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Teams:team_register.html.twig";
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
