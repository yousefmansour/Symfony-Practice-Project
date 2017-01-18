<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a6775c60aa9609ed5c4f7df666a5e168b76058023e4167c1d93efe6cbaef411c extends Twig_Template
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
        $__internal_8688a84857ead3fa4c13310315bbd2b21999d6dcb3de2cc635037a8f7f503577 = $this->env->getExtension("native_profiler");
        $__internal_8688a84857ead3fa4c13310315bbd2b21999d6dcb3de2cc635037a8f7f503577->enter($__internal_8688a84857ead3fa4c13310315bbd2b21999d6dcb3de2cc635037a8f7f503577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8688a84857ead3fa4c13310315bbd2b21999d6dcb3de2cc635037a8f7f503577->leave($__internal_8688a84857ead3fa4c13310315bbd2b21999d6dcb3de2cc635037a8f7f503577_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
