<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_3f9dc119c1b14535d1b8a3c2c8ed30aa35d92c9c1f756e1dc693329055ac9247 extends Twig_Template
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
        $__internal_2ce8b801a987c4cc6023abdcae09d23fed896f49c0747599e072f081e16b6a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce8b801a987c4cc6023abdcae09d23fed896f49c0747599e072f081e16b6a38->enter($__internal_2ce8b801a987c4cc6023abdcae09d23fed896f49c0747599e072f081e16b6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_2ce8b801a987c4cc6023abdcae09d23fed896f49c0747599e072f081e16b6a38->leave($__internal_2ce8b801a987c4cc6023abdcae09d23fed896f49c0747599e072f081e16b6a38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/exception.rdf.twig");
    }
}
