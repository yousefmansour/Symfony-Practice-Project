<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_490aeada7e9b2966f2f373d4b7d31fddc58a486aedd2139b515db41cf6727de1 extends Twig_Template
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
        $__internal_e062ff15668635e990519c8dacf96848e6dacf332aaf80cf180370930f936e41 = $this->env->getExtension("native_profiler");
        $__internal_e062ff15668635e990519c8dacf96848e6dacf332aaf80cf180370930f936e41->enter($__internal_e062ff15668635e990519c8dacf96848e6dacf332aaf80cf180370930f936e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e062ff15668635e990519c8dacf96848e6dacf332aaf80cf180370930f936e41->leave($__internal_e062ff15668635e990519c8dacf96848e6dacf332aaf80cf180370930f936e41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
