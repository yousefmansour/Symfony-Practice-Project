<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_52e16e64b4bc714affb71def90b7f326ad82aa22965a37ac3ef182a4cf8ac8ec extends Twig_Template
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
        $__internal_bde7e07cddc97e8880fd71af6f65191094c24a0db92e3d00964633952efc454d = $this->env->getExtension("native_profiler");
        $__internal_bde7e07cddc97e8880fd71af6f65191094c24a0db92e3d00964633952efc454d->enter($__internal_bde7e07cddc97e8880fd71af6f65191094c24a0db92e3d00964633952efc454d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_bde7e07cddc97e8880fd71af6f65191094c24a0db92e3d00964633952efc454d->leave($__internal_bde7e07cddc97e8880fd71af6f65191094c24a0db92e3d00964633952efc454d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
