<?php

/* assets/fa/_mixins.scss */
class __TwigTemplate_aa342ae668e26104cd14b0897e12096038c3e95b011c236270f52581eb332566 extends Twig_Template
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
        $__internal_a654a1d8168c82b0e0f58308e3d4dc1051c32a7b06d68b9da8e7a17c6e20b464 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a654a1d8168c82b0e0f58308e3d4dc1051c32a7b06d68b9da8e7a17c6e20b464->enter($__internal_a654a1d8168c82b0e0f58308e3d4dc1051c32a7b06d68b9da8e7a17c6e20b464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_mixins.scss"));

        // line 1
        echo "// Mixins
// --------------------------

@mixin fa-icon() {
  display: inline-block;
  font: normal normal normal #{\$fa-font-size-base}/#{\$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

@mixin fa-icon-rotate(\$degrees, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation})\";
  -webkit-transform: rotate(\$degrees);
      -ms-transform: rotate(\$degrees);
          transform: rotate(\$degrees);
}

@mixin fa-icon-flip(\$horiz, \$vert, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation}, mirror=1)\";
  -webkit-transform: scale(\$horiz, \$vert);
      -ms-transform: scale(\$horiz, \$vert);
          transform: scale(\$horiz, \$vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

@mixin sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for \"Skip to main content\" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

@mixin sr-only-focusable {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
}
";
        
        $__internal_a654a1d8168c82b0e0f58308e3d4dc1051c32a7b06d68b9da8e7a17c6e20b464->leave($__internal_a654a1d8168c82b0e0f58308e3d4dc1051c32a7b06d68b9da8e7a17c6e20b464_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_mixins.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Mixins
// --------------------------

@mixin fa-icon() {
  display: inline-block;
  font: normal normal normal #{\$fa-font-size-base}/#{\$fa-line-height-base} FontAwesome; // shortening font declaration
  font-size: inherit; // can't have font-size inherit on line above, so need to override
  text-rendering: auto; // optimizelegibility throws things off #1094
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

}

@mixin fa-icon-rotate(\$degrees, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation})\";
  -webkit-transform: rotate(\$degrees);
      -ms-transform: rotate(\$degrees);
          transform: rotate(\$degrees);
}

@mixin fa-icon-flip(\$horiz, \$vert, \$rotation) {
  -ms-filter: \"progid:DXImageTransform.Microsoft.BasicImage(rotation=#{\$rotation}, mirror=1)\";
  -webkit-transform: scale(\$horiz, \$vert);
      -ms-transform: scale(\$horiz, \$vert);
          transform: scale(\$horiz, \$vert);
}


// Only display content to screen readers. A la Bootstrap 4.
//
// See: http://a11yproject.com/posts/how-to-hide-content/

@mixin sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0,0,0,0);
  border: 0;
}

// Use in conjunction with .sr-only to only display content when it's focused.
//
// Useful for \"Skip to main content\" links; see http://www.w3.org/TR/2013/NOTE-WCAG20-TECHS-20130905/G1
//
// Credit: HTML5 Boilerplate

@mixin sr-only-focusable {
  &:active,
  &:focus {
    position: static;
    width: auto;
    height: auto;
    margin: 0;
    overflow: visible;
    clip: auto;
  }
}
", "assets/fa/_mixins.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_mixins.scss");
    }
}
