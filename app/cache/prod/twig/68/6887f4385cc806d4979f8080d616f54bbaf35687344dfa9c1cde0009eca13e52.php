<?php

/* AppBundle:Layouts:main_layout.html.twig */
class __TwigTemplate_4022b94e61f2bbb9f9cdf72bd3a108212e82764e707eca972094ac41c4e6f432 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
        if ((is_string($__internal_1ce89dc6e37fa2061a640918a09dfcb1ed1dcfe5b84e550b2bde9c04001c7fad = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_4f1c8f41df6f9f082496c14ce8a6b70e0e9a1ad3803e2a7e2b2388994ba64036 = "event_list") && ('' === $__internal_4f1c8f41df6f9f082496c14ce8a6b70e0e9a1ad3803e2a7e2b2388994ba64036 || 0 === strpos($__internal_1ce89dc6e37fa2061a640918a09dfcb1ed1dcfe5b84e550b2bde9c04001c7fad, $__internal_4f1c8f41df6f9f082496c14ce8a6b70e0e9a1ad3803e2a7e2b2388994ba64036)))) {
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
        if ((is_string($__internal_e08eb48e1d4ed0a3f5c1c51e3d9ae59bb505641a346cdaffd18824fac3850536 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_d506f03d9b44d536477ea20f73e5385559454288341275f1523605e2eeae3468 = "team_list") && ('' === $__internal_d506f03d9b44d536477ea20f73e5385559454288341275f1523605e2eeae3468 || 0 === strpos($__internal_e08eb48e1d4ed0a3f5c1c51e3d9ae59bb505641a346cdaffd18824fac3850536, $__internal_d506f03d9b44d536477ea20f73e5385559454288341275f1523605e2eeae3468)))) {
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
            if ((is_string($__internal_3c0e54fb3d4ad958171bb494cebaacb4032a30efee5705388fa9aa4717cde061 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_61eb2955c201d154638c9917b262508e39619ab21b7110cdc680dac2403279a6 = "sport_list") && ('' === $__internal_61eb2955c201d154638c9917b262508e39619ab21b7110cdc680dac2403279a6 || 0 === strpos($__internal_3c0e54fb3d4ad958171bb494cebaacb4032a30efee5705388fa9aa4717cde061, $__internal_61eb2955c201d154638c9917b262508e39619ab21b7110cdc680dac2403279a6)))) {
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
        $context["flash"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 84
        echo "
            ";
        // line 85
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), 0, array(), "array", true, true)) {
            // line 86
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 87
        echo " 
            
            ";
        // line 89
        $context["flashError"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 90
        echo "            
            ";
        // line 91
        if ($this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : null), 0, array(), "array", true, true)) {
            // line 92
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : null), 0, array(), "array"), "html", null, true);
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
    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        // line 99
        echo "        ";
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
        return array (  213 => 99,  210 => 98,  204 => 100,  202 => 98,  198 => 96,  193 => 93,  187 => 92,  185 => 91,  182 => 90,  180 => 89,  176 => 87,  170 => 86,  168 => 85,  165 => 84,  163 => 83,  159 => 81,  153 => 78,  146 => 77,  144 => 76,  139 => 74,  133 => 73,  128 => 71,  122 => 70,  118 => 68,  113 => 66,  108 => 65,  106 => 64,  100 => 62,  97 => 61,  94 => 60,  33 => 3,  30 => 2,  11 => 1,);
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
