<?php

/* base.html.twig */
class __TwigTemplate_81af8f1d83ebfe5dd2965234a3572fc450edf3ab17b802c76f87c4c52c6c2240 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'scripts' => array($this, 'block_scripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e6c828759e3c1b16327468042d4f02c4360437ebfd8de5428b03bc5e1bfa9d09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6c828759e3c1b16327468042d4f02c4360437ebfd8de5428b03bc5e1bfa9d09->enter($__internal_e6c828759e3c1b16327468042d4f02c4360437ebfd8de5428b03bc5e1bfa9d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"light/img/favicon.ico\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href=\"/css/main.css\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-color=\"red\" data-image=\"/light/img/sidebar-4.jpg\">
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\"><a href=\"/\" class=\"simple-text\">PDV1 |̣ DB1</a></div>
            <ul class=\"nav\">
                <li class=\"active\"><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_create");
        echo "\"><i class=\"pe-7s-cart\"></i><p>Fazer Pedido</p></a></li>
                <li><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pedido_index");
        echo "\"><i class=\"pe-7s-note\"></i><p>Pedidos</p></a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("produto_index");
        echo "\"><i class=\"pe-7s-shopbag\"></i><p>Produtos</p></a></li>
                <li><a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pessoa_index");
        echo "\"><i class=\"pe-7s-users\"></i><p>Clientes</p></a></li>
            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default navbar-fixed\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"#\"><p>PDV1 ";
        // line 32
        $this->displayBlock("title", $context, $blocks);
        echo "</p></a>
                </div>
            </div>
        </nav>


        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"header\">
                    <h4 class=\"title\">";
        // line 42
        $this->displayBlock("title", $context, $blocks);
        echo "</h4>
                        <p class=\"category\">";
        // line 43
        $this->displayBlock('help', $context, $blocks);
        echo "</p>
                    </div>
                    <div class=\"content\">
                        ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo "                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</body>

<script src=\"/js/jquery.3.2.1.min.js\" type=\"text/javascript\"></script> <script src=\"/js/bootstrap.min.js\" type=\"text/javascript\"></script> <script src=\"/js/bootstrap-notify.js\"></script> <script src=\"/js/light-bootstrap-dashboard.js?v=1.4.0\"></script>
";
        // line 58
        $this->displayBlock('scripts', $context, $blocks);
        // line 59
        echo "</html>
";
        
        $__internal_e6c828759e3c1b16327468042d4f02c4360437ebfd8de5428b03bc5e1bfa9d09->leave($__internal_e6c828759e3c1b16327468042d4f02c4360437ebfd8de5428b03bc5e1bfa9d09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e598779a506ba18145ec152cd65c505c54bb6d75e01215a90cde27b819f4a09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e598779a506ba18145ec152cd65c505c54bb6d75e01215a90cde27b819f4a09->enter($__internal_4e598779a506ba18145ec152cd65c505c54bb6d75e01215a90cde27b819f4a09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "PDV1";
        
        $__internal_4e598779a506ba18145ec152cd65c505c54bb6d75e01215a90cde27b819f4a09->leave($__internal_4e598779a506ba18145ec152cd65c505c54bb6d75e01215a90cde27b819f4a09_prof);

    }

    // line 43
    public function block_help($context, array $blocks = array())
    {
        $__internal_7836ace38d54ce30201de03346bbf7e69ac56b884777d7c6c456220bfb33dfc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7836ace38d54ce30201de03346bbf7e69ac56b884777d7c6c456220bfb33dfc9->enter($__internal_7836ace38d54ce30201de03346bbf7e69ac56b884777d7c6c456220bfb33dfc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        
        $__internal_7836ace38d54ce30201de03346bbf7e69ac56b884777d7c6c456220bfb33dfc9->leave($__internal_7836ace38d54ce30201de03346bbf7e69ac56b884777d7c6c456220bfb33dfc9_prof);

    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        $__internal_bb95afc1f4612c8445b289efc80bef5def6662c98d852735e03d86d10b5f1dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb95afc1f4612c8445b289efc80bef5def6662c98d852735e03d86d10b5f1dbe->enter($__internal_bb95afc1f4612c8445b289efc80bef5def6662c98d852735e03d86d10b5f1dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_bb95afc1f4612c8445b289efc80bef5def6662c98d852735e03d86d10b5f1dbe->leave($__internal_bb95afc1f4612c8445b289efc80bef5def6662c98d852735e03d86d10b5f1dbe_prof);

    }

    // line 58
    public function block_scripts($context, array $blocks = array())
    {
        $__internal_bce6fc8acf45112cca25e6ffdc43817af8106096868cf1bb4887e3f10f1f9166 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bce6fc8acf45112cca25e6ffdc43817af8106096868cf1bb4887e3f10f1f9166->enter($__internal_bce6fc8acf45112cca25e6ffdc43817af8106096868cf1bb4887e3f10f1f9166_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_bce6fc8acf45112cca25e6ffdc43817af8106096868cf1bb4887e3f10f1f9166->leave($__internal_bce6fc8acf45112cca25e6ffdc43817af8106096868cf1bb4887e3f10f1f9166_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  145 => 46,  134 => 43,  122 => 7,  114 => 59,  112 => 58,  99 => 47,  97 => 46,  91 => 43,  87 => 42,  74 => 32,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  34 => 7,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"pt-BR\">
<head>
    <meta charset=\"utf-8\" />
    <link rel=\"icon\" type=\"image/png\" href=\"light/img/favicon.ico\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" />
    <title>{% block title %}PDV1{% endblock %}</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link href=\"/css/main.css\" rel=\"stylesheet\" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

<div class=\"wrapper\">
    <div class=\"sidebar\" data-color=\"red\" data-image=\"/light/img/sidebar-4.jpg\">
        <div class=\"sidebar-wrapper\">
            <div class=\"logo\"><a href=\"/\" class=\"simple-text\">PDV1 |̣ DB1</a></div>
            <ul class=\"nav\">
                <li class=\"active\"><a href=\"{{path('pedido_create')}}\"><i class=\"pe-7s-cart\"></i><p>Fazer Pedido</p></a></li>
                <li><a href=\"{{path('pedido_index')}}\"><i class=\"pe-7s-note\"></i><p>Pedidos</p></a></li>
                <li><a href=\"{{path('produto_index')}}\"><i class=\"pe-7s-shopbag\"></i><p>Produtos</p></a></li>
                <li><a href=\"{{path('pessoa_index')}}\"><i class=\"pe-7s-users\"></i><p>Clientes</p></a></li>
            </ul>
        </div>
    </div>

    <div class=\"main-panel\">
        <nav class=\"navbar navbar-default navbar-fixed\">
            <div class=\"container-fluid\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"><span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button>
                    <a class=\"navbar-brand\" href=\"#\"><p>PDV1 {{ block('title') }}</p></a>
                </div>
            </div>
        </nav>


        <div class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"card\">
                    <div class=\"header\">
                    <h4 class=\"title\">{{ block('title') }}</h4>
                        <p class=\"category\">{% block help %}{% endblock %}</p>
                    </div>
                    <div class=\"content\">
                        {% block content %}{% endblock %}
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>
</body>

<script src=\"/js/jquery.3.2.1.min.js\" type=\"text/javascript\"></script> <script src=\"/js/bootstrap.min.js\" type=\"text/javascript\"></script> <script src=\"/js/bootstrap-notify.js\"></script> <script src=\"/js/light-bootstrap-dashboard.js?v=1.4.0\"></script>
{% block scripts %}{% endblock %}
</html>
", "base.html.twig", "/Users/jpereira/Desktop/PDV/pdv1/templates/base.html.twig");
    }
}
