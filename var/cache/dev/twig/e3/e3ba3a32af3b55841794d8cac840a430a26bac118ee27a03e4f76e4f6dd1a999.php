<?php

/* pedido/list.html.twig */
class __TwigTemplate_ce4d4a82233319d9ef2a0b40f58c18fd76b1609e86a58418f4e9c113b8b82391 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/list.html.twig", 1);
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
        $__internal_2746fdc44d94d386af63fed6690a6369e52a5ef274c59364edd784c9a53d3107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2746fdc44d94d386af63fed6690a6369e52a5ef274c59364edd784c9a53d3107->enter($__internal_2746fdc44d94d386af63fed6690a6369e52a5ef274c59364edd784c9a53d3107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2746fdc44d94d386af63fed6690a6369e52a5ef274c59364edd784c9a53d3107->leave($__internal_2746fdc44d94d386af63fed6690a6369e52a5ef274c59364edd784c9a53d3107_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_260d7b4b02b53d0fae2b3631259bd0b9a7aaebb2cf15c34a342a65d32c55e4fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260d7b4b02b53d0fae2b3631259bd0b9a7aaebb2cf15c34a342a65d32c55e4fa->enter($__internal_260d7b4b02b53d0fae2b3631259bd0b9a7aaebb2cf15c34a342a65d32c55e4fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Pedidos";
        
        $__internal_260d7b4b02b53d0fae2b3631259bd0b9a7aaebb2cf15c34a342a65d32c55e4fa->leave($__internal_260d7b4b02b53d0fae2b3631259bd0b9a7aaebb2cf15c34a342a65d32c55e4fa_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8d129dbd859fabef32ed068223a776d752ffb696500554224bb91355acf5c0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d129dbd859fabef32ed068223a776d752ffb696500554224bb91355acf5c0b7->enter($__internal_8d129dbd859fabef32ed068223a776d752ffb696500554224bb91355acf5c0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_search");
        echo "\" method=\"POST\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\">Pesquisar</button>
                </span>
            </div>
        </form><br>
    </div>
    <div class=\"col-md-3\">
        <a href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_create");
        echo "\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    ";
        // line 23
        if (array_key_exists("pedidos", $context)) {
            // line 24
            echo "    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Número do Pedido</th>
                <th>Data de Emissão</th>
                <th>Total</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pedidos"]) || array_key_exists("pedidos", $context) ? $context["pedidos"] : (function () { throw new Twig_Error_Runtime('Variable "pedidos" does not exist.', 34, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pedido"]) {
                // line 35
                echo "            <tr>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pedido"], "numero", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pedido"], "emissao", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                <td>R\$ ";
                // line 38
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["pedido"], "total", array()), array("." => ",")), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_details", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["pedido"], "id", array()))), "html", null, true);
                echo "\">Ver detalhes</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pedido'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </tbody>
    </table>
    ";
        }
        // line 45
        echo "</div>
";
        
        $__internal_8d129dbd859fabef32ed068223a776d752ffb696500554224bb91355acf5c0b7->leave($__internal_8d129dbd859fabef32ed068223a776d752ffb696500554224bb91355acf5c0b7_prof);

    }

    // line 48
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_926edbdcbe30ccd58d7856af5f715babcf086c40cd910e43eecb20970410682f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926edbdcbe30ccd58d7856af5f715babcf086c40cd910e43eecb20970410682f->enter($__internal_926edbdcbe30ccd58d7856af5f715babcf086c40cd910e43eecb20970410682f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 49
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "message"), "method", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 49, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method") != null))) {
            // line 50
            echo "<script>
    \$.notify({
        icon: 'pe-7s-info',
        message: \"";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 53, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method"), "html", null, true);
            echo "\"
    }, {
        type: 'warning'
    });
</script>
";
        }
        
        $__internal_926edbdcbe30ccd58d7856af5f715babcf086c40cd910e43eecb20970410682f->leave($__internal_926edbdcbe30ccd58d7856af5f715babcf086c40cd910e43eecb20970410682f_prof);

    }

    public function getTemplateName()
    {
        return "pedido/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  144 => 50,  142 => 49,  136 => 48,  128 => 45,  123 => 42,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  99 => 35,  95 => 34,  83 => 24,  81 => 23,  72 => 17,  59 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista de Pedidos{% endblock %}
{% block content %}

<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"{{path('pedido_search')}}\" method=\"POST\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\">Pesquisar</button>
                </span>
            </div>
        </form><br>
    </div>
    <div class=\"col-md-3\">
        <a href=\"{{path('pedido_create')}}\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    {% if pedidos is defined %}
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Número do Pedido</th>
                <th>Data de Emissão</th>
                <th>Total</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for pedido in pedidos %}
            <tr>
                <td>{{pedido.numero}}</td>
                <td>{{pedido.emissao|date('d/m/Y')}}</td>
                <td>R\$ {{pedido.total|replace({'.':','})}}</td>
                <td><a href=\"{{path('pedido_details', {'id': pedido.id})}}\">Ver detalhes</a></td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% endif %}
</div>
{% endblock %}

{% block scripts %}
{% if app.request.get('message') is defined and app.request.get('message') != null %}
<script>
    \$.notify({
        icon: 'pe-7s-info',
        message: \"{{app.request.get('message')}}\"
    }, {
        type: 'warning'
    });
</script>
{% endif %}
{% endblock %}
", "pedido/list.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pedido/list.html.twig");
    }
}
