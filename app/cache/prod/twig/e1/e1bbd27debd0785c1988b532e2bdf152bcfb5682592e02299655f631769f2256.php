<?php

/* AppBundle:Layouts:main_layout.html.twig */
class __TwigTemplate_9b3014fae3220cbfdbac317c22148979105e523d5c8c3e053cae34db722e8bac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "AppBundle:Layouts:main_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AppBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e020c4208c52f860d625b3b6fd09a1b94ab01a8fcf2645f22320dcc53db5f7f4 = $this->env->getExtension("native_profiler");
        $__internal_e020c4208c52f860d625b3b6fd09a1b94ab01a8fcf2645f22320dcc53db5f7f4->enter($__internal_e020c4208c52f860d625b3b6fd09a1b94ab01a8fcf2645f22320dcc53db5f7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:main_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e020c4208c52f860d625b3b6fd09a1b94ab01a8fcf2645f22320dcc53db5f7f4->leave($__internal_e020c4208c52f860d625b3b6fd09a1b94ab01a8fcf2645f22320dcc53db5f7f4_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5d1cade0cd174daf4935ba4146d1b5abb9a3f658eeeed1e8cfdf4d6a7169bf13 = $this->env->getExtension("native_profiler");
        $__internal_5d1cade0cd174daf4935ba4146d1b5abb9a3f658eeeed1e8cfdf4d6a7169bf13->enter($__internal_5d1cade0cd174daf4935ba4146d1b5abb9a3f658eeeed1e8cfdf4d6a7169bf13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        #logout {
            height: 60px;
            width: 220px;
            float: right;
            padding: 1px;
            text-align: right;
        }
        
        #logout a {
            color: #0404B4;
            font-size: 80%;
            display: block;
        }
        
        #username {
            font-size: 75%;
        }
        
        #nav {
            clear: both;
            text-align: center;
            font-weight: bold;
            font-size: 120%;
            margin-top: 50px;
        }
   
        .nav-item {
            padding: 2px;
            display: inline-block;
            border: 3px outset;
            margin-left: -3px;     
        }
        
        .nav-link {
            text-decoration: none;
            color: black;
        }
        
        #content {
            padding: 2px;
            margin-top: 10px;
        }
        
        #flash {
            height: 40px;
            margin-top: 10px;
            text-align: center;
        }
        
        .active {
             border:3px inset;
        }
    </style>
";
        
        $__internal_5d1cade0cd174daf4935ba4146d1b5abb9a3f658eeeed1e8cfdf4d6a7169bf13->leave($__internal_5d1cade0cd174daf4935ba4146d1b5abb9a3f658eeeed1e8cfdf4d6a7169bf13_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_0721a8f17f75b415911876fc616d0ea42c0e0fe5b682b2f03290172dd869f092 = $this->env->getExtension("native_profiler");
        $__internal_0721a8f17f75b415911876fc616d0ea42c0e0fe5b682b2f03290172dd869f092->enter($__internal_0721a8f17f75b415911876fc616d0ea42c0e0fe5b682b2f03290172dd869f092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "    ";
        ob_start();
        // line 62
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div id=\"logout\">
            ";
        // line 64
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 65
            echo "                <span id=\"username\">Logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Log out </a>
            ";
        }
        // line 68
        echo "        </div>
        <div id=\"nav\">
            <div class=\"nav-item ";
        // line 70
        if ((is_string($__internal_48f85b642785c1dca2a729545e80dbc5fa023e5ee070a0161148fb1a7ee3dc84 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f90df3a64b440955058fad326a352a6ea4eea1dcea54da67b385a2e281e2c8a0 = "event_list") && ('' === $__internal_f90df3a64b440955058fad326a352a6ea4eea1dcea54da67b385a2e281e2c8a0 || 0 === strpos($__internal_48f85b642785c1dca2a729545e80dbc5fa023e5ee070a0161148fb1a7ee3dc84, $__internal_f90df3a64b440955058fad326a352a6ea4eea1dcea54da67b385a2e281e2c8a0)))) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("event_list");
        echo "\">EVENTS</a>
            </div>
            <div class=\"nav-item ";
        // line 73
        if ((is_string($__internal_f7b22be9e0e60a693474340601ea12667b706d5d727f3b3d67bfa641dcceaf4b = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_c8f3b4decaa2cc4f20492e59ee0de4288d304788509b417668bb71d2957b0d41 = "team_list") && ('' === $__internal_c8f3b4decaa2cc4f20492e59ee0de4288d304788509b417668bb71d2957b0d41 || 0 === strpos($__internal_f7b22be9e0e60a693474340601ea12667b706d5d727f3b3d67bfa641dcceaf4b, $__internal_c8f3b4decaa2cc4f20492e59ee0de4288d304788509b417668bb71d2957b0d41)))) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("team_list");
        echo "\">TEAMS</a>
            </div>
            ";
        // line 76
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 77
            echo "            <div class=\"nav-item ";
            if ((is_string($__internal_d44ffe1987f11e7dcd64f28e550bbe804d69c62617cb9fbda2cf63466824b447 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_a50bab29da8b09ec997008e81f5b3fb17477648a07f003fde093f33f5e673d7f = "sport_list") && ('' === $__internal_a50bab29da8b09ec997008e81f5b3fb17477648a07f003fde093f33f5e673d7f || 0 === strpos($__internal_d44ffe1987f11e7dcd64f28e550bbe804d69c62617cb9fbda2cf63466824b447, $__internal_a50bab29da8b09ec997008e81f5b3fb17477648a07f003fde093f33f5e673d7f)))) {
                echo "active";
            }
            echo "\">
                <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("sport_list");
            echo "\">SPORTS</a>
            </div>
            ";
        }
        // line 81
        echo "        </div>
        <div id=\"flash\">
            ";
        // line 83
        $context["flash"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 84
        echo "
            ";
        // line 85
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), 0, array(), "array", true, true)) {
            // line 86
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 87
        echo " 
            
            ";
        // line 89
        $context["flashError"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 90
        echo "            
            ";
        // line 91
        if ($this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : null), 0, array(), "array", true, true)) {
            // line 92
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : $this->getContext($context, "flashError")), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 93
        echo " 
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 96
        echo "    
    <div id=\"content\">
        ";
        // line 98
        $this->displayBlock('content', $context, $blocks);
        // line 100
        echo "     </div>
    
";
        
        $__internal_0721a8f17f75b415911876fc616d0ea42c0e0fe5b682b2f03290172dd869f092->leave($__internal_0721a8f17f75b415911876fc616d0ea42c0e0fe5b682b2f03290172dd869f092_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_9cba363b1421edd9610ae46f0b6b65d96bc81e9187403fc0bddd2d7e303cd146 = $this->env->getExtension("native_profiler");
        $__internal_9cba363b1421edd9610ae46f0b6b65d96bc81e9187403fc0bddd2d7e303cd146->enter($__internal_9cba363b1421edd9610ae46f0b6b65d96bc81e9187403fc0bddd2d7e303cd146_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "        ";
        
        $__internal_9cba363b1421edd9610ae46f0b6b65d96bc81e9187403fc0bddd2d7e303cd146->leave($__internal_9cba363b1421edd9610ae46f0b6b65d96bc81e9187403fc0bddd2d7e303cd146_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Layouts:main_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 99,  228 => 98,  219 => 100,  217 => 98,  213 => 96,  208 => 93,  202 => 92,  200 => 91,  197 => 90,  195 => 89,  191 => 87,  185 => 86,  183 => 85,  180 => 84,  178 => 83,  174 => 81,  168 => 78,  161 => 77,  159 => 76,  154 => 74,  148 => 73,  143 => 71,  137 => 70,  133 => 68,  128 => 66,  123 => 65,  121 => 64,  115 => 62,  112 => 61,  106 => 60,  42 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends 'AppBundle::base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         #logout {*/
/*             height: 60px;*/
/*             width: 220px;*/
/*             float: right;*/
/*             padding: 1px;*/
/*             text-align: right;*/
/*         }*/
/*         */
/*         #logout a {*/
/*             color: #0404B4;*/
/*             font-size: 80%;*/
/*             display: block;*/
/*         }*/
/*         */
/*         #username {*/
/*             font-size: 75%;*/
/*         }*/
/*         */
/*         #nav {*/
/*             clear: both;*/
/*             text-align: center;*/
/*             font-weight: bold;*/
/*             font-size: 120%;*/
/*             margin-top: 50px;*/
/*         }*/
/*    */
/*         .nav-item {*/
/*             padding: 2px;*/
/*             display: inline-block;*/
/*             border: 3px outset;*/
/*             margin-left: -3px;     */
/*         }*/
/*         */
/*         .nav-link {*/
/*             text-decoration: none;*/
/*             color: black;*/
/*         }*/
/*         */
/*         #content {*/
/*             padding: 2px;*/
/*             margin-top: 10px;*/
/*         }*/
/*         */
/*         #flash {*/
/*             height: 40px;*/
/*             margin-top: 10px;*/
/*             text-align: center;*/
/*         }*/
/*         */
/*         .active {*/
/*              border:3px inset;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% spaceless %}*/
/*         {{ parent() }}*/
/*         <div id="logout">*/
/*             {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                 <span id="username">Logged in as {{ app.user.username }}</span>*/
/*                 <a href="{{ path('logout') }}"> Log out </a>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div id="nav">*/
/*             <div class="nav-item {% if app.request.attributes.get( '_route' ) starts with 'event_list' %}active{% endif %}">*/
/*                 <a class="nav-link" href="{{ path('event_list') }}">EVENTS</a>*/
/*             </div>*/
/*             <div class="nav-item {% if app.request.attributes.get( '_route' ) starts with 'team_list' %}active{% endif %}">*/
/*                 <a class="nav-link" href="{{ path('team_list') }}">TEAMS</a>*/
/*             </div>*/
/*             {% if is_granted('ROLE_ADMIN') %}*/
/*             <div class="nav-item {% if app.request.attributes.get( '_route' ) starts with 'sport_list' %}active{% endif %}">*/
/*                 <a class="nav-link" href="{{ path('sport_list') }}">SPORTS</a>*/
/*             </div>*/
/*             {% endif %}*/
/*         </div>*/
/*         <div id="flash">*/
/*             {% set flash = app.session.flashbag.get('success') %}*/
/* */
/*             {% if flash[0] is defined %}*/
/*                 {{ flash[0] }}*/
/*             {% endif %} */
/*             */
/*             {% set flashError = app.session.flashbag.get('error') %}*/
/*             */
/*             {% if flashError[0] is defined %}*/
/*                 {{ flashError[0] }}*/
/*             {% endif %} */
/*         </div>*/
/*     {% endspaceless %}*/
/*     */
/*     <div id="content">*/
/*         {% block content %}*/
/*         {% endblock %}*/
/*      </div>*/
/*     */
/* {% endblock %}*/
/* */
/* */
