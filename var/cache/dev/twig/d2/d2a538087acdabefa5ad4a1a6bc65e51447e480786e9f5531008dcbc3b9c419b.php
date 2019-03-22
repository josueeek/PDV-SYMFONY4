<?php

/* assets/main.scss */
class __TwigTemplate_21838d17cee8138e6c89ea7774c8a3ed29bcbb39155acc9e78a3953080593e39 extends Twig_Template
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
        $__internal_5355f5dd7b2a3737ee23b347f3e04d3021eea6ad1fd1619f31b5819b35bb2657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5355f5dd7b2a3737ee23b347f3e04d3021eea6ad1fd1619f31b5819b35bb2657->enter($__internal_5355f5dd7b2a3737ee23b347f3e04d3021eea6ad1fd1619f31b5819b35bb2657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/main.scss"));

        // line 1
        echo "@import url('vendor.css');

.modal-backdrop {
    position: inherit !important;
}
";
        
        $__internal_5355f5dd7b2a3737ee23b347f3e04d3021eea6ad1fd1619f31b5819b35bb2657->leave($__internal_5355f5dd7b2a3737ee23b347f3e04d3021eea6ad1fd1619f31b5819b35bb2657_prof);

    }

    public function getTemplateName()
    {
        return "assets/main.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@import url('vendor.css');

.modal-backdrop {
    position: inherit !important;
}
", "assets/main.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/main.scss");
    }
}
