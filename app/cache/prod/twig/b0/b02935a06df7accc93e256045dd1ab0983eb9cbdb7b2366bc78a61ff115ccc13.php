<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_32aaf91632e3ae49d9270f72ac836be074bc41fcef084e81bae70bc9f86bde3c extends Twig_Template
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
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  92 => 31,  87 => 29,  66 => 8,  63 => 7,  57 => 6,  51 => 32,  49 => 31,  46 => 30,  44 => 29,  39 => 26,  37 => 7,  33 => 6,  29 => 5,  23 => 1,);
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
