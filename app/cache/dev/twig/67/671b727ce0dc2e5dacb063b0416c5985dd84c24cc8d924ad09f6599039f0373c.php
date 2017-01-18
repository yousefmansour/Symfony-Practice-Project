<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_3732d385e022b970ad9f7fd5511df15f322e9eeaa0cc7d3b6da2d4e542e12782 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e7747f3e4865c8cad6594a9ee6c4830c8af4400025706e4c860851bc195dc9e = $this->env->getExtension("native_profiler");
        $__internal_0e7747f3e4865c8cad6594a9ee6c4830c8af4400025706e4c860851bc195dc9e->enter($__internal_0e7747f3e4865c8cad6594a9ee6c4830c8af4400025706e4c860851bc195dc9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    </head>
    <body>
        <div id=\"body\">    
            ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 30
        echo "        </div>
        ";
        // line 31
        $this->displayBlock('javascripts', $context, $blocks);
        // line 32
        echo "    </body>
</html>
";
        
        $__internal_0e7747f3e4865c8cad6594a9ee6c4830c8af4400025706e4c860851bc195dc9e->leave($__internal_0e7747f3e4865c8cad6594a9ee6c4830c8af4400025706e4c860851bc195dc9e_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_21d39b2f0ef891cfdb64d87c32580fd302b22395d8d5bf611fb1b95f2f30a9ec = $this->env->getExtension("native_profiler");
        $__internal_21d39b2f0ef891cfdb64d87c32580fd302b22395d8d5bf611fb1b95f2f30a9ec->enter($__internal_21d39b2f0ef891cfdb64d87c32580fd302b22395d8d5bf611fb1b95f2f30a9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_21d39b2f0ef891cfdb64d87c32580fd302b22395d8d5bf611fb1b95f2f30a9ec->leave($__internal_21d39b2f0ef891cfdb64d87c32580fd302b22395d8d5bf611fb1b95f2f30a9ec_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a005d0a85d37597a5fdb9bbbade8ff76df61c80de9a91ef910f9b7d06c3203c = $this->env->getExtension("native_profiler");
        $__internal_7a005d0a85d37597a5fdb9bbbade8ff76df61c80de9a91ef910f9b7d06c3203c->enter($__internal_7a005d0a85d37597a5fdb9bbbade8ff76df61c80de9a91ef910f9b7d06c3203c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <style>
                #body {
                    width: 50%;
                    min-height: 50em;
                    background-color:#F5F5F5;
                    padding: 5px;
                    margin-top: 10px;
                    margin-left: auto;
                    margin-right: auto;
                    font-size: 120%;
                }
  
                .form-title {
                    font-weight: bold;
                    margin-bottom: 2px;
                }
            </style>
        ";
        
        $__internal_7a005d0a85d37597a5fdb9bbbade8ff76df61c80de9a91ef910f9b7d06c3203c->leave($__internal_7a005d0a85d37597a5fdb9bbbade8ff76df61c80de9a91ef910f9b7d06c3203c_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_16556014ca53475aa1adb55d21cddc1a7b5585c6a65c834e9ad23e711dec6a0c = $this->env->getExtension("native_profiler");
        $__internal_16556014ca53475aa1adb55d21cddc1a7b5585c6a65c834e9ad23e711dec6a0c->enter($__internal_16556014ca53475aa1adb55d21cddc1a7b5585c6a65c834e9ad23e711dec6a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16556014ca53475aa1adb55d21cddc1a7b5585c6a65c834e9ad23e711dec6a0c->leave($__internal_16556014ca53475aa1adb55d21cddc1a7b5585c6a65c834e9ad23e711dec6a0c_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_983ffb570ded340264a4e6c479a9fe0b6368c9bc55c7dbe2f0da0bac6808c938 = $this->env->getExtension("native_profiler");
        $__internal_983ffb570ded340264a4e6c479a9fe0b6368c9bc55c7dbe2f0da0bac6808c938->enter($__internal_983ffb570ded340264a4e6c479a9fe0b6368c9bc55c7dbe2f0da0bac6808c938_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_983ffb570ded340264a4e6c479a9fe0b6368c9bc55c7dbe2f0da0bac6808c938->leave($__internal_983ffb570ded340264a4e6c479a9fe0b6368c9bc55c7dbe2f0da0bac6808c938_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 31,  105 => 29,  81 => 8,  75 => 7,  63 => 6,  54 => 32,  52 => 31,  49 => 30,  47 => 29,  42 => 26,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <style>*/
/*                 #body {*/
/*                     width: 50%;*/
/*                     min-height: 50em;*/
/*                     background-color:#F5F5F5;*/
/*                     padding: 5px;*/
/*                     margin-top: 10px;*/
/*                     margin-left: auto;*/
/*                     margin-right: auto;*/
/*                     font-size: 120%;*/
/*                 }*/
/*   */
/*                 .form-title {*/
/*                     font-weight: bold;*/
/*                     margin-bottom: 2px;*/
/*                 }*/
/*             </style>*/
/*         {% endblock %}*/
/*     </head>*/
/*     <body>*/
/*         <div id="body">    */
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
