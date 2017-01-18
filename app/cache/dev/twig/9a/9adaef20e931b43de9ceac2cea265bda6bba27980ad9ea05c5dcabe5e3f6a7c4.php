<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_326413ab1587195f283240b8c2d0f53ab1d80e685c93d2e0cafb9606e26c4c91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3844bb6fb0d5e1c68b09075fa7c60acceb882e785100008aa1a3d759aa7bbe5d = $this->env->getExtension("native_profiler");
        $__internal_3844bb6fb0d5e1c68b09075fa7c60acceb882e785100008aa1a3d759aa7bbe5d->enter($__internal_3844bb6fb0d5e1c68b09075fa7c60acceb882e785100008aa1a3d759aa7bbe5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3844bb6fb0d5e1c68b09075fa7c60acceb882e785100008aa1a3d759aa7bbe5d->leave($__internal_3844bb6fb0d5e1c68b09075fa7c60acceb882e785100008aa1a3d759aa7bbe5d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f34483f66b716c7c5cabb324d8c9c94875e3a7033f365f3b4bd2b699db41d47b = $this->env->getExtension("native_profiler");
        $__internal_f34483f66b716c7c5cabb324d8c9c94875e3a7033f365f3b4bd2b699db41d47b->enter($__internal_f34483f66b716c7c5cabb324d8c9c94875e3a7033f365f3b4bd2b699db41d47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f34483f66b716c7c5cabb324d8c9c94875e3a7033f365f3b4bd2b699db41d47b->leave($__internal_f34483f66b716c7c5cabb324d8c9c94875e3a7033f365f3b4bd2b699db41d47b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e3314c689ff7d7845110a1bd35ee1239e548fd0ff831c043bd815147587be42 = $this->env->getExtension("native_profiler");
        $__internal_0e3314c689ff7d7845110a1bd35ee1239e548fd0ff831c043bd815147587be42->enter($__internal_0e3314c689ff7d7845110a1bd35ee1239e548fd0ff831c043bd815147587be42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e3314c689ff7d7845110a1bd35ee1239e548fd0ff831c043bd815147587be42->leave($__internal_0e3314c689ff7d7845110a1bd35ee1239e548fd0ff831c043bd815147587be42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22e59f7445372ed887a7510fe2e2146aa90715f20361b1db0e6c1738669a5dc4 = $this->env->getExtension("native_profiler");
        $__internal_22e59f7445372ed887a7510fe2e2146aa90715f20361b1db0e6c1738669a5dc4->enter($__internal_22e59f7445372ed887a7510fe2e2146aa90715f20361b1db0e6c1738669a5dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22e59f7445372ed887a7510fe2e2146aa90715f20361b1db0e6c1738669a5dc4->leave($__internal_22e59f7445372ed887a7510fe2e2146aa90715f20361b1db0e6c1738669a5dc4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
