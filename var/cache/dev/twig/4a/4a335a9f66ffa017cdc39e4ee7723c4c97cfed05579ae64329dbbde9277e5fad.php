<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_b0b39211645233a9f1e315ffc861e0c8571a2181713e1e7774532eedab3bb4b0 extends Twig_Template
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
        $__internal_1836d5944fd75285474216aa19fe14d54adb9f99e79d67def8932fc3266bffda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1836d5944fd75285474216aa19fe14d54adb9f99e79d67def8932fc3266bffda->enter($__internal_1836d5944fd75285474216aa19fe14d54adb9f99e79d67def8932fc3266bffda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_1836d5944fd75285474216aa19fe14d54adb9f99e79d67def8932fc3266bffda->leave($__internal_1836d5944fd75285474216aa19fe14d54adb9f99e79d67def8932fc3266bffda_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/submit_widget.html.php");
    }
}
