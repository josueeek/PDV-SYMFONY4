<?php

/* produto/list.html.twig */
class __TwigTemplate_188d2892aca75ea182503b8fb65030a8b774b1deea4264c7b2a90a0593281baf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "produto/list.html.twig", 1);
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
        $__internal_0fa14cab6dc390f885f9372457687cdd2e4b59381a0eb8730d07acb18ac68fd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fa14cab6dc390f885f9372457687cdd2e4b59381a0eb8730d07acb18ac68fd7->enter($__internal_0fa14cab6dc390f885f9372457687cdd2e4b59381a0eb8730d07acb18ac68fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "produto/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fa14cab6dc390f885f9372457687cdd2e4b59381a0eb8730d07acb18ac68fd7->leave($__internal_0fa14cab6dc390f885f9372457687cdd2e4b59381a0eb8730d07acb18ac68fd7_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b562bf1316c1b1e55937e5c4f6b6596e7da97a4c600f6a2f738fbe8092143be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b562bf1316c1b1e55937e5c4f6b6596e7da97a4c600f6a2f738fbe8092143be->enter($__internal_2b562bf1316c1b1e55937e5c4f6b6596e7da97a4c600f6a2f738fbe8092143be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Produtos";
        
        $__internal_2b562bf1316c1b1e55937e5c4f6b6596e7da97a4c600f6a2f738fbe8092143be->leave($__internal_2b562bf1316c1b1e55937e5c4f6b6596e7da97a4c600f6a2f738fbe8092143be_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_468c7be1f68363150288e8513d68555caea20c09d8000d9f3c5ed7c620c9c67d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_468c7be1f68363150288e8513d68555caea20c09d8000d9f3c5ed7c620c9c67d->enter($__internal_468c7be1f68363150288e8513d68555caea20c09d8000d9f3c5ed7c620c9c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_search");
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_create");
        echo "\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    ";
        // line 23
        if (array_key_exists("produtos", $context)) {
            // line 24
            echo "    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Preço Unitário</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["produtos"]) || array_key_exists("produtos", $context) ? $context["produtos"] : (function () { throw new Twig_Error_Runtime('Variable "produtos" does not exist.', 34, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produto"]) {
                // line 35
                echo "            <tr>
                <td>";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "nome", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "codigo", array()), "html", null, true);
                echo "</td>
                <td>R\$ ";
                // line 38
                echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "precoUnitario", array()), array("." => ",")), "html", null, true);
                echo "</td>
                <td><a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_update", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()))), "html", null, true);
                echo "\">Editar</a></td>
                <td><a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_delete", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["produto"], "id", array()))), "html", null, true);
                echo "\">Remover</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "        </tbody>
    </table>
    ";
        }
        // line 46
        echo "</div>
";
        
        $__internal_468c7be1f68363150288e8513d68555caea20c09d8000d9f3c5ed7c620c9c67d->leave($__internal_468c7be1f68363150288e8513d68555caea20c09d8000d9f3c5ed7c620c9c67d_prof);

    }

    // line 49
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_d7e9fb3503f6b637cd15d337d9978473354f3cc38b93845130d8e3cfdb6fd9e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7e9fb3503f6b637cd15d337d9978473354f3cc38b93845130d8e3cfdb6fd9e1->enter($__internal_d7e9fb3503f6b637cd15d337d9978473354f3cc38b93845130d8e3cfdb6fd9e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 50
        if ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["app"] ?? null), "request", array(), "any", false, true), "get", array(0 => "message"), "method", true, true) && (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 50, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method") != null))) {
            // line 51
            echo "<script>
    \$.notify({
        icon: 'pe-7s-info',
        message: \"";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 54, $this->getSourceContext()); })()), "request", array()), "get", array(0 => "message"), "method"), "html", null, true);
            echo "\"
    }, {
        type: 'warning'
    });
</script>
";
        }
        
        $__internal_d7e9fb3503f6b637cd15d337d9978473354f3cc38b93845130d8e3cfdb6fd9e1->leave($__internal_d7e9fb3503f6b637cd15d337d9978473354f3cc38b93845130d8e3cfdb6fd9e1_prof);

    }

    public function getTemplateName()
    {
        return "produto/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 54,  148 => 51,  146 => 50,  140 => 49,  132 => 46,  127 => 43,  118 => 40,  114 => 39,  110 => 38,  106 => 37,  102 => 36,  99 => 35,  95 => 34,  83 => 24,  81 => 23,  72 => 17,  59 => 7,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Lista de Produtos{% endblock %}
{% block content %}

<div class=\"row\">
    <div class=\"col-md-9\">
        <form action=\"{{path('produto_search')}}\" method=\"POST\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
                <span class=\"input-group-btn\">
                    <button class=\"btn btn-primary\" type=\"button\">Pesquisar</button>
                </span>
            </div>
        </form><br>
    </div>
    <div class=\"col-md-3\">
        <a href=\"{{path('produto_create')}}\" class=\"btn btn-success btn-block\">Novo</a>
    </div>
</div>


<div class=\"table-responsive\">
    {% if produtos is defined %}
    <table class=\"table table-striped table-hover table-bordered\">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Código</th>
                <th>Preço Unitário</th>
                <th colspan=\"2\">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            {% for produto in produtos %}
            <tr>
                <td>{{produto.nome}}</td>
                <td>{{produto.codigo}}</td>
                <td>R\$ {{produto.precoUnitario|replace({'.':','})}}</td>
                <td><a href=\"{{path('produto_update', {'id': produto.id})}}\">Editar</a></td>
                <td><a href=\"{{path('produto_delete', {'id': produto.id})}}\">Remover</a></td>
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
", "produto/list.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/produto/list.html.twig");
    }
}
