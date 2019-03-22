<?php

/* assets/light/_main.scss */
class __TwigTemplate_5fc784792fa36b18bbab8e3944f2c912db5e0e1cc592d9c8021af6cfd74dd23f extends Twig_Template
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
        $__internal_a4de09d85b4cb640bc14a330ce18e948c1d1953d7033bd860fb1342aac5597df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4de09d85b4cb640bc14a330ce18e948c1d1953d7033bd860fb1342aac5597df->enter($__internal_a4de09d85b4cb640bc14a330ce18e948c1d1953d7033bd860fb1342aac5597df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/light/_main.scss"));

        // line 1
        echo "@import 'templates/assets/light/css/light-bootstrap-dashboard';
@import 'templates/assets/light/css/pe-icon-7-stroke';
";
        
        $__internal_a4de09d85b4cb640bc14a330ce18e948c1d1953d7033bd860fb1342aac5597df->leave($__internal_a4de09d85b4cb640bc14a330ce18e948c1d1953d7033bd860fb1342aac5597df_prof);

    }

    public function getTemplateName()
    {
        return "assets/light/_main.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@import 'templates/assets/light/css/light-bootstrap-dashboard';
@import 'templates/assets/light/css/pe-icon-7-stroke';
", "assets/light/_main.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/light/_main.scss");
    }
}
