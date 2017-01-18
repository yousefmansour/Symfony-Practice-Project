<?php

/* @App/base.html.twig */
class __TwigTemplate_fd56b2644d15e6f8aee0f88769d6f96f50c0f3c5483eaf10cbaab24d79ebdf0f extends Twig_Template
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
        $__internal_9c370dfb0e28e63203df5a720e5683a59d9dec208c64d4c51200ff07d042897f = $this->env->getExtension("native_profiler");
        $__internal_9c370dfb0e28e63203df5a720e5683a59d9dec208c64d4c51200ff07d042897f->enter($__internal_9c370dfb0e28e63203df5a720e5683a59d9dec208c64d4c51200ff07d042897f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/base.html.twig"));

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
        
        $__internal_9c370dfb0e28e63203df5a720e5683a59d9dec208c64d4c51200ff07d042897f->leave($__internal_9c370dfb0e28e63203df5a720e5683a59d9dec208c64d4c51200ff07d042897f_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_03aad6702135b345d6c6d83b80499e5a933ac751a745ab3a899d6f1e1dadcdbe = $this->env->getExtension("native_profiler");
        $__internal_03aad6702135b345d6c6d83b80499e5a933ac751a745ab3a899d6f1e1dadcdbe->enter($__internal_03aad6702135b345d6c6d83b80499e5a933ac751a745ab3a899d6f1e1dadcdbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_03aad6702135b345d6c6d83b80499e5a933ac751a745ab3a899d6f1e1dadcdbe->leave($__internal_03aad6702135b345d6c6d83b80499e5a933ac751a745ab3a899d6f1e1dadcdbe_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04551e0376c0be435ac2e08c5104bb99eb0c4169aefbd6f3faf553723878a136 = $this->env->getExtension("native_profiler");
        $__internal_04551e0376c0be435ac2e08c5104bb99eb0c4169aefbd6f3faf553723878a136->enter($__internal_04551e0376c0be435ac2e08c5104bb99eb0c4169aefbd6f3faf553723878a136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_04551e0376c0be435ac2e08c5104bb99eb0c4169aefbd6f3faf553723878a136->leave($__internal_04551e0376c0be435ac2e08c5104bb99eb0c4169aefbd6f3faf553723878a136_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa14efce0228c14c9a554b0029e6d0115a1a79cbde68383032c08eeea19bf349 = $this->env->getExtension("native_profiler");
        $__internal_aa14efce0228c14c9a554b0029e6d0115a1a79cbde68383032c08eeea19bf349->enter($__internal_aa14efce0228c14c9a554b0029e6d0115a1a79cbde68383032c08eeea19bf349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aa14efce0228c14c9a554b0029e6d0115a1a79cbde68383032c08eeea19bf349->leave($__internal_aa14efce0228c14c9a554b0029e6d0115a1a79cbde68383032c08eeea19bf349_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15c6076f3886938e4dd74f788cb1aa2324e7ff72e55864444bf156fc4f169532 = $this->env->getExtension("native_profiler");
        $__internal_15c6076f3886938e4dd74f788cb1aa2324e7ff72e55864444bf156fc4f169532->enter($__internal_15c6076f3886938e4dd74f788cb1aa2324e7ff72e55864444bf156fc4f169532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15c6076f3886938e4dd74f788cb1aa2324e7ff72e55864444bf156fc4f169532->leave($__internal_15c6076f3886938e4dd74f788cb1aa2324e7ff72e55864444bf156fc4f169532_prof);

    }

    public function getTemplateName()
    {
        return "@App/base.html.twig";
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
