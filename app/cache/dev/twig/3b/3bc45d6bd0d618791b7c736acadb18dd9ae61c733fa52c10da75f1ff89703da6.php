<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_e066ffe454daf6bd930fcb8dd38da2a88a4e2b2b99b949607429417bae1d7f2a extends Twig_Template
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
        $__internal_4205665a5f2cb1002be20e0143e11693381bb27cbf50f02778316b892a7c44fc = $this->env->getExtension("native_profiler");
        $__internal_4205665a5f2cb1002be20e0143e11693381bb27cbf50f02778316b892a7c44fc->enter($__internal_4205665a5f2cb1002be20e0143e11693381bb27cbf50f02778316b892a7c44fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_4205665a5f2cb1002be20e0143e11693381bb27cbf50f02778316b892a7c44fc->leave($__internal_4205665a5f2cb1002be20e0143e11693381bb27cbf50f02778316b892a7c44fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
