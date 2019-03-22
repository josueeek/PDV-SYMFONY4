<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_05d728e332594758f634657a4d9a4440f5d9f22ebcc19488d6021231d2ffc8eb extends Twig_Template
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
        $__internal_b87d1f6b60d6be4827ae5be7837601eaca82758de2bd5ae32571dbbb70103d11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87d1f6b60d6be4827ae5be7837601eaca82758de2bd5ae32571dbbb70103d11->enter($__internal_b87d1f6b60d6be4827ae5be7837601eaca82758de2bd5ae32571dbbb70103d11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_b87d1f6b60d6be4827ae5be7837601eaca82758de2bd5ae32571dbbb70103d11->leave($__internal_b87d1f6b60d6be4827ae5be7837601eaca82758de2bd5ae32571dbbb70103d11_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/button_attributes.html.php");
    }
}
