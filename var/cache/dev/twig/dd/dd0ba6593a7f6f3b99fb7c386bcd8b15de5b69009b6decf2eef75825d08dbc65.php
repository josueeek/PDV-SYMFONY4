<?php

/* assets/fa/_larger.scss */
class __TwigTemplate_2b0ae6156988c546ab6f046288ee16bbf081abb18977529ee9c22ba6952292a7 extends Twig_Template
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
        $__internal_daec349ab3899e4d7145ee026997fa07dae84824d905555c9cd22097fa75330d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daec349ab3899e4d7145ee026997fa07dae84824d905555c9cd22097fa75330d->enter($__internal_daec349ab3899e4d7145ee026997fa07dae84824d905555c9cd22097fa75330d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_larger.scss"));

        // line 1
        echo "// Icon Sizes
// -------------------------

/* makes the font 33% larger relative to the icon container */
.#{\$fa-css-prefix}-lg {
  font-size: (4em / 3);
  line-height: (3em / 4);
  vertical-align: -15%;
}
.#{\$fa-css-prefix}-2x { font-size: 2em; }
.#{\$fa-css-prefix}-3x { font-size: 3em; }
.#{\$fa-css-prefix}-4x { font-size: 4em; }
.#{\$fa-css-prefix}-5x { font-size: 5em; }
";
        
        $__internal_daec349ab3899e4d7145ee026997fa07dae84824d905555c9cd22097fa75330d->leave($__internal_daec349ab3899e4d7145ee026997fa07dae84824d905555c9cd22097fa75330d_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_larger.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Icon Sizes
// -------------------------

/* makes the font 33% larger relative to the icon container */
.#{\$fa-css-prefix}-lg {
  font-size: (4em / 3);
  line-height: (3em / 4);
  vertical-align: -15%;
}
.#{\$fa-css-prefix}-2x { font-size: 2em; }
.#{\$fa-css-prefix}-3x { font-size: 3em; }
.#{\$fa-css-prefix}-4x { font-size: 4em; }
.#{\$fa-css-prefix}-5x { font-size: 5em; }
", "assets/fa/_larger.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_larger.scss");
    }
}
