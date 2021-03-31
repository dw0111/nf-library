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

/* _footer.html.twig */
class __TwigTemplate_390954d68f973edd98244b0dba112f039e9e67c292e4f69e4b5a15157ff8552d extends Template
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
        echo "<footer class=\"bg-nfblue text-white mt-16\">
    <div class=\"max-w-7xl mx-auto px-8 py-16\">
        <div class=\"flex justify-center\">
            <a class=\"mx-4 px-2 py-1 rounded-full hover-orange\" href=\"/privacy\">Privacy</a>
            <a class=\"mx-4 px-2 py-1 rounded-full hover-orange\" href=\"/terms\">Terms</a>
            <a class=\"mx-4 px-2 py-1 rounded-full hover-orange\" href=\"/support\">Support</a>
        </div>
        <div class=\"text-center opacity-75 mt-4\">© 2021 neuefische GmbH</div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "_footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "_footer.html.twig", "/Users/neuefischedw/Development/neuefische/hh-web-21-1/php/nf-library/templates/_footer.html.twig");
    }
}
