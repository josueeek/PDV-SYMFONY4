<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b18c42ff57d4efa87704794eb8d7fdabe39b3c800e83d1c9bf133f2dbf3342ae extends Twig_Template
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
        $__internal_b4286261366f6b68e1d772ead117a8f1f1a37235d6fd6c5385c2e4a50fe2e880 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4286261366f6b68e1d772ead117a8f1f1a37235d6fd6c5385c2e4a50fe2e880->enter($__internal_b4286261366f6b68e1d772ead117a8f1f1a37235d6fd6c5385c2e4a50fe2e880_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_b4286261366f6b68e1d772ead117a8f1f1a37235d6fd6c5385c2e4a50fe2e880->leave($__internal_b4286261366f6b68e1d772ead117a8f1f1a37235d6fd6c5385c2e4a50fe2e880_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/email_widget.html.php");
    }
}
