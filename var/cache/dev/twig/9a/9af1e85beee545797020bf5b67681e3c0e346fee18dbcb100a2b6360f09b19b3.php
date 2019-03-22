<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_6fe5d033c489eb86f28621a67e651b2761e2276084eef5f88ebaa8622b3c4b06 extends Twig_Template
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
        $__internal_adebb3cf42c1d865b40bc4f91f4d37a43a6322170c8ab56b68deaeac12119dcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adebb3cf42c1d865b40bc4f91f4d37a43a6322170c8ab56b68deaeac12119dcf->enter($__internal_adebb3cf42c1d865b40bc4f91f4d37a43a6322170c8ab56b68deaeac12119dcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_adebb3cf42c1d865b40bc4f91f4d37a43a6322170c8ab56b68deaeac12119dcf->leave($__internal_adebb3cf42c1d865b40bc4f91f4d37a43a6322170c8ab56b68deaeac12119dcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/url_widget.html.php");
    }
}
