<?php

/* AppBundle:Login:login.html.twig */
class __TwigTemplate_8b5a4524f46279788b7f4a136eb5af14fd3e382e8467b8ee89cf1f489692e804 extends Twig_Template
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
        $__internal_62824a0e55e1e44e6ed8ba53c8a9ef875643d5590919c3038f8da77c320e2f1e = $this->env->getExtension("native_profiler");
        $__internal_62824a0e55e1e44e6ed8ba53c8a9ef875643d5590919c3038f8da77c320e2f1e->enter($__internal_62824a0e55e1e44e6ed8ba53c8a9ef875643d5590919c3038f8da77c320e2f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Login:login.html.twig"));

        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "AppBundle:FormTemplates:form_row_template.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62824a0e55e1e44e6ed8ba53c8a9ef875643d5590919c3038f8da77c320e2f1e->leave($__internal_62824a0e55e1e44e6ed8ba53c8a9ef875643d5590919c3038f8da77c320e2f1e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86ef0cd82d35987576988c3e29460b1634a0cc2f31e3bad4b2a8c318e5031b95 = $this->env->getExtension("native_profiler");
        $__internal_86ef0cd82d35987576988c3e29460b1634a0cc2f31e3bad4b2a8c318e5031b95->enter($__internal_86ef0cd82d35987576988c3e29460b1634a0cc2f31e3bad4b2a8c318e5031b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_86ef0cd82d35987576988c3e29460b1634a0cc2f31e3bad4b2a8c318e5031b95->leave($__internal_86ef0cd82d35987576988c3e29460b1634a0cc2f31e3bad4b2a8c318e5031b95_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_ead3e4f23d74e04b38cfef44030bbf655eb70219f899281cf11152bdbb18b795 = $this->env->getExtension("native_profiler");
        $__internal_ead3e4f23d74e04b38cfef44030bbf655eb70219f899281cf11152bdbb18b795->enter($__internal_ead3e4f23d74e04b38cfef44030bbf655eb70219f899281cf11152bdbb18b795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ead3e4f23d74e04b38cfef44030bbf655eb70219f899281cf11152bdbb18b795->leave($__internal_ead3e4f23d74e04b38cfef44030bbf655eb70219f899281cf11152bdbb18b795_prof);

    }

    // line 48
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1b636f0c2a5b460e2392e7644bf6bf07d1bb974f816b02ecf6853e9cc669bd79 = $this->env->getExtension("native_profiler");
        $__internal_1b636f0c2a5b460e2392e7644bf6bf07d1bb974f816b02ecf6853e9cc669bd79->enter($__internal_1b636f0c2a5b460e2392e7644bf6bf07d1bb974f816b02ecf6853e9cc669bd79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1b636f0c2a5b460e2392e7644bf6bf07d1bb974f816b02ecf6853e9cc669bd79->leave($__internal_1b636f0c2a5b460e2392e7644bf6bf07d1bb974f816b02ecf6853e9cc669bd79_prof);

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
