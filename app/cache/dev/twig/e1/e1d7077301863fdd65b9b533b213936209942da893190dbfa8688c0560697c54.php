<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_cc4be9dee54763c35e1bf0063aa993ab02b46b255a3c0cd2098c728ea4cd4501 extends Twig_Template
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
        $__internal_f28542797fe585a88bc33342dc7159aafd8f9999d5e1e3d2a31f683928d5e142 = $this->env->getExtension("native_profiler");
        $__internal_f28542797fe585a88bc33342dc7159aafd8f9999d5e1e3d2a31f683928d5e142->enter($__internal_f28542797fe585a88bc33342dc7159aafd8f9999d5e1e3d2a31f683928d5e142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f28542797fe585a88bc33342dc7159aafd8f9999d5e1e3d2a31f683928d5e142->leave($__internal_f28542797fe585a88bc33342dc7159aafd8f9999d5e1e3d2a31f683928d5e142_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
