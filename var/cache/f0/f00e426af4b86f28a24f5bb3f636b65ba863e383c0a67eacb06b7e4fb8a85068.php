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

/* category/_intro.html.twig */
class __TwigTemplate_4cfee14f1f8de33ed5a32ee4abdab3bdec3cffdf5743b156d4bdbdb8917b86fc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<section class=\"relative w-full h-32\">
    <div class=\"absolute inset-0 bg-nfblue\">
        <img class=\"h-full w-full object-cover opacity-50\"
            src=\"https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80\">
        <div class=\"absolute inset-0 bg-gradient-to-r from-nfblue to-transparent\"></div>
        <div class=\"absolute inset-0 flex items-center justify-center\">
            <h1 class=\"text-4xl font-bold text-white\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo "</h1>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "category/_intro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/_intro.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/category/_intro.html.twig");
    }
}
