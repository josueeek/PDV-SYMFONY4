<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_bfcd7fcdadd3287b25a5eb74e2a700bc7303ef1025076c4f4220797e1a99b814 extends Twig_Template
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
        $__internal_e3b44859d29931990c86c9d051cc32dccfa9b1ea0175a1447dee65029c3e51d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3b44859d29931990c86c9d051cc32dccfa9b1ea0175a1447dee65029c3e51d6->enter($__internal_e3b44859d29931990c86c9d051cc32dccfa9b1ea0175a1447dee65029c3e51d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3b44859d29931990c86c9d051cc32dccfa9b1ea0175a1447dee65029c3e51d6->leave($__internal_e3b44859d29931990c86c9d051cc32dccfa9b1ea0175a1447dee65029c3e51d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/textarea_widget.html.php");
    }
}
