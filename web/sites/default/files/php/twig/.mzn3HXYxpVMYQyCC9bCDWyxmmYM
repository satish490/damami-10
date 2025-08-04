<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/thakurji/templates/page/page--404.html.twig */
class __TwigTemplate_e306f2e0db1d4563db45a7e93f794932 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 53
        yield from $this->loadTemplate("@thakurji/includes/header.html.twig", "themes/custom/thakurji/templates/page/page--404.html.twig", 53)->unwrap()->yield($context);
        // line 54
        yield "
<div class=\"main-page-not-found\">
\t<div class=\"container d-flex align-items-center min-vh-100\">
\t\t<div class=\"right-section-not-found\">
\t\t\t<div class=\"not-found-four\">
\t\t\t\t<span>404</span>
\t\t\t\t<p>The page you're looking for is as elusive as a byte in the ether. Let's get you back on track!</p>
\t\t\t</div>

\t\t\t<div class=\"not-found-button-container mt-auto\">
\t\t\t\t<a class=\"not-found-button\" href=\"/\">
\t\t\t\t\t<span class=\"not-found-button-content\">Home
\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right\" style=\"color: #ffffff;\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t\t<a class=\"not-found-button\" href=\"/contact-us\">
\t\t\t\t\t<span class=\"not-found-button-content\">Contact Us
\t\t\t\t\t\t<i class=\"fa-solid fa-arrow-right\" style=\"color: #ffffff;\"></i>
\t\t\t\t\t</span>
\t\t\t\t</a>
\t\t\t</div>
\t\t\t";
        // line 76
        yield "\t\t</div>
\t</div>
</div>

";
        // line 80
        yield from $this->loadTemplate("@thakurji/includes/footer.html.twig", "themes/custom/thakurji/templates/page/page--404.html.twig", 80)->unwrap()->yield($context);
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/thakurji/templates/page/page--404.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  75 => 80,  69 => 76,  46 => 54,  44 => 53,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/thakurji/templates/page/page--404.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\page\\page--404.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 53];
        static $filters = [];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
