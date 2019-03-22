<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_36a08b5de9f40c8cfb549ebf79286f158601f17895603f95c2fefe3734af7500 extends Twig_Template
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
        $__internal_9bd0978cd98ca84a5944e400cdc2d0623465949d45d812949e2b39515a80a17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bd0978cd98ca84a5944e400cdc2d0623465949d45d812949e2b39515a80a17d->enter($__internal_9bd0978cd98ca84a5944e400cdc2d0623465949d45d812949e2b39515a80a17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_9bd0978cd98ca84a5944e400cdc2d0623465949d45d812949e2b39515a80a17d->leave($__internal_9bd0978cd98ca84a5944e400cdc2d0623465949d45d812949e2b39515a80a17d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/repeated_row.html.php");
    }
}
