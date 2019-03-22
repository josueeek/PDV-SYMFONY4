<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_1ad7f47b14386455087d9acc0e0c9aadc5ced6246b35ce3ba973080a2f8d0dce extends Twig_Template
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
        $__internal_2e43bd424389dc6f9b60f1df5dd1d7d0577dd0a2cd84e351aa390d406351ef84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e43bd424389dc6f9b60f1df5dd1d7d0577dd0a2cd84e351aa390d406351ef84->enter($__internal_2e43bd424389dc6f9b60f1df5dd1d7d0577dd0a2cd84e351aa390d406351ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_2e43bd424389dc6f9b60f1df5dd1d7d0577dd0a2cd84e351aa390d406351ef84->leave($__internal_2e43bd424389dc6f9b60f1df5dd1d7d0577dd0a2cd84e351aa390d406351ef84_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/error.atom.twig");
    }
}
