<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_85243e26917390ef9899c60fd254096f3c91155f78ed8eebed4d93bfdeb0e027 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_64c02d6a23648a750b38c6a61c1e06987d2c3df542737afae0daf38e3b82c8b6 = $this->env->getExtension("native_profiler");
        $__internal_64c02d6a23648a750b38c6a61c1e06987d2c3df542737afae0daf38e3b82c8b6->enter($__internal_64c02d6a23648a750b38c6a61c1e06987d2c3df542737afae0daf38e3b82c8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64c02d6a23648a750b38c6a61c1e06987d2c3df542737afae0daf38e3b82c8b6->leave($__internal_64c02d6a23648a750b38c6a61c1e06987d2c3df542737afae0daf38e3b82c8b6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3837ec5396267cebfea8b73737ea338bf861177d203447ed2cc312121c5f9be5 = $this->env->getExtension("native_profiler");
        $__internal_3837ec5396267cebfea8b73737ea338bf861177d203447ed2cc312121c5f9be5->enter($__internal_3837ec5396267cebfea8b73737ea338bf861177d203447ed2cc312121c5f9be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3837ec5396267cebfea8b73737ea338bf861177d203447ed2cc312121c5f9be5->leave($__internal_3837ec5396267cebfea8b73737ea338bf861177d203447ed2cc312121c5f9be5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3070a6d7efd0685926c0924c3642cb4ff2a62982c3ca3c42cdd88fd7919c6cfa = $this->env->getExtension("native_profiler");
        $__internal_3070a6d7efd0685926c0924c3642cb4ff2a62982c3ca3c42cdd88fd7919c6cfa->enter($__internal_3070a6d7efd0685926c0924c3642cb4ff2a62982c3ca3c42cdd88fd7919c6cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3070a6d7efd0685926c0924c3642cb4ff2a62982c3ca3c42cdd88fd7919c6cfa->leave($__internal_3070a6d7efd0685926c0924c3642cb4ff2a62982c3ca3c42cdd88fd7919c6cfa_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fac5386308e5283a72d047bd436a96bef1856f7ada7da2cc83922bb6fbfaed7 = $this->env->getExtension("native_profiler");
        $__internal_6fac5386308e5283a72d047bd436a96bef1856f7ada7da2cc83922bb6fbfaed7->enter($__internal_6fac5386308e5283a72d047bd436a96bef1856f7ada7da2cc83922bb6fbfaed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6fac5386308e5283a72d047bd436a96bef1856f7ada7da2cc83922bb6fbfaed7->leave($__internal_6fac5386308e5283a72d047bd436a96bef1856f7ada7da2cc83922bb6fbfaed7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
