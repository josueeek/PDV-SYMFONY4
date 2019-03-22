<?php

/* produto/create.html.twig */
class __TwigTemplate_73db22afb3d4b302a10b0291837d508aa7e1529376cbf317c7cb0413bd2bf042 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/create.html.twig", 1);
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
        $__internal_404c7a557abc6389970c525ce4a47879062b6c7611761a3d219ce95032f2a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_404c7a557abc6389970c525ce4a47879062b6c7611761a3d219ce95032f2a2d8->enter($__internal_404c7a557abc6389970c525ce4a47879062b6c7611761a3d219ce95032f2a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_404c7a557abc6389970c525ce4a47879062b6c7611761a3d219ce95032f2a2d8->leave($__internal_404c7a557abc6389970c525ce4a47879062b6c7611761a3d219ce95032f2a2d8_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9007b06b82323784e1ab4ad2c2a2464e6ab8062eff73e7cc45ad5b3edea2516 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9007b06b82323784e1ab4ad2c2a2464e6ab8062eff73e7cc45ad5b3edea2516->enter($__internal_e9007b06b82323784e1ab4ad2c2a2464e6ab8062eff73e7cc45ad5b3edea2516_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Cadastrar Produto";
        
        $__internal_e9007b06b82323784e1ab4ad2c2a2464e6ab8062eff73e7cc45ad5b3edea2516->leave($__internal_e9007b06b82323784e1ab4ad2c2a2464e6ab8062eff73e7cc45ad5b3edea2516_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ebc3b8ebead97374fd811d4e96f31f1b59d6ca0c3bc56e7b5069e26b618f483 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebc3b8ebead97374fd811d4e96f31f1b59d6ca0c3bc56e7b5069e26b618f483->enter($__internal_7ebc3b8ebead97374fd811d4e96f31f1b59d6ca0c3bc56e7b5069e26b618f483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_store");
        echo "\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Nome</label>
                <input type=\"text\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Código</label>
                <input type=\"text\" class=\"form-control\" name=\"codigo\" placeholder=\"Insira o código do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Preço Unitário</label>
                <input type=\"text\" maxlenght=\"10\" class=\"form-control\" name=\"precoUnitario\" data-mask=\"###0,00\" data-mask-reverse=\"true\" required placeholder=\"000,00\" />
            </div>
        </div>
    </div>
    <button class=\"btn btn-primary btn-fill pull-right\">Cadastrar</button>
    <div class=\"clearfix\"></div>
</form>
";
        
        $__internal_7ebc3b8ebead97374fd811d4e96f31f1b59d6ca0c3bc56e7b5069e26b618f483->leave($__internal_7ebc3b8ebead97374fd811d4e96f31f1b59d6ca0c3bc56e7b5069e26b618f483_prof);

    }

    // line 29
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_6fe54bb513bde0637f502c006e611192eb18b823da37b037d2cafd64e9b0f104 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fe54bb513bde0637f502c006e611192eb18b823da37b037d2cafd64e9b0f104->enter($__internal_6fe54bb513bde0637f502c006e611192eb18b823da37b037d2cafd64e9b0f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 30
        echo "<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

";
        // line 32
        if (array_key_exists("duplicado", $context)) {
            // line 33
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
        // line 42
        echo "

";
        // line 44
        if (array_key_exists("errors", $context)) {
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 45, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 46
                echo "<script>
    \$.notify({
        icon: 'pe-7s-attention',
        message: \"";
                // line 49
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
        
        $__internal_6fe54bb513bde0637f502c006e611192eb18b823da37b037d2cafd64e9b0f104->leave($__internal_6fe54bb513bde0637f502c006e611192eb18b823da37b037d2cafd64e9b0f104_prof);

    }

    public function getTemplateName()
    {
        return "produto/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 49,  120 => 46,  116 => 45,  114 => 44,  110 => 42,  99 => 33,  97 => 32,  93 => 30,  87 => 29,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Cadastrar Produto{% endblock %}
{% block content %}
<form action=\"{{path('produto_store')}}\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Nome</label>
                <input type=\"text\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Código</label>
                <input type=\"text\" class=\"form-control\" name=\"codigo\" placeholder=\"Insira o código do produto\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Preço Unitário</label>
                <input type=\"text\" maxlenght=\"10\" class=\"form-control\" name=\"precoUnitario\" data-mask=\"###0,00\" data-mask-reverse=\"true\" required placeholder=\"000,00\" />
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
", "produto/create.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/produto/create.html.twig");
    }
}
