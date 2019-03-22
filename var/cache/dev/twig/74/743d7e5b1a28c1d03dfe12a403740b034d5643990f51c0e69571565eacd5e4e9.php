<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fcf91454428832ec2b04db0f72309ec490289077978c702bd99bc88067a6cb27 extends Twig_Template
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
        $__internal_0adf7df1171c8b5678859b290466851a90989604b85a1f1f992674ba72cdbf64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adf7df1171c8b5678859b290466851a90989604b85a1f1f992674ba72cdbf64->enter($__internal_0adf7df1171c8b5678859b290466851a90989604b85a1f1f992674ba72cdbf64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_0adf7df1171c8b5678859b290466851a90989604b85a1f1f992674ba72cdbf64->leave($__internal_0adf7df1171c8b5678859b290466851a90989604b85a1f1f992674ba72cdbf64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/exception.js.twig");
    }
}
