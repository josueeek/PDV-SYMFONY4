<?php

/* pedido/view.html.twig */
class __TwigTemplate_0634611c2f9d119e4bca21100fe53c71294ac1c4f764998c8b0b9af179347572 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/view.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'help' => array($this, 'block_help'),
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
        $__internal_9bae0a7f296a28739d81f59b9e36cf6db75a76872774f7f0b1206f79b87fd6f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bae0a7f296a28739d81f59b9e36cf6db75a76872774f7f0b1206f79b87fd6f9->enter($__internal_9bae0a7f296a28739d81f59b9e36cf6db75a76872774f7f0b1206f79b87fd6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bae0a7f296a28739d81f59b9e36cf6db75a76872774f7f0b1206f79b87fd6f9->leave($__internal_9bae0a7f296a28739d81f59b9e36cf6db75a76872774f7f0b1206f79b87fd6f9_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c222d58157822d7d2c9151abb58f2b1bf8cfe30d62c97f0a59e4755dc11f5318 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c222d58157822d7d2c9151abb58f2b1bf8cfe30d62c97f0a59e4755dc11f5318->enter($__internal_c222d58157822d7d2c9151abb58f2b1bf8cfe30d62c97f0a59e4755dc11f5318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Pedidos";
        
        $__internal_c222d58157822d7d2c9151abb58f2b1bf8cfe30d62c97f0a59e4755dc11f5318->leave($__internal_c222d58157822d7d2c9151abb58f2b1bf8cfe30d62c97f0a59e4755dc11f5318_prof);

    }

    // line 3
    public function block_help($context, array $blocks = array())
    {
        $__internal_371f53ce2fb586f7fde829c6440fcdfd98e17e1e807db1cdeb3730ad839ddeb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_371f53ce2fb586f7fde829c6440fcdfd98e17e1e807db1cdeb3730ad839ddeb3->enter($__internal_371f53ce2fb586f7fde829c6440fcdfd98e17e1e807db1cdeb3730ad839ddeb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo "Pedido nº ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 3, $this->getSourceContext()); })()), "numero", array()), "html", null, true);
        echo " - Emissão: ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 3, $this->getSourceContext()); })()), "emissao", array()), "d/m/Y"), "html", null, true);
        echo " ";
        
        $__internal_371f53ce2fb586f7fde829c6440fcdfd98e17e1e807db1cdeb3730ad839ddeb3->leave($__internal_371f53ce2fb586f7fde829c6440fcdfd98e17e1e807db1cdeb3730ad839ddeb3_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_c554460f08f42ab192f3b54fc4335441c433c386ff6c1ee1cf5c15d9b9a2ddf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c554460f08f42ab192f3b54fc4335441c433c386ff6c1ee1cf5c15d9b9a2ddf7->enter($__internal_c554460f08f42ab192f3b54fc4335441c433c386ff6c1ee1cf5c15d9b9a2ddf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg pull-right btn-danger btn-fill\">Remover pedido</a>
<p>Pedido realizado por <b>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 7, $this->getSourceContext()); })()), "cliente", array()), "nome", array()), "html", null, true);
        echo "</b></p>
<h3 class=\"title\">Valor total: R\$ ";
        // line 8
        echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 8, $this->getSourceContext()); })()), "total", array()), array("." => ",")), "html", null, true);
        echo "</h3>
<div class=\"clearfix\"><hr></div>
<div class=\"table-responsive\">
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["pedido"] ?? null), "itempedidos", array(), "any", true, true)) {
            // line 12
            echo "    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Desconto</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pedido"]) || array_key_exists("pedido", $context) ? $context["pedido"] : (function () { throw new Twig_Error_Runtime('Variable "pedido" does not exist.', 23, $this->getSourceContext()); })()), "itempedidos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 24
                echo "            <tr>
                <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "produto", array()), "nome", array()), "html", null, true);
                echo "</td>
                <td>R\$ ";
                // line 26
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "precoUnitario", array()), array("." => ",")), "html", null, true);
                echo "</td>
                <td>";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "quantidade", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "percentualDesconto", array()), "html", null, true);
                echo " %</td>
                <td>R\$ ";
                // line 29
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["item"], "total", array()), array("." => ",")), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "        </tbody>
    </table>
    ";
        } else {
            // line 35
            echo "        oi
    ";
        }
        // line 37
        echo "</div>
";
        
        $__internal_c554460f08f42ab192f3b54fc4335441c433c386ff6c1ee1cf5c15d9b9a2ddf7->leave($__internal_c554460f08f42ab192f3b54fc4335441c433c386ff6c1ee1cf5c15d9b9a2ddf7_prof);

    }

    // line 40
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_61051d25b71276846f48193f85349f69ea3ebeef85cb8b722cde346c5f0cb536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61051d25b71276846f48193f85349f69ea3ebeef85cb8b722cde346c5f0cb536->enter($__internal_61051d25b71276846f48193f85349f69ea3ebeef85cb8b722cde346c5f0cb536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 41
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "message"), "method", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 41, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method") != null))) {
            // line 42
            echo "<script>
    \$.notify({
        icon: 'pe-7s-info',
        message: \"";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method"), "html", null, true);
            echo "\"
    }, {
        type: 'warning'
    });
</script>
";
        }
        
        $__internal_61051d25b71276846f48193f85349f69ea3ebeef85cb8b722cde346c5f0cb536->leave($__internal_61051d25b71276846f48193f85349f69ea3ebeef85cb8b722cde346c5f0cb536_prof);

    }

    public function getTemplateName()
    {
        return "pedido/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 45,  160 => 42,  158 => 41,  152 => 40,  144 => 37,  140 => 35,  135 => 32,  126 => 29,  122 => 28,  118 => 27,  114 => 26,  110 => 25,  107 => 24,  103 => 23,  90 => 12,  88 => 11,  82 => 8,  78 => 7,  74 => 6,  71 => 5,  65 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista de Pedidos{% endblock %}
{% block help %}Pedido nº {{pedido.numero}} - Emissão: {{pedido.emissao|date('d/m/Y')}} {% endblock %}
{% block content %}

<a href=\"{{path('pedido_delete', {'id': pedido.id})}}\" class=\"btn btn-lg pull-right btn-danger btn-fill\">Remover pedido</a>
<p>Pedido realizado por <b>{{pedido.cliente.nome}}</b></p>
<h3 class=\"title\">Valor total: R\$ {{pedido.total|replace({'.':','})}}</h3>
<div class=\"clearfix\"><hr></div>
<div class=\"table-responsive\">
    {% if pedido.itempedidos is defined %}
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome do Produto</th>
                <th>Valor</th>
                <th>Quantidade</th>
                <th>Desconto</th>
                <th>Valor Total</th>
            </tr>
        </thead>
        <tbody>
            {% for item in pedido.itempedidos %}
            <tr>
                <td>{{item.produto.nome}}</td>
                <td>R\$ {{item.precoUnitario|replace({'.':','})}}</td>
                <td>{{item.quantidade}}</td>
                <td>{{item.percentualDesconto}} %</td>
                <td>R\$ {{item.total|replace({'.':','})}}</td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
    {% else %}
        oi
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
", "pedido/view.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pedido/view.html.twig");
    }
}
