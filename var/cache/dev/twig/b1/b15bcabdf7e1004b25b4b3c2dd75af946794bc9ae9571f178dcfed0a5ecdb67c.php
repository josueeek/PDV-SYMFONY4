<?php

/* assets/pedido.js */
class __TwigTemplate_53eea92be36f3922a4bd26c04634f943ec8c876b229a113da268b2bdd0e25b24 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1799547745bb2ec699fc54c8cb0f85a6b298ecaef0df63659c5784831a9359fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1799547745bb2ec699fc54c8cb0f85a6b298ecaef0df63659c5784831a9359fe->enter($__internal_1799547745bb2ec699fc54c8cb0f85a6b298ecaef0df63659c5784831a9359fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/pedido.js"));

        // line 1
        echo "\$(document).ready(function() {
    \$.ajax({
        url: '/pessoa',
        type: 'POST',
        dataType: 'json',
        data: {api: 1},
    })
    .done(function(data) {
        montaListaPessoas(data);
    });
})

\$(\"#finish\").submit(function(event) {
    event.preventDefault();
    json = {};

    json.cliente_id = \$(\"#cliente_id\").val();
    json.total = parseFloat(\$(\"#total\").html()).toFixed(2);
    json.items = itemPedido();

    console.log(json);

    \$.ajax({
        url: '/pedido/register',
        type: 'POST',
        data: JSON.stringify(json),
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
    })
    .done(function(data) {

        if (data.errors) {
            \$.each(data.errors, function(index, val) {

                \$.notify({
                    icon: 'pe-7s-attention',
                    message: val
                },{
                    type: 'danger'
                });

            });
        } else {

            \$.notify({
                icon: 'pe-7s-info',
                message: \"O pedido foi registrado!\"
            },{
                type: 'success'
            });

        }

    });
});

\$(\"#search\").click(function() {
    var term = \$(\"#term\").val();

    \$.ajax({
        url: '/produto/search',
        type: 'POST',
        dataType: 'json',
        data: {term: term, api: 1},
    })
    .done(function(data) {
        montaLista(data);
    });

});

\$(\"#itemForm\").submit(function(event) {
    event.preventDefault();

    \$(\"#modal\").modal('hide');

    \$.each(\$(\".checkb:checked\"), function(index, val) {

        var nome = \$(this).parent().parent().children('td')[1].innerText;
        var preco = parseFloat(\$(this).parent().parent().children('td')[2].innerText);
        var quantidade = parseFloat(\$(\"#quantidade\").val());
        var porcentagem = parseFloat(\$(\"#porcentagem\").val());
        var preco_final = (preco - (preco * (porcentagem / 100))) * quantidade;

        var tr = \$(\"<tr/>\").attr('data-id', \$(this).val());
        \$(\"<td/>\").html(nome).appendTo(tr);
        \$(\"<td/>\").html(preco.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(quantidade.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(porcentagem.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").attr('data-total', preco_final.toFixed(2)).html(preco_final.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(\"<button class='removeItem btn btn-danger'>X</button>\").appendTo(tr);

        tr.appendTo(\$(\"#items\"));

        var total = parseFloat(\$(\"#total\").text()) + preco_final;
        \$(\"#total\").html(total.toFixed(2));
    });

    \$(\"#choose-items\").empty();

});

function montaLista(data) {
    \$(\"#choose-items\").empty();
    \$.each(data, function(index, val) {

        var tr = \$(\"<tr/>\");
        \$(\"<td/>\").html(\"<input type='radio' value='\" + val.id + \"' name='item' class='checkb' />\").appendTo(tr);
        \$(\"<td/>\").html(val.nome).appendTo(tr);
        \$(\"<td/>\").html(val.precoUnitario).appendTo(tr);
        \$(\"<td/>\").html(val.codigo).appendTo(tr);

        tr.appendTo(\$(\"#choose-items\"));
    });


    \$(\"#modal\").modal('show');

}

function itemPedido() {
    items = [];

    \$.each(\$(\"tr[data-id]\"), function(index, val) {
        item = {}
        var row = \$.parseHTML(val.innerHTML);

        item.produto_id = val.getAttribute('data-id');
        item.quantidade = parseFloat(row[2].innerText).toFixed(2);
        item.percentualDesconto = parseFloat(row[3].innerText).toFixed(2);
        item.precoUnitario = parseFloat(row[1].innerText).toFixed(2);
        item.total = parseFloat(row[4].innerText).toFixed(2);

        items.push(item);
    });

    return items;
}

function montaListaPessoas(data) {

    \$.each(data, function(index, val) {

        \$(\"select[name=cliente_id]\").append('<option value=\"'+val.id+'\">'+val.nome+'</option>');
    });

}

\$(document).on('click', \".removeItem\", function() {
    var parent = \$(this).parent().parent();

    var total = parseFloat(\$(\"#total\").text()) - parseFloat(parent.children(\"td[data-total]\")[0].innerText);
    \$(\"#total\").html(total.toFixed(2));

    console.log(parent);

    parent.remove();
});


\$(document).ready(function() {
  \$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
";
        
        $__internal_1799547745bb2ec699fc54c8cb0f85a6b298ecaef0df63659c5784831a9359fe->leave($__internal_1799547745bb2ec699fc54c8cb0f85a6b298ecaef0df63659c5784831a9359fe_prof);

    }

    public function getTemplateName()
    {
        return "assets/pedido.js";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("\$(document).ready(function() {
    \$.ajax({
        url: '/pessoa',
        type: 'POST',
        dataType: 'json',
        data: {api: 1},
    })
    .done(function(data) {
        montaListaPessoas(data);
    });
})

\$(\"#finish\").submit(function(event) {
    event.preventDefault();
    json = {};

    json.cliente_id = \$(\"#cliente_id\").val();
    json.total = parseFloat(\$(\"#total\").html()).toFixed(2);
    json.items = itemPedido();

    console.log(json);

    \$.ajax({
        url: '/pedido/register',
        type: 'POST',
        data: JSON.stringify(json),
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
    })
    .done(function(data) {

        if (data.errors) {
            \$.each(data.errors, function(index, val) {

                \$.notify({
                    icon: 'pe-7s-attention',
                    message: val
                },{
                    type: 'danger'
                });

            });
        } else {

            \$.notify({
                icon: 'pe-7s-info',
                message: \"O pedido foi registrado!\"
            },{
                type: 'success'
            });

        }

    });
});

\$(\"#search\").click(function() {
    var term = \$(\"#term\").val();

    \$.ajax({
        url: '/produto/search',
        type: 'POST',
        dataType: 'json',
        data: {term: term, api: 1},
    })
    .done(function(data) {
        montaLista(data);
    });

});

\$(\"#itemForm\").submit(function(event) {
    event.preventDefault();

    \$(\"#modal\").modal('hide');

    \$.each(\$(\".checkb:checked\"), function(index, val) {

        var nome = \$(this).parent().parent().children('td')[1].innerText;
        var preco = parseFloat(\$(this).parent().parent().children('td')[2].innerText);
        var quantidade = parseFloat(\$(\"#quantidade\").val());
        var porcentagem = parseFloat(\$(\"#porcentagem\").val());
        var preco_final = (preco - (preco * (porcentagem / 100))) * quantidade;

        var tr = \$(\"<tr/>\").attr('data-id', \$(this).val());
        \$(\"<td/>\").html(nome).appendTo(tr);
        \$(\"<td/>\").html(preco.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(quantidade.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(porcentagem.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").attr('data-total', preco_final.toFixed(2)).html(preco_final.toFixed(2)).appendTo(tr);
        \$(\"<td/>\").html(\"<button class='removeItem btn btn-danger'>X</button>\").appendTo(tr);

        tr.appendTo(\$(\"#items\"));

        var total = parseFloat(\$(\"#total\").text()) + preco_final;
        \$(\"#total\").html(total.toFixed(2));
    });

    \$(\"#choose-items\").empty();

});

function montaLista(data) {
    \$(\"#choose-items\").empty();
    \$.each(data, function(index, val) {

        var tr = \$(\"<tr/>\");
        \$(\"<td/>\").html(\"<input type='radio' value='\" + val.id + \"' name='item' class='checkb' />\").appendTo(tr);
        \$(\"<td/>\").html(val.nome).appendTo(tr);
        \$(\"<td/>\").html(val.precoUnitario).appendTo(tr);
        \$(\"<td/>\").html(val.codigo).appendTo(tr);

        tr.appendTo(\$(\"#choose-items\"));
    });


    \$(\"#modal\").modal('show');

}

function itemPedido() {
    items = [];

    \$.each(\$(\"tr[data-id]\"), function(index, val) {
        item = {}
        var row = \$.parseHTML(val.innerHTML);

        item.produto_id = val.getAttribute('data-id');
        item.quantidade = parseFloat(row[2].innerText).toFixed(2);
        item.percentualDesconto = parseFloat(row[3].innerText).toFixed(2);
        item.precoUnitario = parseFloat(row[1].innerText).toFixed(2);
        item.total = parseFloat(row[4].innerText).toFixed(2);

        items.push(item);
    });

    return items;
}

function montaListaPessoas(data) {

    \$.each(data, function(index, val) {

        \$(\"select[name=cliente_id]\").append('<option value=\"'+val.id+'\">'+val.nome+'</option>');
    });

}

\$(document).on('click', \".removeItem\", function() {
    var parent = \$(this).parent().parent();

    var total = parseFloat(\$(\"#total\").text()) - parseFloat(parent.children(\"td[data-total]\")[0].innerText);
    \$(\"#total\").html(total.toFixed(2));

    console.log(parent);

    parent.remove();
});


\$(document).ready(function() {
  \$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
", "assets/pedido.js", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/pedido.js");
    }
}
