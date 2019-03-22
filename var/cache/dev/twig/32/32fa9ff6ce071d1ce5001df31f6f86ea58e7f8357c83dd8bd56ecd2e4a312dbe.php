<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_9036093ccc99209261e1440b0b86f717138ecdbcf74c402e2584439f62ff5306 extends Twig_Template
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
        $__internal_d96ef907f3592102920cc9a18f0fc54ddad5424e58bbd005a3e756e995d1a722 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96ef907f3592102920cc9a18f0fc54ddad5424e58bbd005a3e756e995d1a722->enter($__internal_d96ef907f3592102920cc9a18f0fc54ddad5424e58bbd005a3e756e995d1a722_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_d96ef907f3592102920cc9a18f0fc54ddad5424e58bbd005a3e756e995d1a722->leave($__internal_d96ef907f3592102920cc9a18f0fc54ddad5424e58bbd005a3e756e995d1a722_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_rest.html.php");
    }
}
