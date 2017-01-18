<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5ba0893121622fb308e26fc8ca5b84fa29ea75de24fc96eed73821ff8903eb22 extends Twig_Template
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
        $__internal_04a40c34cb1c5e1c9ecaf2310905bb42ecb6a23109c70c9c2b452d0f3670955b = $this->env->getExtension("native_profiler");
        $__internal_04a40c34cb1c5e1c9ecaf2310905bb42ecb6a23109c70c9c2b452d0f3670955b->enter($__internal_04a40c34cb1c5e1c9ecaf2310905bb42ecb6a23109c70c9c2b452d0f3670955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_04a40c34cb1c5e1c9ecaf2310905bb42ecb6a23109c70c9c2b452d0f3670955b->leave($__internal_04a40c34cb1c5e1c9ecaf2310905bb42ecb6a23109c70c9c2b452d0f3670955b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
