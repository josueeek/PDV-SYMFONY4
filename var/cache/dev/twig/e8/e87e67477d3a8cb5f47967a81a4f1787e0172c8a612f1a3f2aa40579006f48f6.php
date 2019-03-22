<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_378b2edce08ec032ac1898611b747a58fb0b565ba44c1b067e93d7c7c31f57ce extends Twig_Template
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
        $__internal_7ee27efe573cfd15d2163d4c255acedfa0ab2da103a9b27d3910a540caf8e743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ee27efe573cfd15d2163d4c255acedfa0ab2da103a9b27d3910a540caf8e743->enter($__internal_7ee27efe573cfd15d2163d4c255acedfa0ab2da103a9b27d3910a540caf8e743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_7ee27efe573cfd15d2163d4c255acedfa0ab2da103a9b27d3910a540caf8e743->leave($__internal_7ee27efe573cfd15d2163d4c255acedfa0ab2da103a9b27d3910a540caf8e743_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/choice_widget.html.php");
    }
}
