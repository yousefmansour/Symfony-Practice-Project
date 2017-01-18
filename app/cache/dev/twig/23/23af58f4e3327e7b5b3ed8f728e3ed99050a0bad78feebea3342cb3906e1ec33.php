<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d4f1ff42c90e5142f5026921f7e1266d6534b15bbcd5a184ca53bdb87d8d852f extends Twig_Template
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
        $__internal_663f9b89487e92ddaf054e5c6936e88e918a02729062ac15ad78a5703c6e7faa = $this->env->getExtension("native_profiler");
        $__internal_663f9b89487e92ddaf054e5c6936e88e918a02729062ac15ad78a5703c6e7faa->enter($__internal_663f9b89487e92ddaf054e5c6936e88e918a02729062ac15ad78a5703c6e7faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_663f9b89487e92ddaf054e5c6936e88e918a02729062ac15ad78a5703c6e7faa->leave($__internal_663f9b89487e92ddaf054e5c6936e88e918a02729062ac15ad78a5703c6e7faa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
