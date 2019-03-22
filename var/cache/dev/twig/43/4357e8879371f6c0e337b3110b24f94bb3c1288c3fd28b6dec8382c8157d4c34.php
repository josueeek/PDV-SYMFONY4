<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_e09c93c44e7bb450193ef8b96ee2a929c8f4170258f0d5286a14ddbf38944efd extends Twig_Template
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
        $__internal_524a082c9755ae9964cd8c3e7f9169cb707960e5068821dbe38c3c8f79aca092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_524a082c9755ae9964cd8c3e7f9169cb707960e5068821dbe38c3c8f79aca092->enter($__internal_524a082c9755ae9964cd8c3e7f9169cb707960e5068821dbe38c3c8f79aca092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_524a082c9755ae9964cd8c3e7f9169cb707960e5068821dbe38c3c8f79aca092->leave($__internal_524a082c9755ae9964cd8c3e7f9169cb707960e5068821dbe38c3c8f79aca092_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
