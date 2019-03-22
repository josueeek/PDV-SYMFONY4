<?php

/* assets/fa/_path.scss */
class __TwigTemplate_8225dd938a8c5eae211f0cfdb3265a111d200065308aafe7f0fe7a252371cce8 extends Twig_Template
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
        $__internal_02cbb300a330192dfe52afd74661463947b496b6c0dad74811a1caf80e8b00be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02cbb300a330192dfe52afd74661463947b496b6c0dad74811a1caf80e8b00be->enter($__internal_02cbb300a330192dfe52afd74661463947b496b6c0dad74811a1caf80e8b00be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_path.scss"));

        // line 1
        echo "/* FONT PATH
 * -------------------------- */

@font-face {
  font-family: 'FontAwesome';
  src: url('#{\$fa-font-path}/fontawesome-webfont.eot?v=#{\$fa-version}');
  src: url('#{\$fa-font-path}/fontawesome-webfont.eot?#iefix&v=#{\$fa-version}') format('embedded-opentype'),
    url('#{\$fa-font-path}/fontawesome-webfont.woff2?v=#{\$fa-version}') format('woff2'),
    url('#{\$fa-font-path}/fontawesome-webfont.woff?v=#{\$fa-version}') format('woff'),
    url('#{\$fa-font-path}/fontawesome-webfont.ttf?v=#{\$fa-version}') format('truetype'),
    url('#{\$fa-font-path}/fontawesome-webfont.svg?v=#{\$fa-version}#fontawesomeregular') format('svg');
//  src: url('#{\$fa-font-path}/FontAwesome.otf') format('opentype'); // used when developing fonts
  font-weight: normal;
  font-style: normal;
}
";
        
        $__internal_02cbb300a330192dfe52afd74661463947b496b6c0dad74811a1caf80e8b00be->leave($__internal_02cbb300a330192dfe52afd74661463947b496b6c0dad74811a1caf80e8b00be_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_path.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/* FONT PATH
 * -------------------------- */

@font-face {
  font-family: 'FontAwesome';
  src: url('#{\$fa-font-path}/fontawesome-webfont.eot?v=#{\$fa-version}');
  src: url('#{\$fa-font-path}/fontawesome-webfont.eot?#iefix&v=#{\$fa-version}') format('embedded-opentype'),
    url('#{\$fa-font-path}/fontawesome-webfont.woff2?v=#{\$fa-version}') format('woff2'),
    url('#{\$fa-font-path}/fontawesome-webfont.woff?v=#{\$fa-version}') format('woff'),
    url('#{\$fa-font-path}/fontawesome-webfont.ttf?v=#{\$fa-version}') format('truetype'),
    url('#{\$fa-font-path}/fontawesome-webfont.svg?v=#{\$fa-version}#fontawesomeregular') format('svg');
//  src: url('#{\$fa-font-path}/FontAwesome.otf') format('opentype'); // used when developing fonts
  font-weight: normal;
  font-style: normal;
}
", "assets/fa/_path.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_path.scss");
    }
}
