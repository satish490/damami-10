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

/* themes/custom/thakurji/templates/page/page--front.html.twig */
class __TwigTemplate_1b2e603fdd2e9c12073e6901c8b98daa extends Template
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
        yield "
";
        // line 54
        yield from $this->loadTemplate("@thakurji/includes/header.html.twig", "themes/custom/thakurji/templates/page/page--front.html.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "
";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 56)) {
            // line 57
            yield "\t<div class=\"container-fluid Banner-area\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 57), "html", null, true);
            yield "</div>
";
        }
        // line 59
        yield "\t
\t<div id=\"maindiv\" class=\"container\">\t\t\t
\t\t";
        // line 61
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 61)) {
            // line 62
            yield "\t\t\t<div id=\"sidebar_first_area\" class=\"column sidebar\">
\t\t\t\t";
            // line 63
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 63), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 65
        yield "\t     
\t\t\t\t
\t\t\t<div id=\"midcontent_area\" class=\"column main-content\">
\t\t\t\t<div id=\"content\">";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 68), "html", null, true);
        yield "</div>
\t\t\t</div>\t\t
\t\t\t\t
\t\t";
        // line 71
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 71)) {
            // line 72
            yield "\t\t\t<div id=\"sidebar_second_area\" class=\"column sidebar\">
\t\t\t\t";
            // line 73
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73), "html", null, true);
            yield "
\t\t\t</div>
\t\t";
        }
        // line 75
        yield "\t
\t</div>



\t";
        // line 80
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "video_area", [], "any", false, false, true, 80)) {
            // line 81
            yield "\t\t<div id=\"video\" class=\"container\">
\t\t\t<div id=\"content\">";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "video_area", [], "any", false, false, true, 82), "html", null, true);
            yield "</div>
\t\t</div>
\t";
        }
        // line 85
        yield "

\t";
        // line 92
        yield "
\t";
        // line 93
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_area", [], "any", false, false, true, 93)) {
            // line 94
            yield "\t\t<div class=\"footer-top-area container\">
\t\t\t<div id=\"content\">";
            // line 95
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_area", [], "any", false, false, true, 95), "html", null, true);
            yield "</div>
\t\t</div>
\t";
        }
        // line 98
        yield "
\t";
        // line 99
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_bottom", [], "any", false, false, true, 99)) {
            // line 100
            yield "\t\t<div class=\"footer-top-bottom container-fluid\">
\t\t<div class=\"footer-bott container\">
\t\t\t<div id=\"content\">";
            // line 102
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_bottom", [], "any", false, false, true, 102), "html", null, true);
            yield "</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 106
        yield "
";
        // line 107
        yield from $this->loadTemplate("@thakurji/includes/footer.html.twig", "themes/custom/thakurji/templates/page/page--front.html.twig", 107)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/thakurji/templates/page/page--front.html.twig";
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
        return array (  152 => 107,  149 => 106,  142 => 102,  138 => 100,  136 => 99,  133 => 98,  127 => 95,  124 => 94,  122 => 93,  119 => 92,  115 => 85,  109 => 82,  106 => 81,  104 => 80,  97 => 75,  91 => 73,  88 => 72,  86 => 71,  80 => 68,  75 => 65,  69 => 63,  66 => 62,  64 => 61,  60 => 59,  54 => 57,  52 => 56,  49 => 55,  47 => 54,  44 => 53,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/thakurji/templates/page/page--front.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\page\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["include" => 54, "if" => 56];
        static $filters = ["escape" => 57];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape'],
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
