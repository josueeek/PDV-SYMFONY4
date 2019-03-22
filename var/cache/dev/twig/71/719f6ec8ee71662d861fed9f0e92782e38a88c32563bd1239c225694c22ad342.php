<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_51c3654f66ed1293d94e2b379e7fda187c7bee66fbec3acf2ff2a684d0df9a96 extends Twig_Template
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
        $__internal_d2dc0c0f77d65dfffdbe57b09ee9574e09fb7200fc07046040a397525428ceb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2dc0c0f77d65dfffdbe57b09ee9574e09fb7200fc07046040a397525428ceb1->enter($__internal_d2dc0c0f77d65dfffdbe57b09ee9574e09fb7200fc07046040a397525428ceb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d2dc0c0f77d65dfffdbe57b09ee9574e09fb7200fc07046040a397525428ceb1->leave($__internal_d2dc0c0f77d65dfffdbe57b09ee9574e09fb7200fc07046040a397525428ceb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/error.txt.twig");
    }
}
