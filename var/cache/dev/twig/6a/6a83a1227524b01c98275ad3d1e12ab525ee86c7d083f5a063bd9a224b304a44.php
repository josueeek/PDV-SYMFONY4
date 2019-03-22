<?php

/* produto/update.html.twig */
class __TwigTemplate_9cdec5d27134431ddb475fd47a4af9b913e869da8bdbfd62c5a74ef714086848 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/update.html.twig", 1);
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
        $__internal_66e6acca37f59b89607a7120979c1c6e4fd11e3ad3878f7ea726f34ae1cadfb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e6acca37f59b89607a7120979c1c6e4fd11e3ad3878f7ea726f34ae1cadfb6->enter($__internal_66e6acca37f59b89607a7120979c1c6e4fd11e3ad3878f7ea726f34ae1cadfb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66e6acca37f59b89607a7120979c1c6e4fd11e3ad3878f7ea726f34ae1cadfb6->leave($__internal_66e6acca37f59b89607a7120979c1c6e4fd11e3ad3878f7ea726f34ae1cadfb6_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_668d96a4db516e74b24ba505d999c669bc9aeafb589b1ba02b45d82e094fa4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_668d96a4db516e74b24ba505d999c669bc9aeafb589b1ba02b45d82e094fa4eb->enter($__internal_668d96a4db516e74b24ba505d999c669bc9aeafb589b1ba02b45d82e094fa4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cadastrar Produto";
        
        $__internal_668d96a4db516e74b24ba505d999c669bc9aeafb589b1ba02b45d82e094fa4eb->leave($__internal_668d96a4db516e74b24ba505d999c669bc9aeafb589b1ba02b45d82e094fa4eb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8011fec0cf605cec86abcfcb3170862b1ea1e2b098e9f081d25a14bfad9dad68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8011fec0cf605cec86abcfcb3170862b1ea1e2b098e9f081d25a14bfad9dad68->enter($__internal_8011fec0cf605cec86abcfcb3170862b1ea1e2b098e9f081d25a14bfad9dad68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_edit");
        echo "\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Nome</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 9, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\" name=\"nome\" placeholder=\"Insira o nome do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Código</label>
                <input type=\"text\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 15, $this->getSourceContext()); })()), "codigo", array()), "html", null, true);
        echo "\" name=\"codigo\" placeholder=\"Insira o código do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Preço Unitário</label>
                <input type=\"text\" maxlenght=\"10\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 21, $this->getSourceContext()); })()), "precoUnitario", array()), "html", null, true);
        echo "\" class=\"form-control\" name=\"precoUnitario\" data-mask=\"###0,00\" data-mask-reverse=\"true\" required placeholder=\"000,00\" />
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["produto"]) || array_key_exists("produto", $context) ? $context["produto"] : (function () { throw new Twig_Error_Runtime('Variable "produto" does not exist.', 25, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary btn-fill pull-right\">Cadastrar</button>
    <div class=\"clearfix\"></div>
</form>
";
        
        $__internal_8011fec0cf605cec86abcfcb3170862b1ea1e2b098e9f081d25a14bfad9dad68->leave($__internal_8011fec0cf605cec86abcfcb3170862b1ea1e2b098e9f081d25a14bfad9dad68_prof);

    }

    // line 30
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_0db7266c27aed244ae7ed27934db02cd184c3141172711140c3879d90786d5b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0db7266c27aed244ae7ed27934db02cd184c3141172711140c3879d90786d5b4->enter($__internal_0db7266c27aed244ae7ed27934db02cd184c3141172711140c3879d90786d5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 31
        echo "<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

";
        // line 33
        if (array_key_exists("duplicado", $context)) {
            // line 34
            echo "<script>
    \$.notify({
        icon: 'pe-7s-delete-user',
        message: \"Esse produto já foi cadastrado\"
    },{
        type: 'danger'
    });
</script>
";
        }
        // line 43
        echo "

";
        // line 45
        if (array_key_exists("errors", $context)) {
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 46, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 47
                echo "<script>
    \$.notify({
        icon: 'pe-7s-attention',
        message: \"";
                // line 50
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
        
        $__internal_0db7266c27aed244ae7ed27934db02cd184c3141172711140c3879d90786d5b4->leave($__internal_0db7266c27aed244ae7ed27934db02cd184c3141172711140c3879d90786d5b4_prof);

    }

    public function getTemplateName()
    {
        return "produto/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 50,  133 => 47,  129 => 46,  127 => 45,  123 => 43,  112 => 34,  110 => 33,  106 => 31,  100 => 30,  88 => 25,  81 => 21,  72 => 15,  63 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Cadastrar Produto{% endblock %}
{% block content %}
<form action=\"{{path('produto_edit')}}\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Nome</label>
                <input type=\"text\" class=\"form-control\" value=\"{{produto.nome}}\" name=\"nome\" placeholder=\"Insira o nome do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Código</label>
                <input type=\"text\" class=\"form-control\" value=\"{{produto.codigo}}\" name=\"codigo\" placeholder=\"Insira o código do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Preço Unitário</label>
                <input type=\"text\" maxlenght=\"10\" value=\"{{produto.precoUnitario}}\" class=\"form-control\" name=\"precoUnitario\" data-mask=\"###0,00\" data-mask-reverse=\"true\" required placeholder=\"000,00\" />
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"id\" value=\"{{produto.id}}\">
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
        message: \"Esse produto já foi cadastrado\"
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
", "produto/update.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/produto/update.html.twig");
    }
}
