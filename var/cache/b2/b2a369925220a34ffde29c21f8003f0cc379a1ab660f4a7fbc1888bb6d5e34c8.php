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

/* category/_grid.html.twig */
class __TwigTemplate_73db43a98e06fc3766325c9af3fd2d6b58a3f181f75addafff68b148ab6ac6c6 extends Template
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
        echo "<main class=\"max-w-7xl mx-auto px-8 mt-12\">
    <div class=\"mt-4 grid gap-4 grid-cols-5\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <a href=\"/items/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 4), "html", null, true);
            echo "\"
            class=\"flex flex-col items-center text-center bg-white shadow rounded-lg p-4 hover-orange group\">
            <img class=\"h-48 block rounded-lg\"
                src=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "coverUrl", [], "any", false, false, false, 7), "html", null, true);
            echo "\" />
            <h3 class=\"mt-4 text-nfblue font-bold leading-tight group-hover:text-white\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</h3>
            <h4 class=\"text-nfblue-light text-sm mt-1 group-hover:text-white\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "artist", [], "any", false, false, false, 9), "html", null, true);
            echo "</h4>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</main>
";
    }

    public function getTemplateName()
    {
        return "category/_grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  60 => 9,  56 => 8,  52 => 7,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "category/_grid.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/category/_grid.html.twig");
    }
}
