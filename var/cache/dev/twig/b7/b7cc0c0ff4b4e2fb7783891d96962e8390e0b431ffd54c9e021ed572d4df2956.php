<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_f215e7707867f4ed4e296d9da5d8e65ae7a795785c6540fc3aeec364d549b852 extends Twig_Template
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
        $__internal_db5eaf5c8b418d035e7db2679901ea67a16c824a8a1484bf7269d48262f3379e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db5eaf5c8b418d035e7db2679901ea67a16c824a8a1484bf7269d48262f3379e->enter($__internal_db5eaf5c8b418d035e7db2679901ea67a16c824a8a1484bf7269d48262f3379e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_db5eaf5c8b418d035e7db2679901ea67a16c824a8a1484bf7269d48262f3379e->leave($__internal_db5eaf5c8b418d035e7db2679901ea67a16c824a8a1484bf7269d48262f3379e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/search_widget.html.php");
    }
}
