<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5b71f8f078a1182626e7fe571cf235157d4481977c845febd22a60b3abf668a0 extends Twig_Template
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
        $__internal_22543580e9256612cc78a6b2c7b66816de7e50afc786947de24de84b8e1a98c0 = $this->env->getExtension("native_profiler");
        $__internal_22543580e9256612cc78a6b2c7b66816de7e50afc786947de24de84b8e1a98c0->enter($__internal_22543580e9256612cc78a6b2c7b66816de7e50afc786947de24de84b8e1a98c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_22543580e9256612cc78a6b2c7b66816de7e50afc786947de24de84b8e1a98c0->leave($__internal_22543580e9256612cc78a6b2c7b66816de7e50afc786947de24de84b8e1a98c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
