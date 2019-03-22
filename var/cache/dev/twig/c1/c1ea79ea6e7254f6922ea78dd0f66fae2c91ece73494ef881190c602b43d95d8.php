<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1c06eee7925df61f86821c0ad2f4114a2e266c45084c6dae97d505e5cb0be075 extends Twig_Template
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
        $__internal_988f7f9c0ded651253a3605b0cef05fec244f65bfc560b3c76bafc257ad4ac98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988f7f9c0ded651253a3605b0cef05fec244f65bfc560b3c76bafc257ad4ac98->enter($__internal_988f7f9c0ded651253a3605b0cef05fec244f65bfc560b3c76bafc257ad4ac98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_988f7f9c0ded651253a3605b0cef05fec244f65bfc560b3c76bafc257ad4ac98->leave($__internal_988f7f9c0ded651253a3605b0cef05fec244f65bfc560b3c76bafc257ad4ac98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_row.html.php");
    }
}
