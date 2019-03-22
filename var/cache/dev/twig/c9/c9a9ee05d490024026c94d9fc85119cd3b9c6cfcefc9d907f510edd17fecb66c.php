<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_2a22b47e16426d17ff8c511481e037925e3fc75e57b3a56ad5c7d316790a2556 extends Twig_Template
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
        $__internal_3fc2f9dc6fdec5019307c35cef1a3950b142a513c0c1674ce978306b9658363e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc2f9dc6fdec5019307c35cef1a3950b142a513c0c1674ce978306b9658363e->enter($__internal_3fc2f9dc6fdec5019307c35cef1a3950b142a513c0c1674ce978306b9658363e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_3fc2f9dc6fdec5019307c35cef1a3950b142a513c0c1674ce978306b9658363e->leave($__internal_3fc2f9dc6fdec5019307c35cef1a3950b142a513c0c1674ce978306b9658363e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/password_widget.html.php");
    }
}
