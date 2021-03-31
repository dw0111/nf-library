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

/* home/_categories.html.twig */
class __TwigTemplate_a111ac7c554b8e6b66f3d9c49a25a0056607a379496f592f8f7d160f31b4b8f7 extends Template
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
        All categories
    </h3>
    <dl class=\"mt-4 grid gap-5 grid-cols-3 text-white\">
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        <a href=\"/categories/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 7), "html", null, true);
            echo "\" class=\"shadow bg-gradient-to-br from-nfblue to-nfblue-light rounded-lg hover-orange\">
            <div class=\"p-6\">
                <dt class=\"text-sm\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 10), "html", null, true);
            echo "
                </dt>
                <dd class=\"mt-1 text-3xl font-semibold\">
                    ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "
                </dd>
            </div>
        </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </dl>
</section>";
    }

    public function getTemplateName()
    {
        return "home/_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 18,  61 => 13,  55 => 10,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/_categories.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/home/_categories.html.twig");
    }
}
