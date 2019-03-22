<?php

/* assets/fa/_core.scss */
class __TwigTemplate_e24c93d1b0ff98b515cbb77b1ce32f2975c307d38cdd72fb5d1872f9079db4fa extends Twig_Template
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
        $__internal_f77daa27d77c945eb4bab0f32e9b445db02294cd671270e53e3f80579839009d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f77daa27d77c945eb4bab0f32e9b445db02294cd671270e53e3f80579839009d->enter($__internal_f77daa27d77c945eb4bab0f32e9b445db02294cd671270e53e3f80579839009d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_core.scss"));

        // line 1
        echo "// Base Class Definition
// -------------------------

.#{\$fa-css-prefix} {
  display: inline-block;
  font: normal normal normal #{\$fa-font-size-base}/#{\$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}
";
        
        $__internal_f77daa27d77c945eb4bab0f32e9b445db02294cd671270e53e3f80579839009d->leave($__internal_f77daa27d77c945eb4bab0f32e9b445db02294cd671270e53e3f80579839009d_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_core.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Base Class Definition
// -------------------------

.#{\$fa-css-prefix} {
  display: inline-block;
  font: normal normal normal #{\$fa-font-size-base}/#{\$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}
", "assets/fa/_core.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_core.scss");
    }
}
