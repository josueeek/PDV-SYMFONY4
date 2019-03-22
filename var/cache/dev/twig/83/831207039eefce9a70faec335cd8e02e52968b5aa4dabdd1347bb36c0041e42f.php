<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_706efdba251ba49c013f4a00e35713db0c6bbde652cbee4f2d0b757665d51f61 extends Twig_Template
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
        $__internal_de68ffd6d9e7a327fc5da531dc31158d0426933c836cd80854de95a8fb1b6c24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de68ffd6d9e7a327fc5da531dc31158d0426933c836cd80854de95a8fb1b6c24->enter($__internal_de68ffd6d9e7a327fc5da531dc31158d0426933c836cd80854de95a8fb1b6c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_de68ffd6d9e7a327fc5da531dc31158d0426933c836cd80854de95a8fb1b6c24->leave($__internal_de68ffd6d9e7a327fc5da531dc31158d0426933c836cd80854de95a8fb1b6c24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/framework-bundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
