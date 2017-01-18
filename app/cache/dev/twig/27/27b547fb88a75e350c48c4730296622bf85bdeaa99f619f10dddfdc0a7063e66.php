<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9a0c7c478fdeca82ae594e4755d1eb73d898b0014a27d56f64044fa3f5099a40 extends Twig_Template
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
        $__internal_11d0683b2eee87f3447fe9c0c460038f57fd9644069788c984b2fe7da1cc4ff2 = $this->env->getExtension("native_profiler");
        $__internal_11d0683b2eee87f3447fe9c0c460038f57fd9644069788c984b2fe7da1cc4ff2->enter($__internal_11d0683b2eee87f3447fe9c0c460038f57fd9644069788c984b2fe7da1cc4ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_11d0683b2eee87f3447fe9c0c460038f57fd9644069788c984b2fe7da1cc4ff2->leave($__internal_11d0683b2eee87f3447fe9c0c460038f57fd9644069788c984b2fe7da1cc4ff2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b7296d84ed1b528a61013f12987591ae205d4012feac0ccfd11a619c5ffc659 = $this->env->getExtension("native_profiler");
        $__internal_8b7296d84ed1b528a61013f12987591ae205d4012feac0ccfd11a619c5ffc659->enter($__internal_8b7296d84ed1b528a61013f12987591ae205d4012feac0ccfd11a619c5ffc659_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8b7296d84ed1b528a61013f12987591ae205d4012feac0ccfd11a619c5ffc659->leave($__internal_8b7296d84ed1b528a61013f12987591ae205d4012feac0ccfd11a619c5ffc659_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a80f6e564f7b133fb63464804ece792ec3e4f5292bc3852db434bd57c6de317 = $this->env->getExtension("native_profiler");
        $__internal_6a80f6e564f7b133fb63464804ece792ec3e4f5292bc3852db434bd57c6de317->enter($__internal_6a80f6e564f7b133fb63464804ece792ec3e4f5292bc3852db434bd57c6de317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a80f6e564f7b133fb63464804ece792ec3e4f5292bc3852db434bd57c6de317->leave($__internal_6a80f6e564f7b133fb63464804ece792ec3e4f5292bc3852db434bd57c6de317_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cdcc432540bd9e7ec5e31683356a3824ad32389fc31a3c08b097e2a4ac0c4ee = $this->env->getExtension("native_profiler");
        $__internal_4cdcc432540bd9e7ec5e31683356a3824ad32389fc31a3c08b097e2a4ac0c4ee->enter($__internal_4cdcc432540bd9e7ec5e31683356a3824ad32389fc31a3c08b097e2a4ac0c4ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4cdcc432540bd9e7ec5e31683356a3824ad32389fc31a3c08b097e2a4ac0c4ee->leave($__internal_4cdcc432540bd9e7ec5e31683356a3824ad32389fc31a3c08b097e2a4ac0c4ee_prof);

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
