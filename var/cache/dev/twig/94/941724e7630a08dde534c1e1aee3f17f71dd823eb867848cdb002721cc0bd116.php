<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0a9a20d26670f26faa2a5f1856f875f99d3802333e2ad5fef3d09061c6fbcae1 extends Twig_Template
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
        $__internal_45f1e606eb58be48c1c1d822872c8771dd2ece40b4a4fbf135eb3dd79f09d883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f1e606eb58be48c1c1d822872c8771dd2ece40b4a4fbf135eb3dd79f09d883->enter($__internal_45f1e606eb58be48c1c1d822872c8771dd2ece40b4a4fbf135eb3dd79f09d883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_45f1e606eb58be48c1c1d822872c8771dd2ece40b4a4fbf135eb3dd79f09d883->leave($__internal_45f1e606eb58be48c1c1d822872c8771dd2ece40b4a4fbf135eb3dd79f09d883_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/container_attributes.html.php");
    }
}
