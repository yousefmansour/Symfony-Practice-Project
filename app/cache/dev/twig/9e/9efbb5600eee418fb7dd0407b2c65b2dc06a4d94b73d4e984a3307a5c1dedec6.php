<?php

/* AppBundle:Layouts:main_layout.html.twig */
class __TwigTemplate_bf6eecaea44daee816f548859fbd4d21c4ca9b19b8db8180af2f4a4bd356f009 extends Twig_Template
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
        $__internal_b465928dc544dfa2f54a7926d086400ba9e8307be041db8b19a75dea66eef8c2 = $this->env->getExtension("native_profiler");
        $__internal_b465928dc544dfa2f54a7926d086400ba9e8307be041db8b19a75dea66eef8c2->enter($__internal_b465928dc544dfa2f54a7926d086400ba9e8307be041db8b19a75dea66eef8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Layouts:main_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b465928dc544dfa2f54a7926d086400ba9e8307be041db8b19a75dea66eef8c2->leave($__internal_b465928dc544dfa2f54a7926d086400ba9e8307be041db8b19a75dea66eef8c2_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2029c77b58175d2867d2c67c06abbf8b16d93e47e202230c0292540e784cfddc = $this->env->getExtension("native_profiler");
        $__internal_2029c77b58175d2867d2c67c06abbf8b16d93e47e202230c0292540e784cfddc->enter($__internal_2029c77b58175d2867d2c67c06abbf8b16d93e47e202230c0292540e784cfddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            overflow: hidden;
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
        
        $__internal_2029c77b58175d2867d2c67c06abbf8b16d93e47e202230c0292540e784cfddc->leave($__internal_2029c77b58175d2867d2c67c06abbf8b16d93e47e202230c0292540e784cfddc_prof);

    }

    // line 61
    public function block_body($context, array $blocks = array())
    {
        $__internal_badb9bc812e5d36fde5d2a517b6127516df1dcf2ca6a67d13c5751d7fb8c71bc = $this->env->getExtension("native_profiler");
        $__internal_badb9bc812e5d36fde5d2a517b6127516df1dcf2ca6a67d13c5751d7fb8c71bc->enter($__internal_badb9bc812e5d36fde5d2a517b6127516df1dcf2ca6a67d13c5751d7fb8c71bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 62
        echo "    ";
        ob_start();
        // line 63
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
        <div id=\"logout\">
            ";
        // line 65
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 66
            echo "                <span id=\"username\">Logged in as ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                <a href=\"";
            // line 67
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"> Log out </a>
            ";
        }
        // line 69
        echo "        </div>
        <div id=\"nav\">
            <div class=\"nav-item ";
        // line 71
        if ((is_string($__internal_db221cd6173dac20e097dd9cc83b8b2a8e22b55ddede805eaea10c977e1b56c4 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_01804e79fa7c0271ee440c192e777b6b45ede4e8d991bd7f35ea9f5190ee1a2d = "event_list") && ('' === $__internal_01804e79fa7c0271ee440c192e777b6b45ede4e8d991bd7f35ea9f5190ee1a2d || 0 === strpos($__internal_db221cd6173dac20e097dd9cc83b8b2a8e22b55ddede805eaea10c977e1b56c4, $__internal_01804e79fa7c0271ee440c192e777b6b45ede4e8d991bd7f35ea9f5190ee1a2d)))) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("event_list");
        echo "\">EVENTS</a>
            </div>
            <div class=\"nav-item ";
        // line 74
        if ((is_string($__internal_5b4b24ec684ecd4db95a39c1eb961e25ddaf49c6b8f555e74bcaeaa9efe35942 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_195778e4bb09def4973cedfe98a0ad38179d9a57cee6ce00cab6de348174b9c6 = "team_list") && ('' === $__internal_195778e4bb09def4973cedfe98a0ad38179d9a57cee6ce00cab6de348174b9c6 || 0 === strpos($__internal_5b4b24ec684ecd4db95a39c1eb961e25ddaf49c6b8f555e74bcaeaa9efe35942, $__internal_195778e4bb09def4973cedfe98a0ad38179d9a57cee6ce00cab6de348174b9c6)))) {
            echo "active";
        }
        echo "\">
                <a class=\"nav-link\" href=\"";
        // line 75
        echo $this->env->getExtension('routing')->getPath("team_list");
        echo "\">TEAMS</a>
            </div>
            ";
        // line 77
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 78
            echo "            <div class=\"nav-item ";
            if ((is_string($__internal_bc438c916eaca8ba61b72540abeab8b02aa078653dbf630ddb1451873adcaf16 = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method")) && is_string($__internal_072b2b7b89ab0e16e60af2ea7de1d4d0dfff9f0ce86be886f9e95aaaee6546a1 = "sport_list") && ('' === $__internal_072b2b7b89ab0e16e60af2ea7de1d4d0dfff9f0ce86be886f9e95aaaee6546a1 || 0 === strpos($__internal_bc438c916eaca8ba61b72540abeab8b02aa078653dbf630ddb1451873adcaf16, $__internal_072b2b7b89ab0e16e60af2ea7de1d4d0dfff9f0ce86be886f9e95aaaee6546a1)))) {
                echo "active";
            }
            echo "\">
                <a class=\"nav-link\" href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("sport_list");
            echo "\">SPORTS</a>
            </div>
            ";
        }
        // line 82
        echo "        </div>
        <div id=\"flash\">
            ";
        // line 84
        $context["flash"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method");
        // line 85
        echo "
            ";
        // line 86
        if ($this->getAttribute((isset($context["flash"]) ? $context["flash"] : null), 0, array(), "array", true, true)) {
            // line 87
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flash"]) ? $context["flash"] : $this->getContext($context, "flash")), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 88
        echo " 
            
            ";
        // line 90
        $context["flashError"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method");
        // line 91
        echo "            
            ";
        // line 92
        if ($this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : null), 0, array(), "array", true, true)) {
            // line 93
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["flashError"]) ? $context["flashError"] : $this->getContext($context, "flashError")), 0, array(), "array"), "html", null, true);
            echo "
            ";
        }
        // line 94
        echo " 
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 97
        echo "    
    <div id=\"content\">
        ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "     </div>
    
";
        
        $__internal_badb9bc812e5d36fde5d2a517b6127516df1dcf2ca6a67d13c5751d7fb8c71bc->leave($__internal_badb9bc812e5d36fde5d2a517b6127516df1dcf2ca6a67d13c5751d7fb8c71bc_prof);

    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        $__internal_a7cd06bf44d591281bd4c533ad1aebc8f4820e132bd51f306bd880fb0f0cedb5 = $this->env->getExtension("native_profiler");
        $__internal_a7cd06bf44d591281bd4c533ad1aebc8f4820e132bd51f306bd880fb0f0cedb5->enter($__internal_a7cd06bf44d591281bd4c533ad1aebc8f4820e132bd51f306bd880fb0f0cedb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 100
        echo "        ";
        
        $__internal_a7cd06bf44d591281bd4c533ad1aebc8f4820e132bd51f306bd880fb0f0cedb5->leave($__internal_a7cd06bf44d591281bd4c533ad1aebc8f4820e132bd51f306bd880fb0f0cedb5_prof);

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
        return array (  235 => 100,  229 => 99,  220 => 101,  218 => 99,  214 => 97,  209 => 94,  203 => 93,  201 => 92,  198 => 91,  196 => 90,  192 => 88,  186 => 87,  184 => 86,  181 => 85,  179 => 84,  175 => 82,  169 => 79,  162 => 78,  160 => 77,  155 => 75,  149 => 74,  144 => 72,  138 => 71,  134 => 69,  129 => 67,  124 => 66,  122 => 65,  116 => 63,  113 => 62,  107 => 61,  42 => 3,  36 => 2,  11 => 1,);
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
/*             overflow: hidden;*/
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
