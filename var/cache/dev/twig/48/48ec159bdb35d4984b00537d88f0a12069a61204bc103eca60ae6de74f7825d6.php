<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_0a7c0696dcde6e2bd7e6235bac9ba67b64e6a6b5928ae9e6e91e505a6f00f4bb extends Twig_Template
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
        $__internal_b3f4174676b428accb13505c7b14def3d8383818493619022661b9162827d557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3f4174676b428accb13505c7b14def3d8383818493619022661b9162827d557->enter($__internal_b3f4174676b428accb13505c7b14def3d8383818493619022661b9162827d557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b3f4174676b428accb13505c7b14def3d8383818493619022661b9162827d557->leave($__internal_b3f4174676b428accb13505c7b14def3d8383818493619022661b9162827d557_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/FormTable/button_row.html.php");
    }
}
