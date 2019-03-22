<?php

/* index.html.twig */
class __TwigTemplate_80aeed4934407c6f772eea89853b24b68585f2662019031d1e10744a47eee207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_489e62bc61283c2588e06bdbdc4d8d9139cd4027481c8c1889073daf0aaf936c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489e62bc61283c2588e06bdbdc4d8d9139cd4027481c8c1889073daf0aaf936c->enter($__internal_489e62bc61283c2588e06bdbdc4d8d9139cd4027481c8c1889073daf0aaf936c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_489e62bc61283c2588e06bdbdc4d8d9139cd4027481c8c1889073daf0aaf936c->leave($__internal_489e62bc61283c2588e06bdbdc4d8d9139cd4027481c8c1889073daf0aaf936c_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_11afc11a65325c674f53a0afd075cf857fce48921c7401d0c7c00d036e214bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11afc11a65325c674f53a0afd075cf857fce48921c7401d0c7c00d036e214bad->enter($__internal_11afc11a65325c674f53a0afd075cf857fce48921c7401d0c7c00d036e214bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Dashboard";
        
        $__internal_11afc11a65325c674f53a0afd075cf857fce48921c7401d0c7c00d036e214bad->leave($__internal_11afc11a65325c674f53a0afd075cf857fce48921c7401d0c7c00d036e214bad_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8c1a8f3b07fc52d866fa2ed99c680569fab52606b1b7f5210cbe7e47900f6584 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1a8f3b07fc52d866fa2ed99c680569fab52606b1b7f5210cbe7e47900f6584->enter($__internal_8c1a8f3b07fc52d866fa2ed99c680569fab52606b1b7f5210cbe7e47900f6584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        
        $__internal_8c1a8f3b07fc52d866fa2ed99c680569fab52606b1b7f5210cbe7e47900f6584->leave($__internal_8c1a8f3b07fc52d866fa2ed99c680569fab52606b1b7f5210cbe7e47900f6584_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  47 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Dashboard{% endblock %}
{% block content %}

{% endblock %}
", "index.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/index.html.twig");
    }
}
