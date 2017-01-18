<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_b2dce286c78ecaaca184e1345545c6cad06124311d1f251519f1ad3e40c0324a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_cb3fabfa2e3cef2877c28611ccc571e57f51f8a68b8f35936f11aa384a7bca21 = $this->env->getExtension("native_profiler");
        $__internal_cb3fabfa2e3cef2877c28611ccc571e57f51f8a68b8f35936f11aa384a7bca21->enter($__internal_cb3fabfa2e3cef2877c28611ccc571e57f51f8a68b8f35936f11aa384a7bca21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3fabfa2e3cef2877c28611ccc571e57f51f8a68b8f35936f11aa384a7bca21->leave($__internal_cb3fabfa2e3cef2877c28611ccc571e57f51f8a68b8f35936f11aa384a7bca21_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e69b50da56450eed6a02d7c2c4b447d01104f538af534dfcc273a09a2e6b0c06 = $this->env->getExtension("native_profiler");
        $__internal_e69b50da56450eed6a02d7c2c4b447d01104f538af534dfcc273a09a2e6b0c06->enter($__internal_e69b50da56450eed6a02d7c2c4b447d01104f538af534dfcc273a09a2e6b0c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e69b50da56450eed6a02d7c2c4b447d01104f538af534dfcc273a09a2e6b0c06->leave($__internal_e69b50da56450eed6a02d7c2c4b447d01104f538af534dfcc273a09a2e6b0c06_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe5a617b56aeaf0d149e87f397e9df92e6e776e46371f1437a415b369ef6e5a3 = $this->env->getExtension("native_profiler");
        $__internal_fe5a617b56aeaf0d149e87f397e9df92e6e776e46371f1437a415b369ef6e5a3->enter($__internal_fe5a617b56aeaf0d149e87f397e9df92e6e776e46371f1437a415b369ef6e5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fe5a617b56aeaf0d149e87f397e9df92e6e776e46371f1437a415b369ef6e5a3->leave($__internal_fe5a617b56aeaf0d149e87f397e9df92e6e776e46371f1437a415b369ef6e5a3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
