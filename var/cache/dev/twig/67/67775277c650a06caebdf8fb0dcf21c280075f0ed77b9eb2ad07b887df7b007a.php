<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_77b8831478bc90ae807700ce5dc2a2337a1e2b0ca1835f89f97f0bd16e64062a extends Twig_Template
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
        $__internal_e71cef41721fc1a686c3275d659046337af74fba60076dd47182b7b6fa731616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e71cef41721fc1a686c3275d659046337af74fba60076dd47182b7b6fa731616->enter($__internal_e71cef41721fc1a686c3275d659046337af74fba60076dd47182b7b6fa731616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_e71cef41721fc1a686c3275d659046337af74fba60076dd47182b7b6fa731616->leave($__internal_e71cef41721fc1a686c3275d659046337af74fba60076dd47182b7b6fa731616_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/button_row.html.php");
    }
}
