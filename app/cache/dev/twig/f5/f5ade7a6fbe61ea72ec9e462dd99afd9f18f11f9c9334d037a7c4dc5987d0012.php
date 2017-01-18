<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0579c21d9f89631d0a8ff1d7018d487220f0c7a3eecc0d12026ec63f4c247f9 extends Twig_Template
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
        $__internal_308c1b7e8e21af70819d61d1caf94caee315e2f4cebeed53178fbea2a3d39152 = $this->env->getExtension("native_profiler");
        $__internal_308c1b7e8e21af70819d61d1caf94caee315e2f4cebeed53178fbea2a3d39152->enter($__internal_308c1b7e8e21af70819d61d1caf94caee315e2f4cebeed53178fbea2a3d39152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_308c1b7e8e21af70819d61d1caf94caee315e2f4cebeed53178fbea2a3d39152->leave($__internal_308c1b7e8e21af70819d61d1caf94caee315e2f4cebeed53178fbea2a3d39152_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
