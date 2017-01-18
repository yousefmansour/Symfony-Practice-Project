<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_e4db3607b79dee22abf5e42bc6ea2390f8c6d3414e19b29ad6ed46a3e6bb3674 extends Twig_Template
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
        $__internal_4713e2003faa5dbae0f0d9d0664a43405c109a3fd6dfe80b8b5832f8d93aeafc = $this->env->getExtension("native_profiler");
        $__internal_4713e2003faa5dbae0f0d9d0664a43405c109a3fd6dfe80b8b5832f8d93aeafc->enter($__internal_4713e2003faa5dbae0f0d9d0664a43405c109a3fd6dfe80b8b5832f8d93aeafc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_4713e2003faa5dbae0f0d9d0664a43405c109a3fd6dfe80b8b5832f8d93aeafc->leave($__internal_4713e2003faa5dbae0f0d9d0664a43405c109a3fd6dfe80b8b5832f8d93aeafc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
