<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_20fa9aa4ad9729fee364bc02d0660fa6222ae2118696e797d1ef3306a9a7015c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a97928ecba5ab9dca3434c30a4c22b86287ac759403252e900c0b6deef8fc7c = $this->env->getExtension("native_profiler");
        $__internal_1a97928ecba5ab9dca3434c30a4c22b86287ac759403252e900c0b6deef8fc7c->enter($__internal_1a97928ecba5ab9dca3434c30a4c22b86287ac759403252e900c0b6deef8fc7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_1a97928ecba5ab9dca3434c30a4c22b86287ac759403252e900c0b6deef8fc7c->leave($__internal_1a97928ecba5ab9dca3434c30a4c22b86287ac759403252e900c0b6deef8fc7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
