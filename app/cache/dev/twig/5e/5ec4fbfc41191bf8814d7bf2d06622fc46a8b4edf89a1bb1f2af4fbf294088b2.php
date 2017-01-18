<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_c87c69b59b1f99068e40490cb3fc5b72c074ba6c20f1eb01e6db832f2b247296 extends Twig_Template
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
        $__internal_71734dd65ab0084bbe8f8156979afa5642b8fe687d9d7bddca2f395b67706058 = $this->env->getExtension("native_profiler");
        $__internal_71734dd65ab0084bbe8f8156979afa5642b8fe687d9d7bddca2f395b67706058->enter($__internal_71734dd65ab0084bbe8f8156979afa5642b8fe687d9d7bddca2f395b67706058_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_71734dd65ab0084bbe8f8156979afa5642b8fe687d9d7bddca2f395b67706058->leave($__internal_71734dd65ab0084bbe8f8156979afa5642b8fe687d9d7bddca2f395b67706058_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
