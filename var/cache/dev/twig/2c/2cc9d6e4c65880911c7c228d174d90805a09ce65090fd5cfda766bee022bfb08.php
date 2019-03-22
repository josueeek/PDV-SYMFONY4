<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_0351b6f20c5015a732f0ef44e96f002c3d2100088197d98b859236d27158c2ab extends Twig_Template
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
        $__internal_64c8eef7c0903d8ef375214d7cc9feff95b99a9ba6fc959a7355029f92e1084e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64c8eef7c0903d8ef375214d7cc9feff95b99a9ba6fc959a7355029f92e1084e->enter($__internal_64c8eef7c0903d8ef375214d7cc9feff95b99a9ba6fc959a7355029f92e1084e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_64c8eef7c0903d8ef375214d7cc9feff95b99a9ba6fc959a7355029f92e1084e->leave($__internal_64c8eef7c0903d8ef375214d7cc9feff95b99a9ba6fc959a7355029f92e1084e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_enctype.html.php");
    }
}
