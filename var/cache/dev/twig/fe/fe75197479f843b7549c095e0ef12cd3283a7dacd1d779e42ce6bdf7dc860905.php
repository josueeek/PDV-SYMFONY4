<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_63ea7cd231fa9a85a916303811d45aadec5db506b2bb8e2f676a7d7b672f8fd6 extends Twig_Template
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
        $__internal_90c4bb43a0fe91405588da34dbb40442e7378f796215bf75dbe4de5974cacad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90c4bb43a0fe91405588da34dbb40442e7378f796215bf75dbe4de5974cacad5->enter($__internal_90c4bb43a0fe91405588da34dbb40442e7378f796215bf75dbe4de5974cacad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_90c4bb43a0fe91405588da34dbb40442e7378f796215bf75dbe4de5974cacad5->leave($__internal_90c4bb43a0fe91405588da34dbb40442e7378f796215bf75dbe4de5974cacad5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_widget.html.php");
    }
}
