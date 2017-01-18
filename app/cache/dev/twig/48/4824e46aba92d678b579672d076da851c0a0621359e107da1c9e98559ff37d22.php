<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_a734ecff560eb231d5c1ad108332c53c526474b279f08275741d126125254dfe extends Twig_Template
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
        $__internal_62fa2a77af947eb88a0f87bb592833544df72cf00df496730153559590c3b99c = $this->env->getExtension("native_profiler");
        $__internal_62fa2a77af947eb88a0f87bb592833544df72cf00df496730153559590c3b99c->enter($__internal_62fa2a77af947eb88a0f87bb592833544df72cf00df496730153559590c3b99c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_62fa2a77af947eb88a0f87bb592833544df72cf00df496730153559590c3b99c->leave($__internal_62fa2a77af947eb88a0f87bb592833544df72cf00df496730153559590c3b99c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
