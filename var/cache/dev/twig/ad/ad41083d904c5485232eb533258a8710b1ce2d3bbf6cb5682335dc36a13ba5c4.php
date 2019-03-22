<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_2394c0456d666918ddaf54efadfcc5919558cf61b8f3e0fc59edbbd39232469d extends Twig_Template
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
        $__internal_d3d878822dfbbc46c705028b5cbe35518128e2308594de2251ea733f35e084d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d878822dfbbc46c705028b5cbe35518128e2308594de2251ea733f35e084d1->enter($__internal_d3d878822dfbbc46c705028b5cbe35518128e2308594de2251ea733f35e084d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d3d878822dfbbc46c705028b5cbe35518128e2308594de2251ea733f35e084d1->leave($__internal_d3d878822dfbbc46c705028b5cbe35518128e2308594de2251ea733f35e084d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/hidden_widget.html.php");
    }
}
