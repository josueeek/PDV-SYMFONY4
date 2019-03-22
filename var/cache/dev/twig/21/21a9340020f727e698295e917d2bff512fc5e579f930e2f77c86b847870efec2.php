<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d0514c1624845d894281eb5c4c697576aed7c58d86eebcb32bf9ba4af997658a extends Twig_Template
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
        $__internal_0f8c8654cfe5bb049c009e57d115f9561ed82115d52fee50ce0443df69f133f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f8c8654cfe5bb049c009e57d115f9561ed82115d52fee50ce0443df69f133f2->enter($__internal_0f8c8654cfe5bb049c009e57d115f9561ed82115d52fee50ce0443df69f133f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_0f8c8654cfe5bb049c009e57d115f9561ed82115d52fee50ce0443df69f133f2->leave($__internal_0f8c8654cfe5bb049c009e57d115f9561ed82115d52fee50ce0443df69f133f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/Users/jpereira/Desktop/PDV/pdv1/vendor/symfony/twig-bundle/Resources/views/Exception/error.json.twig");
    }
}
