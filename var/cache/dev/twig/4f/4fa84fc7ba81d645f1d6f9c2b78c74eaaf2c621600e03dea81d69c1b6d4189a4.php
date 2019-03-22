<?php

/* assets/fa/_animated.scss */
class __TwigTemplate_625062367c8ab4536262990c1b7168e56ed73e172dac99ea9dfbe38976ca50c7 extends Twig_Template
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
        $__internal_46064ace1d32c8ea612b74803593ade2c97c488a6b8ff051d4a81b07fff9b499 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46064ace1d32c8ea612b74803593ade2c97c488a6b8ff051d4a81b07fff9b499->enter($__internal_46064ace1d32c8ea612b74803593ade2c97c488a6b8ff051d4a81b07fff9b499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_animated.scss"));

        // line 1
        echo "// Spinning Icons
// --------------------------

.#{\$fa-css-prefix}-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.#{\$fa-css-prefix}-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
";
        
        $__internal_46064ace1d32c8ea612b74803593ade2c97c488a6b8ff051d4a81b07fff9b499->leave($__internal_46064ace1d32c8ea612b74803593ade2c97c488a6b8ff051d4a81b07fff9b499_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_animated.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Spinning Icons
// --------------------------

.#{\$fa-css-prefix}-spin {
  -webkit-animation: fa-spin 2s infinite linear;
          animation: fa-spin 2s infinite linear;
}

.#{\$fa-css-prefix}-pulse {
  -webkit-animation: fa-spin 1s infinite steps(8);
          animation: fa-spin 1s infinite steps(8);
}

@-webkit-keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}

@keyframes fa-spin {
  0% {
    -webkit-transform: rotate(0deg);
            transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(359deg);
            transform: rotate(359deg);
  }
}
", "assets/fa/_animated.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_animated.scss");
    }
}
