<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_e79b7296edd783798c8a1b9b6c9375f8c1b948e65fb37f8483cb60d090834e0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Login:login.html.twig", 1);
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <div id=\"login-form\">
        <div class=\"form-title\">
            Log in
        </div> 
        <div id=\"flash\">
            ";
        // line 23
        $context["flash"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(0 => "success"), "method");
        // line 24
        echo "
            ";
        // line 25
        if ($this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array", false, true), 0, array(), "array", true, true)) {
            // line 26
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), "success", array(), "array"), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 27
        echo " 
        </div>
            
        <div id=\"error\">
        ";
        // line 31
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 32
            echo "            ";
            if (($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()) === "Bad credentials.")) {
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
        ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_username", array()), 'row');
        echo "
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_password", array()), 'row');
        echo "
        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "submit", array()), 'row');
        echo "
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
    <br />
    <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("register");
        echo "\">Register new account</a><br />
    <a id=\"recover-password\" href=\"#\">Forgotten password</a>
";
    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
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
    }

    public function getTemplateName()
    {
        return "AppBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  125 => 48,  118 => 44,  112 => 41,  108 => 40,  104 => 39,  100 => 38,  96 => 37,  93 => 36,  90 => 35,  86 => 33,  83 => 32,  81 => 31,  75 => 27,  69 => 26,  67 => 25,  64 => 24,  62 => 23,  55 => 18,  52 => 17,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
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
