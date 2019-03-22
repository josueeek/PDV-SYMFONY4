<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8bb7c0a55d7b0db5ce54ba82b74a5453575ea709d9ac07b6ab19956d119addcb extends Twig_Template
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
        $__internal_5396a677e32e198eba3f1b66fc2fc1445a94e8ab3e58b50b9cccd0bdb46a0422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5396a677e32e198eba3f1b66fc2fc1445a94e8ab3e58b50b9cccd0bdb46a0422->enter($__internal_5396a677e32e198eba3f1b66fc2fc1445a94e8ab3e58b50b9cccd0bdb46a0422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_5396a677e32e198eba3f1b66fc2fc1445a94e8ab3e58b50b9cccd0bdb46a0422->leave($__internal_5396a677e32e198eba3f1b66fc2fc1445a94e8ab3e58b50b9cccd0bdb46a0422_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/exception.atom.twig");
    }
}
