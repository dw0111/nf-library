<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_332ee1dec75aebd75a801e53c1eea7f276face8a85df9ff202a5480167ca50f8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html class=\"min-h-full\">

<head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link href=\"/styles.css\" rel=\"stylesheet\">
    <title>NF Library</title>
</head>

<body class=\"min-h-full bg-gray-100\">
    ";
        // line 12
        echo twig_include($this->env, $context, "_header.html.twig");
        echo "

    ";
        // line 14
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        echo twig_include($this->env, $context, "_footer.html.twig");
        echo "
</body>

</html>";
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "    ";
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 15,  69 => 14,  61 => 17,  58 => 16,  56 => 14,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/base.html.twig");
    }
}
