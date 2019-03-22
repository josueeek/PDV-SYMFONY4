<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0ab7c00469254c584f742dd1749e9f167aecaa7e26d2562f6e03094f47124688 extends Twig_Template
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
        $__internal_8ff730427358594f01a09927639af9c11ff7b688101b259dc6ff367d38336b09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ff730427358594f01a09927639af9c11ff7b688101b259dc6ff367d38336b09->enter($__internal_8ff730427358594f01a09927639af9c11ff7b688101b259dc6ff367d38336b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_8ff730427358594f01a09927639af9c11ff7b688101b259dc6ff367d38336b09->leave($__internal_8ff730427358594f01a09927639af9c11ff7b688101b259dc6ff367d38336b09_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/error.rdf.twig");
    }
}
