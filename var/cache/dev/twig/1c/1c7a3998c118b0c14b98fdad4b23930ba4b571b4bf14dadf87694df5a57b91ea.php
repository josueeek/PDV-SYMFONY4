<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e6f446420488d9e0dbfbbe5844d40315fbdd62262e9d714ae75f9600d57a4110 extends Twig_Template
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
        $__internal_221958620470738e8470871ebd8ff6efd57eed02250e720c83bd8425630c084a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_221958620470738e8470871ebd8ff6efd57eed02250e720c83bd8425630c084a->enter($__internal_221958620470738e8470871ebd8ff6efd57eed02250e720c83bd8425630c084a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_221958620470738e8470871ebd8ff6efd57eed02250e720c83bd8425630c084a->leave($__internal_221958620470738e8470871ebd8ff6efd57eed02250e720c83bd8425630c084a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/widget_attributes.html.php");
    }
}
