<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_07ae80dc40b1ed34a60965df3f12c63e885f630366bdc90a3bb18658f83fbafb extends Twig_Template
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
        $__internal_5ebe77edef32091a18783c29d45b5b85e3ccea1313414eddb281cf2a2a845236 = $this->env->getExtension("native_profiler");
        $__internal_5ebe77edef32091a18783c29d45b5b85e3ccea1313414eddb281cf2a2a845236->enter($__internal_5ebe77edef32091a18783c29d45b5b85e3ccea1313414eddb281cf2a2a845236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5ebe77edef32091a18783c29d45b5b85e3ccea1313414eddb281cf2a2a845236->leave($__internal_5ebe77edef32091a18783c29d45b5b85e3ccea1313414eddb281cf2a2a845236_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
