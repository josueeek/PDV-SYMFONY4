<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_4d78c4b70a3d9d3e506cac07849f0bd6fa43d24ff33c2040d012e2b1147bd257 extends Twig_Template
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
        $__internal_59d4280ba8ccff0be7e1c69a228dee87652949ac5693d5bee5668d85b05a8e28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d4280ba8ccff0be7e1c69a228dee87652949ac5693d5bee5668d85b05a8e28->enter($__internal_59d4280ba8ccff0be7e1c69a228dee87652949ac5693d5bee5668d85b05a8e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_59d4280ba8ccff0be7e1c69a228dee87652949ac5693d5bee5668d85b05a8e28->leave($__internal_59d4280ba8ccff0be7e1c69a228dee87652949ac5693d5bee5668d85b05a8e28_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_errors.html.php");
    }
}
