<?php

/* AppBundle::base.html.twig */
class __TwigTemplate_fed686bdeae5165c2cea9407a9243cd99bcbd193655d6a5808901e31b82a6cdf extends Twig_Template
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
        $__internal_c6230a87295a8518e8e230d9359f48b1aa081786959e6d8935200beb38d14db6 = $this->env->getExtension("native_profiler");
        $__internal_c6230a87295a8518e8e230d9359f48b1aa081786959e6d8935200beb38d14db6->enter($__internal_c6230a87295a8518e8e230d9359f48b1aa081786959e6d8935200beb38d14db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::base.html.twig"));

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
        
        $__internal_c6230a87295a8518e8e230d9359f48b1aa081786959e6d8935200beb38d14db6->leave($__internal_c6230a87295a8518e8e230d9359f48b1aa081786959e6d8935200beb38d14db6_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ce0ea37c34161dcf9341ec0b8511258d658ad71775316f8b5d29d537cb8947b = $this->env->getExtension("native_profiler");
        $__internal_6ce0ea37c34161dcf9341ec0b8511258d658ad71775316f8b5d29d537cb8947b->enter($__internal_6ce0ea37c34161dcf9341ec0b8511258d658ad71775316f8b5d29d537cb8947b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6ce0ea37c34161dcf9341ec0b8511258d658ad71775316f8b5d29d537cb8947b->leave($__internal_6ce0ea37c34161dcf9341ec0b8511258d658ad71775316f8b5d29d537cb8947b_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_accf9ec22d14a508f4010e067941fc3d9e3f2c9ce72f2267ea62647b412e2035 = $this->env->getExtension("native_profiler");
        $__internal_accf9ec22d14a508f4010e067941fc3d9e3f2c9ce72f2267ea62647b412e2035->enter($__internal_accf9ec22d14a508f4010e067941fc3d9e3f2c9ce72f2267ea62647b412e2035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_accf9ec22d14a508f4010e067941fc3d9e3f2c9ce72f2267ea62647b412e2035->leave($__internal_accf9ec22d14a508f4010e067941fc3d9e3f2c9ce72f2267ea62647b412e2035_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ff24812e5c14a0558b7b01cff16e561b2a930c51ac47c5c027bfd42958925f3 = $this->env->getExtension("native_profiler");
        $__internal_1ff24812e5c14a0558b7b01cff16e561b2a930c51ac47c5c027bfd42958925f3->enter($__internal_1ff24812e5c14a0558b7b01cff16e561b2a930c51ac47c5c027bfd42958925f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ff24812e5c14a0558b7b01cff16e561b2a930c51ac47c5c027bfd42958925f3->leave($__internal_1ff24812e5c14a0558b7b01cff16e561b2a930c51ac47c5c027bfd42958925f3_prof);

    }

    // line 31
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_902290af6f91762fd879531d304a743710153fd0a71f0e538d7567870be470bb = $this->env->getExtension("native_profiler");
        $__internal_902290af6f91762fd879531d304a743710153fd0a71f0e538d7567870be470bb->enter($__internal_902290af6f91762fd879531d304a743710153fd0a71f0e538d7567870be470bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_902290af6f91762fd879531d304a743710153fd0a71f0e538d7567870be470bb->leave($__internal_902290af6f91762fd879531d304a743710153fd0a71f0e538d7567870be470bb_prof);

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
