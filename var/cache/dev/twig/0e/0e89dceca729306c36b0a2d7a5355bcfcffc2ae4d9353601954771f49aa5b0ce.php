<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_defcfe50f406e49708b09aea39d25644a7a062b154518b17dabbcd245295032d extends Twig_Template
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
        $__internal_df777df95b3e518fe186a0a8642198846ef8e5162e7bdfb584d8fb83702144f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df777df95b3e518fe186a0a8642198846ef8e5162e7bdfb584d8fb83702144f3->enter($__internal_df777df95b3e518fe186a0a8642198846ef8e5162e7bdfb584d8fb83702144f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_df777df95b3e518fe186a0a8642198846ef8e5162e7bdfb584d8fb83702144f3->leave($__internal_df777df95b3e518fe186a0a8642198846ef8e5162e7bdfb584d8fb83702144f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/integer_widget.html.php");
    }
}
