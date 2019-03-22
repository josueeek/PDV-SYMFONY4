<?php

/* assets/fa/_rotated-flipped.scss */
class __TwigTemplate_2ebf93b0df08928eec9dbd1ef71a3ca091b2d0a756452789840efae3aa063701 extends Twig_Template
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
        $__internal_072b9ba5e98bd7150c11fe58e8d28328a009ca339a9a86937fff36e58ad907b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_072b9ba5e98bd7150c11fe58e8d28328a009ca339a9a86937fff36e58ad907b3->enter($__internal_072b9ba5e98bd7150c11fe58e8d28328a009ca339a9a86937fff36e58ad907b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_rotated-flipped.scss"));

        // line 1
        echo "// Rotated & Flipped Icons
// -------------------------

.#{\$fa-css-prefix}-rotate-90  { @include fa-icon-rotate(90deg, 1);  }
.#{\$fa-css-prefix}-rotate-180 { @include fa-icon-rotate(180deg, 2); }
.#{\$fa-css-prefix}-rotate-270 { @include fa-icon-rotate(270deg, 3); }

.#{\$fa-css-prefix}-flip-horizontal { @include fa-icon-flip(-1, 1, 0); }
.#{\$fa-css-prefix}-flip-vertical   { @include fa-icon-flip(1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root .#{\$fa-css-prefix}-rotate-90,
:root .#{\$fa-css-prefix}-rotate-180,
:root .#{\$fa-css-prefix}-rotate-270,
:root .#{\$fa-css-prefix}-flip-horizontal,
:root .#{\$fa-css-prefix}-flip-vertical {
  filter: none;
}
";
        
        $__internal_072b9ba5e98bd7150c11fe58e8d28328a009ca339a9a86937fff36e58ad907b3->leave($__internal_072b9ba5e98bd7150c11fe58e8d28328a009ca339a9a86937fff36e58ad907b3_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_rotated-flipped.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Rotated & Flipped Icons
// -------------------------

.#{\$fa-css-prefix}-rotate-90  { @include fa-icon-rotate(90deg, 1);  }
.#{\$fa-css-prefix}-rotate-180 { @include fa-icon-rotate(180deg, 2); }
.#{\$fa-css-prefix}-rotate-270 { @include fa-icon-rotate(270deg, 3); }

.#{\$fa-css-prefix}-flip-horizontal { @include fa-icon-flip(-1, 1, 0); }
.#{\$fa-css-prefix}-flip-vertical   { @include fa-icon-flip(1, -1, 2); }

// Hook for IE8-9
// -------------------------

:root .#{\$fa-css-prefix}-rotate-90,
:root .#{\$fa-css-prefix}-rotate-180,
:root .#{\$fa-css-prefix}-rotate-270,
:root .#{\$fa-css-prefix}-flip-horizontal,
:root .#{\$fa-css-prefix}-flip-vertical {
  filter: none;
}
", "assets/fa/_rotated-flipped.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_rotated-flipped.scss");
    }
}
