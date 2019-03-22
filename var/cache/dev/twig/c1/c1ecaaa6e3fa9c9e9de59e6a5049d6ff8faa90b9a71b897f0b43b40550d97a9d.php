<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2ebef50e4f109cdacb05bd643d087ec1586db5f9dfb3b2efa0026b649b21eba9 extends Twig_Template
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
        $__internal_8590b40b110244ebcdf1b8006d95d95e1bf9995043cc0ae33169f7cec0443f83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8590b40b110244ebcdf1b8006d95d95e1bf9995043cc0ae33169f7cec0443f83->enter($__internal_8590b40b110244ebcdf1b8006d95d95e1bf9995043cc0ae33169f7cec0443f83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_8590b40b110244ebcdf1b8006d95d95e1bf9995043cc0ae33169f7cec0443f83->leave($__internal_8590b40b110244ebcdf1b8006d95d95e1bf9995043cc0ae33169f7cec0443f83_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_rows.html.php");
    }
}
