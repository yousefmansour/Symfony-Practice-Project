<?php

/* @App/Login/login.html.twig */
class __TwigTemplate_16b0c95d54631a1ca9f0a44d4cd16176f92b2bb2c29c144731bc9f2d892d76dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Login/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c906fa12da86feafddf28a092e440149e6b44d890313fe36453ac4be8f1db3ee = $this->env->getExtension("native_profiler");
        $__internal_c906fa12da86feafddf28a092e440149e6b44d890313fe36453ac4be8f1db3ee->enter($__internal_c906fa12da86feafddf28a092e440149e6b44d890313fe36453ac4be8f1db3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Login/login.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c906fa12da86feafddf28a092e440149e6b44d890313fe36453ac4be8f1db3ee->leave($__internal_c906fa12da86feafddf28a092e440149e6b44d890313fe36453ac4be8f1db3ee_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0570b7db8803b68e2d7fa75e838737138f975d5869b1727d92ad1f8e8820ed59 = $this->env->getExtension("native_profiler");
        $__internal_0570b7db8803b68e2d7fa75e838737138f975d5869b1727d92ad1f8e8820ed59->enter($__internal_0570b7db8803b68e2d7fa75e838737138f975d5869b1727d92ad1f8e8820ed59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #login-form {
            margin: 2px;
        }
        
        #error {
            height: 1em;
        }
    </style>
";
        
        $__internal_0570b7db8803b68e2d7fa75e838737138f975d5869b1727d92ad1f8e8820ed59->leave($__internal_0570b7db8803b68e2d7fa75e838737138f975d5869b1727d92ad1f8e8820ed59_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cb12c26ec055affbf8b62b86966be05ab0c0c402eebfdfe5bdb45f8d30bdd7d = $this->env->getExtension("native_profiler");
        $__internal_6cb12c26ec055affbf8b62b86966be05ab0c0c402eebfdfe5bdb45f8d30bdd7d->enter($__internal_6cb12c26ec055affbf8b62b86966be05ab0c0c402eebfdfe5bdb45f8d30bdd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "    <div id=\"login-form\">
        <div class=\"form-title\">
            Log in
        </div> 
        <div id=\"flash\">
            ";
        // line 23
        $context["flash"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(0 => "success"), "method");
        // line 24
        echo "
            ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array", false, true), 0, array(), "array", true, true)) {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), "success", array(), "array"), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 27
        echo " 
        </div>
            
        <div id=\"error\">
        ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 32
            echo "            ";
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()) === "Bad credentials.")) {
                // line 33
                echo "                Invalid username/password.  
            ";
            }
            // line 35
            echo "        ";
        }
        // line 36
        echo "        </div>
        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_username", array()), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_password", array()), 'row');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit", array()), 'row');
        echo "
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <br />
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register new account</a><br />
    <a id=\"recover-password\" href=\"#\">Forgotten password</a>
";
        
        $__internal_6cb12c26ec055affbf8b62b86966be05ab0c0c402eebfdfe5bdb45f8d30bdd7d->leave($__internal_6cb12c26ec055affbf8b62b86966be05ab0c0c402eebfdfe5bdb45f8d30bdd7d_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cadf52af7410d82255acb2d1a4775b72ad769ec53c754f20907757cea7c5d0fb = $this->env->getExtension("native_profiler");
        $__internal_cadf52af7410d82255acb2d1a4775b72ad769ec53c754f20907757cea7c5d0fb->enter($__internal_cadf52af7410d82255acb2d1a4775b72ad769ec53c754f20907757cea7c5d0fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 49
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
    <script>
        document.getElementById('recover-password').onclick = function(){
            var span = document.createElement(\"span\");
            span.innerHTML = \"Too bad :(\";
            var anchor = document.getElementById(\"recover-password\");
            anchor.parentNode.replaceChild(span, anchor);
        };
    </script>
";
        
        $__internal_cadf52af7410d82255acb2d1a4775b72ad769ec53c754f20907757cea7c5d0fb->leave($__internal_cadf52af7410d82255acb2d1a4775b72ad769ec53c754f20907757cea7c5d0fb_prof);

    }

    public function getTemplateName()
    {
        return "@App/Login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 49,  143 => 48,  133 => 44,  127 => 41,  123 => 40,  119 => 39,  115 => 38,  111 => 37,  108 => 36,  105 => 35,  101 => 33,  98 => 32,  96 => 31,  90 => 27,  84 => 26,  82 => 25,  79 => 24,  77 => 23,  70 => 18,  64 => 17,  45 => 5,  39 => 4,  32 => 1,  30 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% form_theme form 'AppBundle:FormTemplates:form_row_template.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #login-form {*/
/*             margin: 2px;*/
/*         }*/
/*         */
/*         #error {*/
/*             height: 1em;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/*     */
/* {% block body %}*/
/*     <div id="login-form">*/
/*         <div class="form-title">*/
/*             Log in*/
/*         </div> */
/*         <div id="flash">*/
/*             {% set flash = app.session.flashbag.all('success') %}*/
/* */
/*             {% if flash['success'][0] is defined %}*/
/*                 {{ flash['success'][0] }}*/
/*             {% endif %} */
/*         </div>*/
/*             */
/*         <div id="error">*/
/*         {% if error %}*/
/*             {% if error.message is same as("Bad credentials.") %}*/
/*                 Invalid username/password.  */
/*             {% endif %}*/
/*         {% endif %}*/
/*         </div>*/
/*         {{ form_start(form) }}*/
/*         {{ form_row(form._username) }}*/
/*         {{ form_row(form._password) }}*/
/*         {{ form_row(form.submit) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <br />*/
/*     <a href="{{ path('register') }}">Register new account</a><br />*/
/*     <a id="recover-password" href="#">Forgotten password</a>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     */
/*     <script>*/
/*         document.getElementById('recover-password').onclick = function(){*/
/*             var span = document.createElement("span");*/
/*             span.innerHTML = "Too bad :(";*/
/*             var anchor = document.getElementById("recover-password");*/
/*             anchor.parentNode.replaceChild(span, anchor);*/
/*         };*/
/*     </script>*/
/* {% endblock %}*/
