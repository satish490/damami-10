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

/* themes/custom/thakurji/templates/page/page--front.html.twig */
class __TwigTemplate_91b998f98d669f1515300845b26a3667 extends Template
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
        $this->sandbox = $this->env->getExtension(SandboxExtension::class);
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 53
        yield "
";
        // line 54
        yield from         $this->loadTemplate("@thakurji/includes/header.html.twig", "themes/custom/thakurji/templates/page/page--front.html.twig", 54)->unwrap()->yield($context);
        // line 55
        yield "
";
        // line 56
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 56)) {
            // line 57
            yield "\t<div class=\"container-fluid Banner-area\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
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
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
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
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 68), 68, $this->source), "html", null, true);
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
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 73), 73, $this->source), "html", null, true);
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
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "video_area", [], "any", false, false, true, 82), 82, $this->source), "html", null, true);
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
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_area", [], "any", false, false, true, 95), 95, $this->source), "html", null, true);
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
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_top_bottom", [], "any", false, false, true, 102), 102, $this->source), "html", null, true);
            yield "</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 106
        yield "
";
        // line 107
        yield from         $this->loadTemplate("@thakurji/includes/footer.html.twig", "themes/custom/thakurji/templates/page/page--front.html.twig", 107)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/thakurji/templates/page/page--front.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  148 => 107,  145 => 106,  138 => 102,  134 => 100,  132 => 99,  129 => 98,  123 => 95,  120 => 94,  118 => 93,  115 => 92,  111 => 85,  105 => 82,  102 => 81,  100 => 80,  93 => 75,  87 => 73,  84 => 72,  82 => 71,  76 => 68,  71 => 65,  65 => 63,  62 => 62,  60 => 61,  56 => 59,  50 => 57,  48 => 56,  45 => 55,  43 => 54,  40 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/thakurji/templates/page/page--front.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\page\\page--front.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 54, "if" => 56);
        static $filters = array("escape" => 57);
        static $functions = array();

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
