<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c3a8b55e54b7209c37d21b3935542133b8c71f08e1343cd9b7da027e1137ff00 extends Twig_Template
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
        $__internal_e15506a602ff69f024490cd4d51ea7458119bed5c8950092a247954cfc3cd035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e15506a602ff69f024490cd4d51ea7458119bed5c8950092a247954cfc3cd035->enter($__internal_e15506a602ff69f024490cd4d51ea7458119bed5c8950092a247954cfc3cd035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_e15506a602ff69f024490cd4d51ea7458119bed5c8950092a247954cfc3cd035->leave($__internal_e15506a602ff69f024490cd4d51ea7458119bed5c8950092a247954cfc3cd035_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/FormTable/form_row.html.php");
    }
}
