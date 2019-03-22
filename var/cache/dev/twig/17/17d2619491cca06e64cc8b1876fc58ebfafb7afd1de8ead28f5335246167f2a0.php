<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_2a4272404e8880eda00af0525236891134fd5554c90e0ba46b0b38114b0f46ff extends Twig_Template
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
        $__internal_235f199dca57ccddf631806e627b4dc2e3c0a998cf989fa1542534d270c67fc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_235f199dca57ccddf631806e627b4dc2e3c0a998cf989fa1542534d270c67fc5->enter($__internal_235f199dca57ccddf631806e627b4dc2e3c0a998cf989fa1542534d270c67fc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_235f199dca57ccddf631806e627b4dc2e3c0a998cf989fa1542534d270c67fc5->leave($__internal_235f199dca57ccddf631806e627b4dc2e3c0a998cf989fa1542534d270c67fc5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/hidden_row.html.php");
    }
}
