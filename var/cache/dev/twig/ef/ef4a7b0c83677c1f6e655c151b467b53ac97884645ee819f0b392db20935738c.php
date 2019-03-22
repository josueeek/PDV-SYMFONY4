<?php

/* assets/fa/_list.scss */
class __TwigTemplate_954b39359f919c18ffe02c69c30d9043704c1346d310d920908a41a6c48c903e extends Twig_Template
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
        $__internal_8c6daaee18b4aa3c661efa7ea0ea90c9228807b48cfb90964793fcc1bea04077 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c6daaee18b4aa3c661efa7ea0ea90c9228807b48cfb90964793fcc1bea04077->enter($__internal_8c6daaee18b4aa3c661efa7ea0ea90c9228807b48cfb90964793fcc1bea04077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_list.scss"));

        // line 1
        echo "// List Icons
// -------------------------

.#{\$fa-css-prefix}-ul {
  padding-left: 0;
  margin-left: \$fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.#{\$fa-css-prefix}-li {
  position: absolute;
  left: -\$fa-li-width;
  width: \$fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.#{\$fa-css-prefix}-lg {
    left: -\$fa-li-width + (4em / 14);
  }
}
";
        
        $__internal_8c6daaee18b4aa3c661efa7ea0ea90c9228807b48cfb90964793fcc1bea04077->leave($__internal_8c6daaee18b4aa3c661efa7ea0ea90c9228807b48cfb90964793fcc1bea04077_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_list.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// List Icons
// -------------------------

.#{\$fa-css-prefix}-ul {
  padding-left: 0;
  margin-left: \$fa-li-width;
  list-style-type: none;
  > li { position: relative; }
}
.#{\$fa-css-prefix}-li {
  position: absolute;
  left: -\$fa-li-width;
  width: \$fa-li-width;
  top: (2em / 14);
  text-align: center;
  &.#{\$fa-css-prefix}-lg {
    left: -\$fa-li-width + (4em / 14);
  }
}
", "assets/fa/_list.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_list.scss");
    }
}
