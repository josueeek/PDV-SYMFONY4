<?php

/* pessoa/update.html.twig */
class __TwigTemplate_d8016ebcadf2569042bab6ba615cfef9849dcf239f8ec2f4dc4ec5bcc34e946f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pessoa/update.html.twig", 1);
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
        $__internal_c39947f2a456c20ae24853eef115d4bda214bdf1c8ee445aef0fde194210965e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c39947f2a456c20ae24853eef115d4bda214bdf1c8ee445aef0fde194210965e->enter($__internal_c39947f2a456c20ae24853eef115d4bda214bdf1c8ee445aef0fde194210965e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pessoa/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c39947f2a456c20ae24853eef115d4bda214bdf1c8ee445aef0fde194210965e->leave($__internal_c39947f2a456c20ae24853eef115d4bda214bdf1c8ee445aef0fde194210965e_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_c61a70053a3a420b135d6eac00508fb709e0526e5b68ac1ee994025b9a91577c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61a70053a3a420b135d6eac00508fb709e0526e5b68ac1ee994025b9a91577c->enter($__internal_c61a70053a3a420b135d6eac00508fb709e0526e5b68ac1ee994025b9a91577c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Editar Cliente";
        
        $__internal_c61a70053a3a420b135d6eac00508fb709e0526e5b68ac1ee994025b9a91577c->leave($__internal_c61a70053a3a420b135d6eac00508fb709e0526e5b68ac1ee994025b9a91577c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b4542c7d13421d7ed9c64d015cb0ad53a3e7ba63ce2a0ba888718ff06695075c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4542c7d13421d7ed9c64d015cb0ad53a3e7ba63ce2a0ba888718ff06695075c->enter($__internal_b4542c7d13421d7ed9c64d015cb0ad53a3e7ba63ce2a0ba888718ff06695075c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_edit");
        echo "\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-8\">
            <div class=\"form-group\">
                <label>Nome Completo</label>
                <input type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 9, $this->getSourceContext()); })()), "nome", array()), "html", null, true);
        echo "\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome completo\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Data de Nascimento</label>
                <input type=\"text\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 15, $this->getSourceContext()); })()), "dataNascimento", array()), "d/m/Y"), "html", null, true);
        echo "\" maxlenght=\"10\" class=\"form-control\" name=\"dataNascimento\" data-mask=\"00/00/0000\" required placeholder=\"dd/mm/aaaa\" />
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"id\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 19, $this->getSourceContext()); })()), "id", array()), "html", null, true);
        echo "\">
    <button class=\"btn btn-primary btn-fill pull-right\">Gravar</button>
    <div class=\"clearfix\"></div>
</form>
";
        
        $__internal_b4542c7d13421d7ed9c64d015cb0ad53a3e7ba63ce2a0ba888718ff06695075c->leave($__internal_b4542c7d13421d7ed9c64d015cb0ad53a3e7ba63ce2a0ba888718ff06695075c_prof);

    }

    // line 24
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_8aa0d4dcf4106126b2cc4911e70794fee9d6238abef45de63efaff2449226bd2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa0d4dcf4106126b2cc4911e70794fee9d6238abef45de63efaff2449226bd2->enter($__internal_8aa0d4dcf4106126b2cc4911e70794fee9d6238abef45de63efaff2449226bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 25
        echo "<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

";
        // line 27
        if (array_key_exists("duplicado", $context)) {
            // line 28
            echo "<script>
    \$.notify({
        icon: 'pe-7s-delete-user',
        message: \"Esse nome já foi utilizado em outro cliente\"
    },{
        type: 'danger'
    });
</script>
";
        }
        // line 37
        echo "

";
        // line 39
        if (array_key_exists("errors", $context)) {
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 40, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 41
                echo "<script>
    \$.notify({
        icon: 'pe-7s-attention',
        message: \"";
                // line 44
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
        
        $__internal_8aa0d4dcf4106126b2cc4911e70794fee9d6238abef45de63efaff2449226bd2->leave($__internal_8aa0d4dcf4106126b2cc4911e70794fee9d6238abef45de63efaff2449226bd2_prof);

    }

    public function getTemplateName()
    {
        return "pessoa/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 44,  124 => 41,  120 => 40,  118 => 39,  114 => 37,  103 => 28,  101 => 27,  97 => 25,  91 => 24,  79 => 19,  72 => 15,  63 => 9,  54 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Editar Cliente{% endblock %}
{% block content %}
<form action=\"{{path('pessoa_edit')}}\" method=\"POST\">
    <div class=\"row cleafix\">
        <div class=\"col-md-8\">
            <div class=\"form-group\">
                <label>Nome Completo</label>
                <input type=\"text\" value=\"{{pessoa.nome}}\" class=\"form-control\" name=\"nome\" placeholder=\"Insira o nome completo\" required />
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"form-group\">
                <label>Data de Nascimento</label>
                <input type=\"text\" value=\"{{pessoa.dataNascimento|date('d/m/Y')}}\" maxlenght=\"10\" class=\"form-control\" name=\"dataNascimento\" data-mask=\"00/00/0000\" required placeholder=\"dd/mm/aaaa\" />
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"id\" value=\"{{pessoa.id}}\">
    <button class=\"btn btn-primary btn-fill pull-right\">Gravar</button>
    <div class=\"clearfix\"></div>
</form>
{% endblock %}
{% block scripts %}
<script src=\"/js/jquery.mask.js\" type=\"text/javascript\"></script>

{% if duplicado is defined %}
<script>
    \$.notify({
        icon: 'pe-7s-delete-user',
        message: \"Esse nome já foi utilizado em outro cliente\"
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
", "pessoa/update.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pessoa/update.html.twig");
    }
}
