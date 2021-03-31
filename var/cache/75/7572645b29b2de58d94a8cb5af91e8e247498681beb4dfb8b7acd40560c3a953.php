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

/* _header.html.twig */
class __TwigTemplate_d1619d3f0d69b6222b4f9a5aec088553373b9481f46a02ae47094fa2d5893f00 extends Template
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
        echo "<header class=\"bg-nfblue text-white\">
    <div class=\"flex justify-between items-center h-16 max-w-7xl mx-auto px-8\">
        <a class=\"w-24\" href=\"/\">
            <svg class=\"w-10 h-10 p-2 rounded-full hover-orange\" fill=\"currentColor\" viewBox=\"0 0 20 20\"
                xmlns=\"http://www.w3.org/2000/svg\">
                <path
                    d=\"M19.018 10.247L18.821 10.748C18.404 11.671 17.611 12.77 16.326 14.171C10.868 20.13 7.264 20.269 11.779 14.816C11.779 14.816 16.775 10.436 11.599 3.90597C7.502 -1.26403 10.749 -0.427027 12.801 1.45297C13.632 2.21297 15.341 3.79197 16.739 5.28897C18.461 7.13397 19.649 8.30097 19.018 10.247ZM7.468 12.965C7.468 12.965 10.392 10.095 7.358 5.81297C4.958 2.42297 6.858 2.97297 8.061 4.20597C8.548 4.70497 9.55 5.73997 10.369 6.72197C11.909 8.56797 12.719 9.37997 10.131 12.544C6.939 16.448 4.828 16.538 7.468 12.965ZM1.508 11.215C1.508 11.215 5.118 9.76897 1.408 7.63697C-1.527 5.94997 0.808001 6.21697 2.281 6.82997C3.23346 7.22103 4.17514 7.63785 5.105 8.07997C6.99 8.99897 7.983 9.40197 4.785 10.994C0.839001 12.958 -1.757 13.012 1.508 11.215Z\" />
            </svg>
        </a>
        <nav class=\"flex space-x-8\">
            <a href=\"/categories/books\" class=\"px-2 py-1 rounded-full hover-orange\">
                Books
            </a>
            <a href=\"/categories/movies\" class=\"px-2 py-1 rounded-full hover-orange\">
                Movies
            </a>
            <a href=\"/categories/audio\" class=\"px-2 py-1 rounded-full hover-orange\">
                Audio
            </a>
        </nav>
        <a href=\"/cart\" class=\"flex justify-end w-24\">
            <svg class=\"w-10 h-10 p-2 rounded-full hover-orange\" fill=\"none\" stroke=\"currentColor\"
                viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"
                    d=\"M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z\"></path>
            </svg>
        </a>
    </div>
</header>";
    }

    public function getTemplateName()
    {
        return "_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_header.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/_header.html.twig");
    }
}
