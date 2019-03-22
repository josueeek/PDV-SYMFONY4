<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ae7829ca3ae3eff3ef88fb8b31fb39e7ad4b1d4ba87ed949772dc434e20804e4 extends Twig_Template
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
        $__internal_c35c0c97474b0054507a80ec2f0d2ef87cb51c03df8010a4166b0e4ace146b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c35c0c97474b0054507a80ec2f0d2ef87cb51c03df8010a4166b0e4ace146b2b->enter($__internal_c35c0c97474b0054507a80ec2f0d2ef87cb51c03df8010a4166b0e4ace146b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_c35c0c97474b0054507a80ec2f0d2ef87cb51c03df8010a4166b0e4ace146b2b->leave($__internal_c35c0c97474b0054507a80ec2f0d2ef87cb51c03df8010a4166b0e4ace146b2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
