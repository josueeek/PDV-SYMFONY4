<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_c521e82a096f39cd2e006846b54ebc9b14c47e4e6e3cb1d13941b2355d18911c extends Twig_Template
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
        $__internal_c5708a504e124d3a1fabcca6fa4f2437db7a040c4fdcb6e2ebaa2e1e09357742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5708a504e124d3a1fabcca6fa4f2437db7a040c4fdcb6e2ebaa2e1e09357742->enter($__internal_c5708a504e124d3a1fabcca6fa4f2437db7a040c4fdcb6e2ebaa2e1e09357742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c5708a504e124d3a1fabcca6fa4f2437db7a040c4fdcb6e2ebaa2e1e09357742->leave($__internal_c5708a504e124d3a1fabcca6fa4f2437db7a040c4fdcb6e2ebaa2e1e09357742_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/radio_widget.html.php");
    }
}
