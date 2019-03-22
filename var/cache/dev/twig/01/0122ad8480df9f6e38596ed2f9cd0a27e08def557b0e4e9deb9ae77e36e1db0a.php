<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_65d64ea5e1000d6d3a11fe48973322b91cb58dae17036a93fe13697153df4b5c extends Twig_Template
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
        $__internal_c75944d8dbf0c81bbe798bcff68d77b0069e3622b0a0f0100b4fc9d6c0c5ee58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75944d8dbf0c81bbe798bcff68d77b0069e3622b0a0f0100b4fc9d6c0c5ee58->enter($__internal_c75944d8dbf0c81bbe798bcff68d77b0069e3622b0a0f0100b4fc9d6c0c5ee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_c75944d8dbf0c81bbe798bcff68d77b0069e3622b0a0f0100b4fc9d6c0c5ee58->leave($__internal_c75944d8dbf0c81bbe798bcff68d77b0069e3622b0a0f0100b4fc9d6c0c5ee58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form.html.php");
    }
}
