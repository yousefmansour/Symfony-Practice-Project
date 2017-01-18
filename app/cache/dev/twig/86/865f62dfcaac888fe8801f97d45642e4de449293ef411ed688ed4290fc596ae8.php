<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_aa77b11f525b6962218e6642e42cc89057e7726733e1235207f1b3830fdc434e extends Twig_Template
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
        $__internal_39e8a31101984a1cec6d40f2ac095ca77648376cfa07f47d9a614e0c7ca929ab = $this->env->getExtension("native_profiler");
        $__internal_39e8a31101984a1cec6d40f2ac095ca77648376cfa07f47d9a614e0c7ca929ab->enter($__internal_39e8a31101984a1cec6d40f2ac095ca77648376cfa07f47d9a614e0c7ca929ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_39e8a31101984a1cec6d40f2ac095ca77648376cfa07f47d9a614e0c7ca929ab->leave($__internal_39e8a31101984a1cec6d40f2ac095ca77648376cfa07f47d9a614e0c7ca929ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
