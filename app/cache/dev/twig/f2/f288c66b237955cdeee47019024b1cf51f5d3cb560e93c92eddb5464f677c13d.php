<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_e71e48319e4e97d69a0ebba018d60de62959cc8888311faf915bf9d91d3459ef extends Twig_Template
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
        $__internal_4b6e85794fe7ea0809d0e45dc330c78d5993d483982ec93f47018c30c353847e = $this->env->getExtension("native_profiler");
        $__internal_4b6e85794fe7ea0809d0e45dc330c78d5993d483982ec93f47018c30c353847e->enter($__internal_4b6e85794fe7ea0809d0e45dc330c78d5993d483982ec93f47018c30c353847e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4b6e85794fe7ea0809d0e45dc330c78d5993d483982ec93f47018c30c353847e->leave($__internal_4b6e85794fe7ea0809d0e45dc330c78d5993d483982ec93f47018c30c353847e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
