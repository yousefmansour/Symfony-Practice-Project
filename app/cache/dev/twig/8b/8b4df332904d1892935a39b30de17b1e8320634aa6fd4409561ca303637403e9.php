<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_4dc7161235b11638da7284966102b81e617ec248c677ce4dd5e04f60082edfd3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_004969f0086dd74eb1a5daec6ea9a7eb3f3b6929d1b43c520bddd3b490cbc1da = $this->env->getExtension("native_profiler");
        $__internal_004969f0086dd74eb1a5daec6ea9a7eb3f3b6929d1b43c520bddd3b490cbc1da->enter($__internal_004969f0086dd74eb1a5daec6ea9a7eb3f3b6929d1b43c520bddd3b490cbc1da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_004969f0086dd74eb1a5daec6ea9a7eb3f3b6929d1b43c520bddd3b490cbc1da->leave($__internal_004969f0086dd74eb1a5daec6ea9a7eb3f3b6929d1b43c520bddd3b490cbc1da_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_eb5a8ed5bf584e06c104042332c78fadaf36848a42adaa45e6bf6bd97452eeed = $this->env->getExtension("native_profiler");
        $__internal_eb5a8ed5bf584e06c104042332c78fadaf36848a42adaa45e6bf6bd97452eeed->enter($__internal_eb5a8ed5bf584e06c104042332c78fadaf36848a42adaa45e6bf6bd97452eeed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_eb5a8ed5bf584e06c104042332c78fadaf36848a42adaa45e6bf6bd97452eeed->leave($__internal_eb5a8ed5bf584e06c104042332c78fadaf36848a42adaa45e6bf6bd97452eeed_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e619386b1b2fc7e2691227133d41b74b3e0dea2eb9889eb8213fd6670017eb13 = $this->env->getExtension("native_profiler");
        $__internal_e619386b1b2fc7e2691227133d41b74b3e0dea2eb9889eb8213fd6670017eb13->enter($__internal_e619386b1b2fc7e2691227133d41b74b3e0dea2eb9889eb8213fd6670017eb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e619386b1b2fc7e2691227133d41b74b3e0dea2eb9889eb8213fd6670017eb13->leave($__internal_e619386b1b2fc7e2691227133d41b74b3e0dea2eb9889eb8213fd6670017eb13_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_84f3ae3dcf4d6e6fcc27547c3208be45c354bdde4d091aa640f7f51283b761fd = $this->env->getExtension("native_profiler");
        $__internal_84f3ae3dcf4d6e6fcc27547c3208be45c354bdde4d091aa640f7f51283b761fd->enter($__internal_84f3ae3dcf4d6e6fcc27547c3208be45c354bdde4d091aa640f7f51283b761fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_84f3ae3dcf4d6e6fcc27547c3208be45c354bdde4d091aa640f7f51283b761fd->leave($__internal_84f3ae3dcf4d6e6fcc27547c3208be45c354bdde4d091aa640f7f51283b761fd_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
