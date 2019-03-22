<?php

/* assets/fa/_fixed-width.scss */
class __TwigTemplate_27b4e60c7929ac97568b966be57d49057f2ee57339ba7e76ffaac4664cec6d69 extends Twig_Template
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
        $__internal_756de68dbfabd3c16574101034294af77582a6d5a013d53b41227ccf6a6026ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756de68dbfabd3c16574101034294af77582a6d5a013d53b41227ccf6a6026ec->enter($__internal_756de68dbfabd3c16574101034294af77582a6d5a013d53b41227ccf6a6026ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_fixed-width.scss"));

        // line 1
        echo "// Fixed Width Icons
// -------------------------
.#{\$fa-css-prefix}-fw {
  width: (18em / 14);
  text-align: center;
}
";
        
        $__internal_756de68dbfabd3c16574101034294af77582a6d5a013d53b41227ccf6a6026ec->leave($__internal_756de68dbfabd3c16574101034294af77582a6d5a013d53b41227ccf6a6026ec_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_fixed-width.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Fixed Width Icons
// -------------------------
.#{\$fa-css-prefix}-fw {
  width: (18em / 14);
  text-align: center;
}
", "assets/fa/_fixed-width.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_fixed-width.scss");
    }
}
