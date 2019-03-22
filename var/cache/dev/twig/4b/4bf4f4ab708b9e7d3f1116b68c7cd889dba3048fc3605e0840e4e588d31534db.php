<?php

/* pedido/create.html.twig */
class __TwigTemplate_ff164444fd0f4b7bee03060e945ffb819845c2ed4c0b66850a399f4db3a40e78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pedido/create.html.twig", 1);
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
        $__internal_6e48b2d08d8f2745d12703ca4deef5cbb02c76ec231240c46738573f7a2cdbad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e48b2d08d8f2745d12703ca4deef5cbb02c76ec231240c46738573f7a2cdbad->enter($__internal_6e48b2d08d8f2745d12703ca4deef5cbb02c76ec231240c46738573f7a2cdbad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pedido/create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e48b2d08d8f2745d12703ca4deef5cbb02c76ec231240c46738573f7a2cdbad->leave($__internal_6e48b2d08d8f2745d12703ca4deef5cbb02c76ec231240c46738573f7a2cdbad_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_9090a037612d62eac55430235f323100f1e0d22358b03285d21da92ab92754fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9090a037612d62eac55430235f323100f1e0d22358b03285d21da92ab92754fe->enter($__internal_9090a037612d62eac55430235f323100f1e0d22358b03285d21da92ab92754fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Registrar Pedido de Venda";
        
        $__internal_9090a037612d62eac55430235f323100f1e0d22358b03285d21da92ab92754fe->leave($__internal_9090a037612d62eac55430235f323100f1e0d22358b03285d21da92ab92754fe_prof);

    }

    // line 3
    public function block_help($context, array $blocks = array())
    {
        $__internal_ed0d579eaf36df93d449befe0f4c45f3a6c08c0b0d04bd718003f18d35809178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0d579eaf36df93d449befe0f4c45f3a6c08c0b0d04bd718003f18d35809178->enter($__internal_ed0d579eaf36df93d449befe0f4c45f3a6c08c0b0d04bd718003f18d35809178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        echo "Formulário de Cadastro de Pedidos";
        
        $__internal_ed0d579eaf36df93d449befe0f4c45f3a6c08c0b0d04bd718003f18d35809178->leave($__internal_ed0d579eaf36df93d449befe0f4c45f3a6c08c0b0d04bd718003f18d35809178_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_70635e44693fc903d32550c965224c51f9ada6cc107e172fee2a921d50b4d9ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70635e44693fc903d32550c965224c51f9ada6cc107e172fee2a921d50b4d9ca->enter($__internal_70635e44693fc903d32550c965224c51f9ada6cc107e172fee2a921d50b4d9ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "<form id=\"finish\">
<div class=\"form-group\">
    <label>Cliente</label>
    <select name=\"cliente_id\" id=\"cliente_id\" class=\"form-control\" required><option value=\"\">Selecione um cliente</option></select>
</div>
<div class=\"table-responsive\">
    <label>Itens</label>
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor Unitário</th>
                <th>Quantidade</th>
                <th>Percentual Desconto</th>
                <th>Valor Aplicado</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody id=\"items\"></tbody>
    </table>
</div>
<label>Pesquisar produto</label>
<div class=\"input-group\">
    <input type=\"text\" id=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
    <span class=\"input-group-btn\">
        <button class=\"btn btn-primary btn-fill\" type=\"button\" id=\"search\">Pesquisar</button>
    </span>
</div>
<div class=\"clearfix\"><br></div>
<div class=\"row\">
    <div class=\"col-md-6\"><label>Total em R\$</label><h2 id=\"total\" class=\"title\">0.00</h2></div>
    <div class=\"col-md-6 text-right\"><button class=\"btn btn-primary btn-lg\" type=\"submit\">Fechar pedido</button></div>
</div>
</form>

<div class=\"modal fade\" tabindex=\"999\" id=\"modal\" data-backdrop=\"static\">
    <div class=\"modal-dialog\">
        <form class=\"modal-content\" id=\"itemForm\">
            <div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span></button><h4 class=\"modal-title\">Adicionar item</h4></div>
            <div class=\"modal-body table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Nome</th>
                            <th>Valor Unitário</th>
                            <th>Código</th>
                        </tr>
                    </thead>
                    <tbody id=\"choose-items\"></tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>Percentual Desconto</label>
                            <input type=\"number\" value=\"0\" step=\"0.01\" min=\"0\" max=\"100\" id=\"porcentagem\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>Quantidade</label>
                            <input type=\"number\" value=\"1\" step=\"0.01\" min=\"1\" id=\"quantidade\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <button type=\"submit\" id=\"addItem\" class=\"btn btn-success btn-fill btn-lg btn-block\">Adicionar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

";
        
        $__internal_70635e44693fc903d32550c965224c51f9ada6cc107e172fee2a921d50b4d9ca->leave($__internal_70635e44693fc903d32550c965224c51f9ada6cc107e172fee2a921d50b4d9ca_prof);

    }

    // line 82
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_090ecfde2764de8e1510ad3a0ea46710fb723b2a2e0eaa009f9c96374221bad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090ecfde2764de8e1510ad3a0ea46710fb723b2a2e0eaa009f9c96374221bad5->enter($__internal_090ecfde2764de8e1510ad3a0ea46710fb723b2a2e0eaa009f9c96374221bad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        // line 83
        echo "<script src=\"/js/pedido.js\" type=\"text/javascript\"></script>
";
        
        $__internal_090ecfde2764de8e1510ad3a0ea46710fb723b2a2e0eaa009f9c96374221bad5->leave($__internal_090ecfde2764de8e1510ad3a0ea46710fb723b2a2e0eaa009f9c96374221bad5_prof);

    }

    public function getTemplateName()
    {
        return "pedido/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 83,  150 => 82,  67 => 5,  61 => 4,  49 => 3,  37 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}
{% block title %}Registrar Pedido de Venda{% endblock %}
{% block help %}Formulário de Cadastro de Pedidos{% endblock %}
{% block content %}
<form id=\"finish\">
<div class=\"form-group\">
    <label>Cliente</label>
    <select name=\"cliente_id\" id=\"cliente_id\" class=\"form-control\" required><option value=\"\">Selecione um cliente</option></select>
</div>
<div class=\"table-responsive\">
    <label>Itens</label>
    <table class=\"table table-striped table-bordered\">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Valor Unitário</th>
                <th>Quantidade</th>
                <th>Percentual Desconto</th>
                <th>Valor Aplicado</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody id=\"items\"></tbody>
    </table>
</div>
<label>Pesquisar produto</label>
<div class=\"input-group\">
    <input type=\"text\" id=\"term\" class=\"form-control\" placeholder=\"Procurar por...\">
    <span class=\"input-group-btn\">
        <button class=\"btn btn-primary btn-fill\" type=\"button\" id=\"search\">Pesquisar</button>
    </span>
</div>
<div class=\"clearfix\"><br></div>
<div class=\"row\">
    <div class=\"col-md-6\"><label>Total em R\$</label><h2 id=\"total\" class=\"title\">0.00</h2></div>
    <div class=\"col-md-6 text-right\"><button class=\"btn btn-primary btn-lg\" type=\"submit\">Fechar pedido</button></div>
</div>
</form>

<div class=\"modal fade\" tabindex=\"999\" id=\"modal\" data-backdrop=\"static\">
    <div class=\"modal-dialog\">
        <form class=\"modal-content\" id=\"itemForm\">
            <div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span></button><h4 class=\"modal-title\">Adicionar item</h4></div>
            <div class=\"modal-body table-responsive\">
                <table class=\"table\">
                    <thead>
                        <tr>
                            <th>&nbsp;</th>
                            <th>Nome</th>
                            <th>Valor Unitário</th>
                            <th>Código</th>
                        </tr>
                    </thead>
                    <tbody id=\"choose-items\"></tbody>
                </table>
            </div>
            <div class=\"modal-footer\">
                <div class=\"row\">
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>Percentual Desconto</label>
                            <input type=\"number\" value=\"0\" step=\"0.01\" min=\"0\" max=\"100\" id=\"porcentagem\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <div class=\"form-group\">
                            <label>Quantidade</label>
                            <input type=\"number\" value=\"1\" step=\"0.01\" min=\"1\" id=\"quantidade\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"col-md-4\">
                        <button type=\"submit\" id=\"addItem\" class=\"btn btn-success btn-fill btn-lg btn-block\">Adicionar</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</div>

{% endblock %}
{% block scripts %}
<script src=\"/js/pedido.js\" type=\"text/javascript\"></script>
{% endblock %}
", "pedido/create.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/pedido/create.html.twig");
    }
}
