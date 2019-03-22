<?php

/* assets/vendor.scss */
class __TwigTemplate_d0c6132575393402d61d033aaef671b8184b32d530524890cec24a63775a00cf extends Twig_Template
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
        $__internal_de467e0c274be39a154bbb0fe144ec7f8ddf6722e97450c79cf6c2471f671632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de467e0c274be39a154bbb0fe144ec7f8ddf6722e97450c79cf6c2471f671632->enter($__internal_de467e0c274be39a154bbb0fe144ec7f8ddf6722e97450c79cf6c2471f671632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/vendor.scss"));

        // line 1
        echo "@import 'node_modules/bootstrap/dist/css/bootstrap.min';
@import 'node_modules/animate.css/animate.min';
@import 'light/_main';
@import 'fa/_font-awesome';
";
        
        $__internal_de467e0c274be39a154bbb0fe144ec7f8ddf6722e97450c79cf6c2471f671632->leave($__internal_de467e0c274be39a154bbb0fe144ec7f8ddf6722e97450c79cf6c2471f671632_prof);

    }

    public function getTemplateName()
    {
        return "assets/vendor.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("@import 'node_modules/bootstrap/dist/css/bootstrap.min';
@import 'node_modules/animate.css/animate.min';
@import 'light/_main';
@import 'fa/_font-awesome';
", "assets/vendor.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/vendor.scss");
    }
}
