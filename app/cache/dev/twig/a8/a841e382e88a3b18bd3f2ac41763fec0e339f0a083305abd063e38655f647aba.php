<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_82fd3974e3f1c965d8043d9cf7da45b0c035cb9a9ba06c1995aec41ea21ebb73 extends Twig_Template
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
        $__internal_b376486f0c8d0ee5d5ce172cc48ba90a5687456c56fc833ff548bc5366b8a8a3 = $this->env->getExtension("native_profiler");
        $__internal_b376486f0c8d0ee5d5ce172cc48ba90a5687456c56fc833ff548bc5366b8a8a3->enter($__internal_b376486f0c8d0ee5d5ce172cc48ba90a5687456c56fc833ff548bc5366b8a8a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b376486f0c8d0ee5d5ce172cc48ba90a5687456c56fc833ff548bc5366b8a8a3->leave($__internal_b376486f0c8d0ee5d5ce172cc48ba90a5687456c56fc833ff548bc5366b8a8a3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
