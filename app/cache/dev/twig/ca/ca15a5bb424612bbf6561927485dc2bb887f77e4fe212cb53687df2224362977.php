<?php

/* @App/Layouts/main_layout.html.twig */
class __TwigTemplate_f4e0138f4853fdb8cfac2b8d3ef32b97ac71196fb2835f95177226be3186ffe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AppBundle::base.html.twig", "@App/Layouts/main_layout.html.twig", 1);
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
        $__internal_9476fbf033d2289f4bae31e6129a4bbcf647e8f62db580e9c64a05c2be8ef733 = $this->env->getExtension("native_profiler");
        $__internal_9476fbf033d2289f4bae31e6129a4bbcf647e8f62db580e9c64a05c2be8ef733->enter($__internal_9476fbf033d2289f4bae31e6129a4bbcf647e8f62db580e9c64a05c2be8ef733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Layouts/main_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9476fbf033d2289f4bae31e6129a4bbcf647e8f62db580e9c64a05c2be8ef733->leave($__internal_9476fbf033d2289f4bae31e6129a4bbcf647e8f62db580e9c64a05c2be8ef733_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f581a992b0a1851afbea8d7a50152dfcfabae5a4833d05e0f1a9eaf88db0233 = $this->env->getExtension("native_profiler");
        $__internal_1f581a992b0a1851afbea8d7a50152dfcfabae5a4833d05e0f1a9eaf88db0233->enter($__internal_1f581a992b0a1851afbea8d7a50152dfcfabae5a4833d05e0f1a9eaf88db0233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1f581a992b0a1851afbea8d7a50152dfcfabae5a4833d05e0f1a9eaf88db0233->leave($__internal_1f581a992b0a1851afbea8d7a50152dfcfabae5a4833d05e0f1a9eaf88db0233_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_502df6782ed3bfe7f54c9c5bda0711d50e0949bbcd72e72cfa62bbf684425262 = $this->env->getExtension("native_profiler");
        $__internal_502df6782ed3bfe7f54c9c5bda0711d50e0949bbcd72e72cfa62bbf684425262->enter($__internal_502df6782ed3bfe7f54c9c5bda0711d50e0949bbcd72e72cfa62bbf684425262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ((is_string($__internal_09a301a75f4c4f6043b0e12b8282c45380a8ad1220b5466dfb29639826723204 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_363a96ba5379305565451791cdf5df47e35ad9f388ef7947bd5449dbd81d6109 = "event_list") && ('' === $__internal_363a96ba5379305565451791cdf5df47e35ad9f388ef7947bd5449dbd81d6109 || 0 === strpos($__internal_09a301a75f4c4f6043b0e12b8282c45380a8ad1220b5466dfb29639826723204, $__internal_363a96ba5379305565451791cdf5df47e35ad9f388ef7947bd5449dbd81d6109)))) {
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
        if ((is_string($__internal_04019ca467a2d25100dc4c0ead4a462345d1a1afc931b20c31cfea236f5939c6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_87fdb6f817929e80981396d80a7df783a95f68a88b03554182bfa184e7ef6303 = "team_list") && ('' === $__internal_87fdb6f817929e80981396d80a7df783a95f68a88b03554182bfa184e7ef6303 || 0 === strpos($__internal_04019ca467a2d25100dc4c0ead4a462345d1a1afc931b20c31cfea236f5939c6, $__internal_87fdb6f817929e80981396d80a7df783a95f68a88b03554182bfa184e7ef6303)))) {
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
            if ((is_string($__internal_2fbd17785d596acd2d499ad44e18a0a6b7893536cca306903d04f346cdd30cd6 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_f878439c3698901c225c5186471f74e503c6ad1209531c9c7c345b0022bc3139 = "sport_list") && ('' === $__internal_f878439c3698901c225c5186471f74e503c6ad1209531c9c7c345b0022bc3139 || 0 === strpos($__internal_2fbd17785d596acd2d499ad44e18a0a6b7893536cca306903d04f346cdd30cd6, $__internal_f878439c3698901c225c5186471f74e503c6ad1209531c9c7c345b0022bc3139)))) {
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
        
        $__internal_502df6782ed3bfe7f54c9c5bda0711d50e0949bbcd72e72cfa62bbf684425262->leave($__internal_502df6782ed3bfe7f54c9c5bda0711d50e0949bbcd72e72cfa62bbf684425262_prof);

    }

    // line 98
    public function block_content($context, array $blocks = array())
    {
        $__internal_155a1a68339e5bd6ea7955998cb19a20dcd41336a32f6572ee3739300c7984c4 = $this->env->getExtension("native_profiler");
        $__internal_155a1a68339e5bd6ea7955998cb19a20dcd41336a32f6572ee3739300c7984c4->enter($__internal_155a1a68339e5bd6ea7955998cb19a20dcd41336a32f6572ee3739300c7984c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 99
        echo "        ";
        
        $__internal_155a1a68339e5bd6ea7955998cb19a20dcd41336a32f6572ee3739300c7984c4->leave($__internal_155a1a68339e5bd6ea7955998cb19a20dcd41336a32f6572ee3739300c7984c4_prof);

    }

    public function getTemplateName()
    {
        return "@App/Layouts/main_layout.html.twig";
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
