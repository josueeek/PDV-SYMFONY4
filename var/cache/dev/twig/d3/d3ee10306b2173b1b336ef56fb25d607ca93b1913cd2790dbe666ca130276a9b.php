<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_97af2e40d342e0ef906a7e49f2a9b96b591d563f885f09a1e2a22df4f5422601 extends Twig_Template
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
        $__internal_bca6c8c404ba3d8381b89e6b97294ff19b5eaf81b920629fd9179236a5d4f703 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bca6c8c404ba3d8381b89e6b97294ff19b5eaf81b920629fd9179236a5d4f703->enter($__internal_bca6c8c404ba3d8381b89e6b97294ff19b5eaf81b920629fd9179236a5d4f703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_bca6c8c404ba3d8381b89e6b97294ff19b5eaf81b920629fd9179236a5d4f703->leave($__internal_bca6c8c404ba3d8381b89e6b97294ff19b5eaf81b920629fd9179236a5d4f703_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/money_widget.html.php");
    }
}
