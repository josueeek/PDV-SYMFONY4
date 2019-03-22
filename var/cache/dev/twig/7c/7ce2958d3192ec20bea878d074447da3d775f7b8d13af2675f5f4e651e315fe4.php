<?php

/* pessoa/list.html.twig */
class __TwigTemplate_650f5f577f885ef50a2a9154d2be1e37c7e01abbc3c3a8c698ac7d205e8ed350 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pessoa/list.html.twig", 1);
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
        $__internal_fffe4894a363d39325beb46f7aa8b26bbc95df3ec685185fb8d21f28a550844f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fffe4894a363d39325beb46f7aa8b26bbc95df3ec685185fb8d21f28a550844f->enter($__internal_fffe4894a363d39325beb46f7aa8b26bbc95df3ec685185fb8d21f28a550844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pessoa/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fffe4894a363d39325beb46f7aa8b26bbc95df3ec685185fb8d21f28a550844f->leave($__internal_fffe4894a363d39325beb46f7aa8b26bbc95df3ec685185fb8d21f28a550844f_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b7f53447f0f1e22130f5e1a0239f1424a1086458c319c0a3faa741a88881a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b7f53447f0f1e22130f5e1a0239f1424a1086458c319c0a3faa741a88881a71->enter($__internal_3b7f53447f0f1e22130f5e1a0239f1424a1086458c319c0a3faa741a88881a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Clientes";
        
        $__internal_3b7f53447f0f1e22130f5e1a0239f1424a1086458c319c0a3faa741a88881a71->leave($__internal_3b7f53447f0f1e22130f5e1a0239f1424a1086458c319c0a3faa741a88881a71_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5729492d92775b2520307b223ce13c0d96be0d1d54feded40fb6a186f05d1a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5729492d92775b2520307b223ce13c0d96be0d1d54feded40fb6a186f05d1a6f->enter($__internal_5729492d92775b2520307b223ce13c0d96be0d1d54feded40fb6a186f05d1a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_search");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_create");
        echo "\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    ";
        // line 23
        if (array_key_exists("pessoas", $context)) {
            // line 24
            echo "    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) || array_key_exists("pessoas", $context) ? $context["pessoas"] : (function () { throw new Twig_Error_Runtime('Variable "pessoas" does not exist.', 33, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
                // line 34
                echo "            <tr>
                <td>";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "nome", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "dataNascimento", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "id", array()))), "html", null, true);
                echo "\">Editar</a></td>
                <td><a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["pessoa"], "id", array()))), "html", null, true);
                echo "\">Remover</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </tbody>
    </table>
    ";
        }
        // line 44
        echo "</div>
";
        
        $__internal_5729492d92775b2520307b223ce13c0d96be0d1d54feded40fb6a186f05d1a6f->leave($__internal_5729492d92775b2520307b223ce13c0d96be0d1d54feded40fb6a186f05d1a6f_prof);

    }

    // line 47
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_7586c4ccc169fb75cf714d5806b2af3d7aae2e3767a34a1eae9775fc5f60e6b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7586c4ccc169fb75cf714d5806b2af3d7aae2e3767a34a1eae9775fc5f60e6b6->enter($__internal_7586c4ccc169fb75cf714d5806b2af3d7aae2e3767a34a1eae9775fc5f60e6b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 48
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "message"), "method", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 48, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method") != null))) {
            // line 49
            echo "<script>
    \$.notify({
        icon: 'pe-7s-info',
        message: \"";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 52, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method"), "html", null, true);
            echo "\"
    }, {
        type: 'warning'
    });
</script>
";
        }
        
        $__internal_7586c4ccc169fb75cf714d5806b2af3d7aae2e3767a34a1eae9775fc5f60e6b6->leave($__internal_7586c4ccc169fb75cf714d5806b2af3d7aae2e3767a34a1eae9775fc5f60e6b6_prof);

    }

    public function getTemplateName()
    {
        return "pessoa/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 52,  143 => 49,  141 => 48,  135 => 47,  127 => 44,  122 => 41,  113 => 38,  109 => 37,  105 => 36,  101 => 35,  98 => 34,  94 => 33,  83 => 24,  81 => 23,  72 => 17,  59 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista de Clientes{% endblock %}
{% block content %}

<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"{{path('pessoa_search')}}\" method=\"POST\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\">Pesquisar</button>
                </span>
            </div>
        </form><br>
    </div>
    <div class=\"col-md-3\">
        <a href=\"{{path('pessoa_create')}}\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    {% if pessoas is defined %}
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome Completo</th>
                <th>Data de Nascimento</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for pessoa in pessoas %}
            <tr>
                <td>{{pessoa.nome}}</td>
                <td>{{pessoa.dataNascimento|date('d/m/Y')}}</td>
                <td><a href=\"{{path('pessoa_update', {'id': pessoa.id})}}\">Editar</a></td>
                <td><a href=\"{{path('pessoa_delete', {'id': pessoa.id})}}\">Remover</a></td>
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
", "pessoa/list.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pessoa/list.html.twig");
    }
}
