<?php

/* @App/Registration/register.html.twig */
class __TwigTemplate_c30faa063e7f1f9ee4eb3a9a202f32d774da978672ddfd7c78509b2f531200ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Registration/register.html.twig", 1);
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
        $__internal_8eb9ce40d1667779512b1dc71895823cfa94c407b3f671efa20f224d5f80e404 = $this->env->getExtension("native_profiler");
        $__internal_8eb9ce40d1667779512b1dc71895823cfa94c407b3f671efa20f224d5f80e404->enter($__internal_8eb9ce40d1667779512b1dc71895823cfa94c407b3f671efa20f224d5f80e404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Registration/register.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8eb9ce40d1667779512b1dc71895823cfa94c407b3f671efa20f224d5f80e404->leave($__internal_8eb9ce40d1667779512b1dc71895823cfa94c407b3f671efa20f224d5f80e404_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e06db549d3d8949f1e379df98ae03eb4c8ecef60ccca22460a86ae2fd9b7c5a2 = $this->env->getExtension("native_profiler");
        $__internal_e06db549d3d8949f1e379df98ae03eb4c8ecef60ccca22460a86ae2fd9b7c5a2->enter($__internal_e06db549d3d8949f1e379df98ae03eb4c8ecef60ccca22460a86ae2fd9b7c5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e06db549d3d8949f1e379df98ae03eb4c8ecef60ccca22460a86ae2fd9b7c5a2->leave($__internal_e06db549d3d8949f1e379df98ae03eb4c8ecef60ccca22460a86ae2fd9b7c5a2_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_40588646689d0039f69d31a66ee9c1bc2e2dc59ce05cf4ef90107ca64c5e5c4b = $this->env->getExtension("native_profiler");
        $__internal_40588646689d0039f69d31a66ee9c1bc2e2dc59ce05cf4ef90107ca64c5e5c4b->enter($__internal_40588646689d0039f69d31a66ee9c1bc2e2dc59ce05cf4ef90107ca64c5e5c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_40588646689d0039f69d31a66ee9c1bc2e2dc59ce05cf4ef90107ca64c5e5c4b->leave($__internal_40588646689d0039f69d31a66ee9c1bc2e2dc59ce05cf4ef90107ca64c5e5c4b_prof);

    }

    public function getTemplateName()
    {
        return "@App/Registration/register.html.twig";
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
