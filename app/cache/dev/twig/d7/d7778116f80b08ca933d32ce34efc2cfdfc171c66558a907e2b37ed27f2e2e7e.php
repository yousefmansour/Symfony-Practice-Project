<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f5c72bf92d941cd9ff0fe947548e89718e4a9b132d7ba264d714ecddb42b5da1 extends Twig_Template
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
        $__internal_a5f4b92fb7532eeb4f518694e50454214f4183e895dc9d59b50e808173bfc8de = $this->env->getExtension("native_profiler");
        $__internal_a5f4b92fb7532eeb4f518694e50454214f4183e895dc9d59b50e808173bfc8de->enter($__internal_a5f4b92fb7532eeb4f518694e50454214f4183e895dc9d59b50e808173bfc8de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_a5f4b92fb7532eeb4f518694e50454214f4183e895dc9d59b50e808173bfc8de->leave($__internal_a5f4b92fb7532eeb4f518694e50454214f4183e895dc9d59b50e808173bfc8de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
