<?php

/* assets/fa/_screen-reader.scss */
class __TwigTemplate_be15bb234a9f7896800db42aad34073ab22a23b2fbbe138cb9abdbcc1b1b3b7e extends Twig_Template
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
        $__internal_b4472d6bc97d33623b5b1ef5510bae1cf696ccddd04dd65048b93d99f4bc2cd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4472d6bc97d33623b5b1ef5510bae1cf696ccddd04dd65048b93d99f4bc2cd7->enter($__internal_b4472d6bc97d33623b5b1ef5510bae1cf696ccddd04dd65048b93d99f4bc2cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "assets/fa/_screen-reader.scss"));

        // line 1
        echo "// Screen Readers
// -------------------------

.sr-only { @include sr-only(); }
.sr-only-focusable { @include sr-only-focusable(); }
";
        
        $__internal_b4472d6bc97d33623b5b1ef5510bae1cf696ccddd04dd65048b93d99f4bc2cd7->leave($__internal_b4472d6bc97d33623b5b1ef5510bae1cf696ccddd04dd65048b93d99f4bc2cd7_prof);

    }

    public function getTemplateName()
    {
        return "assets/fa/_screen-reader.scss";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("// Screen Readers
// -------------------------

.sr-only { @include sr-only(); }
.sr-only-focusable { @include sr-only-focusable(); }
", "assets/fa/_screen-reader.scss", "/Users/jpereira/Desktop/PDV/pdv1/templates/assets/fa/_screen-reader.scss");
    }
}
