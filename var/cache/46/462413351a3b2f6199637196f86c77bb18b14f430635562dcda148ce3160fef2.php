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

/* home/_intro.html.twig */
class __TwigTemplate_962f6291b012f92d07abe77e5f9ce765e279a94ab9deba03d98c5810100e4fef extends Template
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
    <div class=\"relative rounded-2xl overflow-hidden shadow\">
        <div class=\"absolute inset-0 bg-nfblue\">
            <img class=\"h-full w-full object-cover opacity-50\"
                src=\"https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80\">
            <div class=\"absolute inset-0 bg-gradient-to-r from-nfblue to-transparent\"></div>
        </div>
        <div class=\"relative z-10 py-32 px-8 text-white text-center\">
            <h1 class=\"text-6xl font-extrabold\">
                <span class=\"block\">Welcome to</span>
                <span class=\"inline-block bg-nforange px-2\">your library</span>
            </h1>
            <p class=\"mt-6 mx-auto text-xl max-w-3xl\">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo.
                Elit sunt amet fugiat veniam occaecat fugiat aliqua.
            </p>
        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "home/_intro.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/_intro.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/home/_intro.html.twig");
    }
}
