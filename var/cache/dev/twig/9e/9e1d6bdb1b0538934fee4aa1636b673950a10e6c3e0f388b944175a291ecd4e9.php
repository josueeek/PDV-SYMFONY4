<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_e0c268c4c90092639918fcef3b08ba08841363825a05f59b385a25c8b123025e extends Twig_Template
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
        $__internal_f0bfd33ed1444a1e8a8603e0f2d4d9bad33e17a00c183d6d2c1b72465605bcec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0bfd33ed1444a1e8a8603e0f2d4d9bad33e17a00c183d6d2c1b72465605bcec->enter($__internal_f0bfd33ed1444a1e8a8603e0f2d4d9bad33e17a00c183d6d2c1b72465605bcec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_f0bfd33ed1444a1e8a8603e0f2d4d9bad33e17a00c183d6d2c1b72465605bcec->leave($__internal_f0bfd33ed1444a1e8a8603e0f2d4d9bad33e17a00c183d6d2c1b72465605bcec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_end.html.php");
    }
}
