<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c7a8f26524c189ba35361054a300c0f5a52086a628b8c313324ce00a65cd91f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd7dbdadf5aca547801aaa9e27fe0ec988d154ed8b95799cddde642e01022694 = $this->env->getExtension("native_profiler");
        $__internal_dd7dbdadf5aca547801aaa9e27fe0ec988d154ed8b95799cddde642e01022694->enter($__internal_dd7dbdadf5aca547801aaa9e27fe0ec988d154ed8b95799cddde642e01022694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd7dbdadf5aca547801aaa9e27fe0ec988d154ed8b95799cddde642e01022694->leave($__internal_dd7dbdadf5aca547801aaa9e27fe0ec988d154ed8b95799cddde642e01022694_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_766487563834693c0bed52fc47580b8825715dcfa3dc37063b1412e630ab2402 = $this->env->getExtension("native_profiler");
        $__internal_766487563834693c0bed52fc47580b8825715dcfa3dc37063b1412e630ab2402->enter($__internal_766487563834693c0bed52fc47580b8825715dcfa3dc37063b1412e630ab2402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_766487563834693c0bed52fc47580b8825715dcfa3dc37063b1412e630ab2402->leave($__internal_766487563834693c0bed52fc47580b8825715dcfa3dc37063b1412e630ab2402_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8d619636e76423e76484298ac05e511e32384d24c384a8748ffde9e5f8ac58a = $this->env->getExtension("native_profiler");
        $__internal_c8d619636e76423e76484298ac05e511e32384d24c384a8748ffde9e5f8ac58a->enter($__internal_c8d619636e76423e76484298ac05e511e32384d24c384a8748ffde9e5f8ac58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c8d619636e76423e76484298ac05e511e32384d24c384a8748ffde9e5f8ac58a->leave($__internal_c8d619636e76423e76484298ac05e511e32384d24c384a8748ffde9e5f8ac58a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2246098de7b1898d92d3fdcf6a13ca76ae3671fdf21d5e2d2bca338361bba68b = $this->env->getExtension("native_profiler");
        $__internal_2246098de7b1898d92d3fdcf6a13ca76ae3671fdf21d5e2d2bca338361bba68b->enter($__internal_2246098de7b1898d92d3fdcf6a13ca76ae3671fdf21d5e2d2bca338361bba68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2246098de7b1898d92d3fdcf6a13ca76ae3671fdf21d5e2d2bca338361bba68b->leave($__internal_2246098de7b1898d92d3fdcf6a13ca76ae3671fdf21d5e2d2bca338361bba68b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
