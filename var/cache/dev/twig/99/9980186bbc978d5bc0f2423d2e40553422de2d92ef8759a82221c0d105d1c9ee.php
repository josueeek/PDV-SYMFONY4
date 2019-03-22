<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_18edac1b5532b409a7eceb6b7cb4ea5509c8fb37fbe2eae85314edeb3fa0d7c1 extends Twig_Template
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
        $__internal_25e4a1c8193b81937d9d5c2c324d9bfbeca6b35ae879bd6a181da1f6d3af6748 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25e4a1c8193b81937d9d5c2c324d9bfbeca6b35ae879bd6a181da1f6d3af6748->enter($__internal_25e4a1c8193b81937d9d5c2c324d9bfbeca6b35ae879bd6a181da1f6d3af6748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_25e4a1c8193b81937d9d5c2c324d9bfbeca6b35ae879bd6a181da1f6d3af6748->leave($__internal_25e4a1c8193b81937d9d5c2c324d9bfbeca6b35ae879bd6a181da1f6d3af6748_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/collection_widget.html.php");
    }
}
