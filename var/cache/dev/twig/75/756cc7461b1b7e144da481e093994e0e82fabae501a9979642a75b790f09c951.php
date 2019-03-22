<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_197ade38fe51b03dceb3e03cadb9e54007ed6d97546b9ef3d964043d492b8a28 extends Twig_Template
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
        $__internal_06d6e42a11a2633c0453759d10c3e462fb5514f525b92e09b830f59e9d51867b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06d6e42a11a2633c0453759d10c3e462fb5514f525b92e09b830f59e9d51867b->enter($__internal_06d6e42a11a2633c0453759d10c3e462fb5514f525b92e09b830f59e9d51867b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_06d6e42a11a2633c0453759d10c3e462fb5514f525b92e09b830f59e9d51867b->leave($__internal_06d6e42a11a2633c0453759d10c3e462fb5514f525b92e09b830f59e9d51867b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}
