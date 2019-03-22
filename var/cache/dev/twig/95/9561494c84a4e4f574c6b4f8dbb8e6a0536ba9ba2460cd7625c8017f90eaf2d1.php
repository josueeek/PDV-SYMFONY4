<?php

/* pessoa/create.html.twig */
class __TwigTemplate_a555bbaf733e0155d1a07dc40d06e720d92c009e4a7a0f456f74bdeefc800e8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pessoa/create.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdf29c16a404cfe4960d0fea551c655a15e1247c8cb05453bcd421e9d99fb358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdf29c16a404cfe4960d0fea551c655a15e1247c8cb05453bcd421e9d99fb358->enter($__internal_bdf29c16a404cfe4960d0fea551c655a15e1247c8cb05453bcd421e9d99fb358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pessoa/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdf29c16a404cfe4960d0fea551c655a15e1247c8cb05453bcd421e9d99fb358->leave($__internal_bdf29c16a404cfe4960d0fea551c655a15e1247c8cb05453bcd421e9d99fb358_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_ae9ed3bf52a8e8294a9e7baeebfdc85fbd2b33e5b5c9bbf851d2b2a5948bc22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae9ed3bf52a8e8294a9e7baeebfdc85fbd2b33e5b5c9bbf851d2b2a5948bc22f->enter($__internal_ae9ed3bf52a8e8294a9e7baeebfdc85fbd2b33e5b5c9bbf851d2b2a5948bc22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cadastrar Cliente";
        
        $__internal_ae9ed3bf52a8e8294a9e7baeebfdc85fbd2b33e5b5c9bbf851d2b2a5948bc22f->leave($__internal_ae9ed3bf52a8e8294a9e7baeebfdc85fbd2b33e5b5c9bbf851d2b2a5948bc22f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7e10bd59cc72f68deb7934ab3db4a2088682a3cc5f44b66e0cc149c8fe305fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e10bd59cc72f68deb7934ab3db4a2088682a3cc5f44b66e0cc149c8fe305fb0->enter($__internal_7e10bd59cc72f68deb7934ab3db4a2088682a3cc5f44b66e0cc149c8fe305fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_store");
        echo "\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-8\">
            <div class=\"form-group\">
                <label>Nome Completo</label>
                <input type=\"text\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome completo\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Data de Nascimento</label>
                <input type=\"text\" maxlenght=\"10\" class=\"form-control\" name=\"dataNascimento\" data-mask=\"00/00/0000\" required placeholder=\"dd/mm/aaaa\" />
            </div>
        </div>
    </div>
    <button class=\"btn btn-primary btn-fill pull-right\">Cadastrar</button>
    <div class=\"clearfix\"></div>
</form>
";
        
        $__internal_7e10bd59cc72f68deb7934ab3db4a2088682a3cc5f44b66e0cc149c8fe305fb0->leave($__internal_7e10bd59cc72f68deb7934ab3db4a2088682a3cc5f44b66e0cc149c8fe305fb0_prof);

    }

    // line 23
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8b0719201a40ed49bcb56a3dd3987807a80bccd1d532fda7495e5ecbc3fa8207 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0719201a40ed49bcb56a3dd3987807a80bccd1d532fda7495e5ecbc3fa8207->enter($__internal_8b0719201a40ed49bcb56a3dd3987807a80bccd1d532fda7495e5ecbc3fa8207_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 24
        echo "<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

";
        // line 26
        if (array_key_exists("duplicado", $context)) {
            // line 27
            echo "<script>
    \$.notify({
        icon: 'pe-7s-delete-user',
        message: \"Esse cliente já foi cadastrado\"
    },{
        type: 'danger'
    });
</script>
";
        }
        // line 36
        echo "

";
        // line 38
        if (array_key_exists("errors", $context)) {
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 39, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 40
                echo "<script>
    \$.notify({
        icon: 'pe-7s-attention',
        message: \"";
                // line 43
                echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                echo "\"
    },{
        type: 'danger'
    });
</script>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_8b0719201a40ed49bcb56a3dd3987807a80bccd1d532fda7495e5ecbc3fa8207->leave($__internal_8b0719201a40ed49bcb56a3dd3987807a80bccd1d532fda7495e5ecbc3fa8207_prof);

    }

    public function getTemplateName()
    {
        return "pessoa/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 43,  114 => 40,  110 => 39,  108 => 38,  104 => 36,  93 => 27,  91 => 26,  87 => 24,  81 => 23,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Cadastrar Cliente{% endblock %}
{% block content %}
<form action=\"{{path('pessoa_store')}}\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-8\">
            <div class=\"form-group\">
                <label>Nome Completo</label>
                <input type=\"text\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome completo\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Data de Nascimento</label>
                <input type=\"text\" maxlenght=\"10\" class=\"form-control\" name=\"dataNascimento\" data-mask=\"00/00/0000\" required placeholder=\"dd/mm/aaaa\" />
            </div>
        </div>
    </div>
    <button class=\"btn btn-primary btn-fill pull-right\">Cadastrar</button>
    <div class=\"clearfix\"></div>
</form>
{% endblock %}
{% block scripts %}
<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

{% if duplicado is defined %}
<script>
    \$.notify({
        icon: 'pe-7s-delete-user',
        message: \"Esse cliente já foi cadastrado\"
    },{
        type: 'danger'
    });
</script>
{% endif %}


{% if errors is defined %}
{% for error in errors %}
<script>
    \$.notify({
        icon: 'pe-7s-attention',
        message: \"{{error}}\"
    },{
        type: 'danger'
    });
</script>
{% endfor %}
{% endif %}
{% endblock %}
", "pessoa/create.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pessoa/create.html.twig");
    }
}
