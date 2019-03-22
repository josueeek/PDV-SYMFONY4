<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_a752632077a90c8f5ba3b715d05f412c16f9d5a83d2e4c951d5c9ba20b147704 extends Twig_Template
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
        $__internal_565aa1f0ed3086df9fd532af769355458f672e027ee527147e6a62a21c8aaf1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565aa1f0ed3086df9fd532af769355458f672e027ee527147e6a62a21c8aaf1f->enter($__internal_565aa1f0ed3086df9fd532af769355458f672e027ee527147e6a62a21c8aaf1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_565aa1f0ed3086df9fd532af769355458f672e027ee527147e6a62a21c8aaf1f->leave($__internal_565aa1f0ed3086df9fd532af769355458f672e027ee527147e6a62a21c8aaf1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/reset_widget.html.php");
    }
}
