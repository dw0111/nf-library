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

/* home/_latest.html.twig */
class __TwigTemplate_c1fa3651f4ef20241eb3c518fd3c13908188a96c2625bf8a65b2c384be43a3ea extends Template
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
        echo "<section class=\"max-w-7xl mx-auto px-8 mt-12\">
    <h3 class=\"text-lg font-bold text-nfblue\">
        Latest items
    </h3>
    <div class=\"mt-4 grid gap-4 grid-cols-5\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "        <a href=\"/items/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 7), "html", null, true);
            echo "\"
            class=\"flex flex-col items-center text-center bg-white shadow rounded-lg p-4 hover-orange group\">
            <img class=\"h-48 block rounded-lg\"
                src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "coverUrl", [], "any", false, false, false, 10), "html", null, true);
            echo "\" />
            <h3 class=\"mt-4 text-nfblue font-bold leading-tight group-hover:text-white\">";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
            <h4 class=\"text-nfblue-light text-sm mt-1 group-hover:text-white\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "artist", [], "any", false, false, false, 12), "html", null, true);
            echo "</h4>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "home/_latest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 15,  63 => 12,  59 => 11,  55 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/_latest.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/home/_latest.html.twig");
    }
}
