<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_d88d37026dbf75c1aba2c0e75315bddcce5f9a6478846713b2eea952fb35beef extends Twig_Template
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
        $__internal_daccfc2c42261f0c6f6b1013f5d92a93603373a7a3b9d6fdef805351ff045294 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daccfc2c42261f0c6f6b1013f5d92a93603373a7a3b9d6fdef805351ff045294->enter($__internal_daccfc2c42261f0c6f6b1013f5d92a93603373a7a3b9d6fdef805351ff045294_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_daccfc2c42261f0c6f6b1013f5d92a93603373a7a3b9d6fdef805351ff045294->leave($__internal_daccfc2c42261f0c6f6b1013f5d92a93603373a7a3b9d6fdef805351ff045294_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/percent_widget.html.php");
    }
}
