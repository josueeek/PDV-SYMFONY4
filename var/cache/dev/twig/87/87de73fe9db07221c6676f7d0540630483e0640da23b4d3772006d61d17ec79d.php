<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_f8c9e0889a9b7bb56db032f86cfb6180c7e27fe485bac2aa5fb2c22d14065760 extends Twig_Template
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
        $__internal_0cf6cc3e377a4545b362d25bcf0cd71a8731428b2d7bb2f7cf491d87bbbfa8ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cf6cc3e377a4545b362d25bcf0cd71a8731428b2d7bb2f7cf491d87bbbfa8ce->enter($__internal_0cf6cc3e377a4545b362d25bcf0cd71a8731428b2d7bb2f7cf491d87bbbfa8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_0cf6cc3e377a4545b362d25bcf0cd71a8731428b2d7bb2f7cf491d87bbbfa8ce->leave($__internal_0cf6cc3e377a4545b362d25bcf0cd71a8731428b2d7bb2f7cf491d87bbbfa8ce_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/error.xml.twig");
    }
}
