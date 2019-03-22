<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c21d57652cb0583b6f3452b0ac8310ac0cc815bb93c8e3458a0f5a5d9cf49348 extends Twig_Template
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
        $__internal_7f90c201b65fc0f45bb2d32b870770fa7cb05c94998c02c6825f2b134a99668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f90c201b65fc0f45bb2d32b870770fa7cb05c94998c02c6825f2b134a99668d->enter($__internal_7f90c201b65fc0f45bb2d32b870770fa7cb05c94998c02c6825f2b134a99668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7f90c201b65fc0f45bb2d32b870770fa7cb05c94998c02c6825f2b134a99668d->leave($__internal_7f90c201b65fc0f45bb2d32b870770fa7cb05c94998c02c6825f2b134a99668d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
