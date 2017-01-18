<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8cc521fb7b3cee27a729a5d6628ed816e5f626ba26ea97ee4c3f05f988899e78 extends Twig_Template
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
        $__internal_32d47ad275f11d1bb31e48a4a2c507778bd13505d98e9f87f14373862226fb01 = $this->env->getExtension("native_profiler");
        $__internal_32d47ad275f11d1bb31e48a4a2c507778bd13505d98e9f87f14373862226fb01->enter($__internal_32d47ad275f11d1bb31e48a4a2c507778bd13505d98e9f87f14373862226fb01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32d47ad275f11d1bb31e48a4a2c507778bd13505d98e9f87f14373862226fb01->leave($__internal_32d47ad275f11d1bb31e48a4a2c507778bd13505d98e9f87f14373862226fb01_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6a57969a443320c5be4e11958d54b91a0f879fb552a699486f2f920078f752b = $this->env->getExtension("native_profiler");
        $__internal_f6a57969a443320c5be4e11958d54b91a0f879fb552a699486f2f920078f752b->enter($__internal_f6a57969a443320c5be4e11958d54b91a0f879fb552a699486f2f920078f752b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f6a57969a443320c5be4e11958d54b91a0f879fb552a699486f2f920078f752b->leave($__internal_f6a57969a443320c5be4e11958d54b91a0f879fb552a699486f2f920078f752b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe716aa703a657b9115b14989e0ed0e646dd9c532e7c86defef51a3236422f3e = $this->env->getExtension("native_profiler");
        $__internal_fe716aa703a657b9115b14989e0ed0e646dd9c532e7c86defef51a3236422f3e->enter($__internal_fe716aa703a657b9115b14989e0ed0e646dd9c532e7c86defef51a3236422f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fe716aa703a657b9115b14989e0ed0e646dd9c532e7c86defef51a3236422f3e->leave($__internal_fe716aa703a657b9115b14989e0ed0e646dd9c532e7c86defef51a3236422f3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ca05476e550540820c04150bf0004d2823b59f4384c987af1a9fa8afa3daf2a = $this->env->getExtension("native_profiler");
        $__internal_9ca05476e550540820c04150bf0004d2823b59f4384c987af1a9fa8afa3daf2a->enter($__internal_9ca05476e550540820c04150bf0004d2823b59f4384c987af1a9fa8afa3daf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9ca05476e550540820c04150bf0004d2823b59f4384c987af1a9fa8afa3daf2a->leave($__internal_9ca05476e550540820c04150bf0004d2823b59f4384c987af1a9fa8afa3daf2a_prof);

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
