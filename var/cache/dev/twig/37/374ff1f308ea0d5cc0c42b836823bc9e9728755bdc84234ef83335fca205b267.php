<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8a013144e38766582fab87be88ff4335c0685a10d268c3429f5ab97080ceb3c4 extends Twig_Template
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
        $__internal_3e122169787167e6ac5fd501f2f1c750e076e4d2c4cc7fc86edd62c8411197b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e122169787167e6ac5fd501f2f1c750e076e4d2c4cc7fc86edd62c8411197b9->enter($__internal_3e122169787167e6ac5fd501f2f1c750e076e4d2c4cc7fc86edd62c8411197b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_3e122169787167e6ac5fd501f2f1c750e076e4d2c4cc7fc86edd62c8411197b9->leave($__internal_3e122169787167e6ac5fd501f2f1c750e076e4d2c4cc7fc86edd62c8411197b9_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/exception.css.twig");
    }
}
