<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6c028d214fce352c9bcf07d80d742b06a3779f243783c6cc6e039ad6e9ecac4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_394b1f856382bad2c0a18c4aa65e89360d5251993df99e75ec8912f55d626406 = $this->env->getExtension("native_profiler");
        $__internal_394b1f856382bad2c0a18c4aa65e89360d5251993df99e75ec8912f55d626406->enter($__internal_394b1f856382bad2c0a18c4aa65e89360d5251993df99e75ec8912f55d626406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_394b1f856382bad2c0a18c4aa65e89360d5251993df99e75ec8912f55d626406->leave($__internal_394b1f856382bad2c0a18c4aa65e89360d5251993df99e75ec8912f55d626406_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c9cfcd12659a82c4c8559c7c615fc6bd62b5b20670b8017217b89de1eed6c9b9 = $this->env->getExtension("native_profiler");
        $__internal_c9cfcd12659a82c4c8559c7c615fc6bd62b5b20670b8017217b89de1eed6c9b9->enter($__internal_c9cfcd12659a82c4c8559c7c615fc6bd62b5b20670b8017217b89de1eed6c9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c9cfcd12659a82c4c8559c7c615fc6bd62b5b20670b8017217b89de1eed6c9b9->leave($__internal_c9cfcd12659a82c4c8559c7c615fc6bd62b5b20670b8017217b89de1eed6c9b9_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
