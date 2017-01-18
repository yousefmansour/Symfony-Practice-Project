<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_736b4873ce5679be301d779b3da043faf53411ccba3e1ff9258a4e102f37b1d4 extends Twig_Template
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
        $__internal_08ad62dc9f249b05e3e628def3a5ec76cfff4bb61d2c8c9adc310c0657324f39 = $this->env->getExtension("native_profiler");
        $__internal_08ad62dc9f249b05e3e628def3a5ec76cfff4bb61d2c8c9adc310c0657324f39->enter($__internal_08ad62dc9f249b05e3e628def3a5ec76cfff4bb61d2c8c9adc310c0657324f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_08ad62dc9f249b05e3e628def3a5ec76cfff4bb61d2c8c9adc310c0657324f39->leave($__internal_08ad62dc9f249b05e3e628def3a5ec76cfff4bb61d2c8c9adc310c0657324f39_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
