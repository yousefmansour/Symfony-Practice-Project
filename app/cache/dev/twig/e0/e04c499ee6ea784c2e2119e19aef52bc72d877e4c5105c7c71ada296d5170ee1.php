<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_10003fa53af76caecdfdf13433619a46f94e368298c498bb6594f3c687f36a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_49874198d47e31c4f66db01279f95b07bd4736736dcf1ad4a0abadd46129fef8 = $this->env->getExtension("native_profiler");
        $__internal_49874198d47e31c4f66db01279f95b07bd4736736dcf1ad4a0abadd46129fef8->enter($__internal_49874198d47e31c4f66db01279f95b07bd4736736dcf1ad4a0abadd46129fef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49874198d47e31c4f66db01279f95b07bd4736736dcf1ad4a0abadd46129fef8->leave($__internal_49874198d47e31c4f66db01279f95b07bd4736736dcf1ad4a0abadd46129fef8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f227cae01421b31aa8a1ea0e1d986816c789b44a0a34994bffcca310704594d2 = $this->env->getExtension("native_profiler");
        $__internal_f227cae01421b31aa8a1ea0e1d986816c789b44a0a34994bffcca310704594d2->enter($__internal_f227cae01421b31aa8a1ea0e1d986816c789b44a0a34994bffcca310704594d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f227cae01421b31aa8a1ea0e1d986816c789b44a0a34994bffcca310704594d2->leave($__internal_f227cae01421b31aa8a1ea0e1d986816c789b44a0a34994bffcca310704594d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7ec5eb8989bb098a46d0a3a3afa9434583aec2d888a92cf1cfeec064b352a9e = $this->env->getExtension("native_profiler");
        $__internal_c7ec5eb8989bb098a46d0a3a3afa9434583aec2d888a92cf1cfeec064b352a9e->enter($__internal_c7ec5eb8989bb098a46d0a3a3afa9434583aec2d888a92cf1cfeec064b352a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c7ec5eb8989bb098a46d0a3a3afa9434583aec2d888a92cf1cfeec064b352a9e->leave($__internal_c7ec5eb8989bb098a46d0a3a3afa9434583aec2d888a92cf1cfeec064b352a9e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
