<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_953361a219657a4bf840d5697d60595c96f3b36e1a22431b26e1dfaccbe2f4aa extends Twig_Template
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
        $__internal_105be1d3afafedc061ec051670050b2a7e8bfb9fed210bff82c6a7a6cb4e4cc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105be1d3afafedc061ec051670050b2a7e8bfb9fed210bff82c6a7a6cb4e4cc9->enter($__internal_105be1d3afafedc061ec051670050b2a7e8bfb9fed210bff82c6a7a6cb4e4cc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_105be1d3afafedc061ec051670050b2a7e8bfb9fed210bff82c6a7a6cb4e4cc9->leave($__internal_105be1d3afafedc061ec051670050b2a7e8bfb9fed210bff82c6a7a6cb4e4cc9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
