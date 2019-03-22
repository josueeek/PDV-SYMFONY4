<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_1d1c13747018cf8d93c3257578ac77f225b199c690cbcad96e4ba9d93cea126f extends Twig_Template
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
        $__internal_d7b4bd0e754635974f57dd537eaf8236e86547ff5583d17f2d1aa2ff5db142a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7b4bd0e754635974f57dd537eaf8236e86547ff5583d17f2d1aa2ff5db142a7->enter($__internal_d7b4bd0e754635974f57dd537eaf8236e86547ff5583d17f2d1aa2ff5db142a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d7b4bd0e754635974f57dd537eaf8236e86547ff5583d17f2d1aa2ff5db142a7->leave($__internal_d7b4bd0e754635974f57dd537eaf8236e86547ff5583d17f2d1aa2ff5db142a7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/number_widget.html.php");
    }
}
