<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_b2bb5e6e64a4cb485618cf33c565a94fa5e82bb4afbac9f2d28b6974ca5e8bef extends Twig_Template
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
        $__internal_e67586b5d52da5ae568c96f5b7f0590d7c3f5f82933d0a98c7648ebbdf433bf1 = $this->env->getExtension("native_profiler");
        $__internal_e67586b5d52da5ae568c96f5b7f0590d7c3f5f82933d0a98c7648ebbdf433bf1->enter($__internal_e67586b5d52da5ae568c96f5b7f0590d7c3f5f82933d0a98c7648ebbdf433bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e67586b5d52da5ae568c96f5b7f0590d7c3f5f82933d0a98c7648ebbdf433bf1->leave($__internal_e67586b5d52da5ae568c96f5b7f0590d7c3f5f82933d0a98c7648ebbdf433bf1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
