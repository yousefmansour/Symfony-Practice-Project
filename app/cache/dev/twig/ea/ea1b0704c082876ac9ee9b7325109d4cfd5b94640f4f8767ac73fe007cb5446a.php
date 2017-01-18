<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_0e5c2cb05087d51e9793a6a9f647e59b2f095b758f7ecca5340dddc4d290c49e extends Twig_Template
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
        $__internal_ce1bab329dc6cb5f6be8fcbc2d9beb7a015a49a6da8a1ed82d8148cc09cb0735 = $this->env->getExtension("native_profiler");
        $__internal_ce1bab329dc6cb5f6be8fcbc2d9beb7a015a49a6da8a1ed82d8148cc09cb0735->enter($__internal_ce1bab329dc6cb5f6be8fcbc2d9beb7a015a49a6da8a1ed82d8148cc09cb0735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_ce1bab329dc6cb5f6be8fcbc2d9beb7a015a49a6da8a1ed82d8148cc09cb0735->leave($__internal_ce1bab329dc6cb5f6be8fcbc2d9beb7a015a49a6da8a1ed82d8148cc09cb0735_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
