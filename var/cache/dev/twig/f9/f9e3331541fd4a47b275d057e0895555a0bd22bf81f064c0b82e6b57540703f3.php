<?php

/* assets/fa/_bordered-pulled.scss */
class __TwigTemplate_1c7d66d2e59f94085bb866412d73139f42796c109e54ebb3557989190faff728 extends Twig_Template
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
        $__internal_45efbf25dfef2f7c57f58f61f8790fc4bca1708c66b41170e3479a8f327ab68c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45efbf25dfef2f7c57f58f61f8790fc4bca1708c66b41170e3479a8f327ab68c->enter($__internal_45efbf25dfef2f7c57f58f61f8790fc4bca1708c66b41170e3479a8f327ab68c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_bordered-pulled.scss"));

        // line 1
        echo "// Bordered & Pulled
// -------------------------

.#{\$fa-css-prefix}-border {
  padding: .2em .25em .15em;
  border: solid .08em \$fa-border-color;
  border-radius: .1em;
}

.#{\$fa-css-prefix}-pull-left { float: left; }
.#{\$fa-css-prefix}-pull-right { float: right; }

.#{\$fa-css-prefix} {
  &.#{\$fa-css-prefix}-pull-left { margin-right: .3em; }
  &.#{\$fa-css-prefix}-pull-right { margin-left: .3em; }
}

/* Deprecated as of 4.4.0 */
.pull-right { float: right; }
.pull-left { float: left; }

.#{\$fa-css-prefix} {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
";
        
        $__internal_45efbf25dfef2f7c57f58f61f8790fc4bca1708c66b41170e3479a8f327ab68c->leave($__internal_45efbf25dfef2f7c57f58f61f8790fc4bca1708c66b41170e3479a8f327ab68c_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_bordered-pulled.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Bordered & Pulled
// -------------------------

.#{\$fa-css-prefix}-border {
  padding: .2em .25em .15em;
  border: solid .08em \$fa-border-color;
  border-radius: .1em;
}

.#{\$fa-css-prefix}-pull-left { float: left; }
.#{\$fa-css-prefix}-pull-right { float: right; }

.#{\$fa-css-prefix} {
  &.#{\$fa-css-prefix}-pull-left { margin-right: .3em; }
  &.#{\$fa-css-prefix}-pull-right { margin-left: .3em; }
}

/* Deprecated as of 4.4.0 */
.pull-right { float: right; }
.pull-left { float: left; }

.#{\$fa-css-prefix} {
  &.pull-left { margin-right: .3em; }
  &.pull-right { margin-left: .3em; }
}
", "assets/fa/_bordered-pulled.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_bordered-pulled.scss");
    }
}
