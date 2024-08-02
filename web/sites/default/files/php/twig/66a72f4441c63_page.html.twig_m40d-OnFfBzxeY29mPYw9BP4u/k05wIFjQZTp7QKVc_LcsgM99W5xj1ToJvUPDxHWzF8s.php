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

/* themes/custom/thakurji/templates/page/page.html.twig */
class __TwigTemplate_8c01ef086fec89c170f8c838b2d85b31 extends Template
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
        yield from         $this->loadTemplate("@thakurji/includes/header.html.twig", "themes/custom/thakurji/templates/page/page.html.twig", 54)->unwrap()->yield($context);
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 55)) {
            // line 56
            yield "\t<div class=\"container-fluid Banner-area\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "banner", [], "any", false, false, true, 56), 56, $this->source), "html", null, true);
            yield "</div>
";
        }
        // line 58
        yield "
<section>
\t";
        // line 60
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 60)) {
            // line 61
            yield "\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"container breadcrumb\">";
            // line 62
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "breadcrumb", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            yield "</div>
\t\t</div>
\t";
        }
        // line 65
        yield "</section>

<section>
\t";
        // line 68
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 68)) {
            // line 69
            yield "\t\t<div id=\"maindiv\" class=\"container\">
\t\t\t<div id=\"content\">";
            // line 70
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
            yield "</div>
\t\t</div>
\t";
        }
        // line 73
        yield "</section>
";
        // line 74
        yield from         $this->loadTemplate("@thakurji/includes/footer.html.twig", "themes/custom/thakurji/templates/page/page.html.twig", 74)->unwrap()->yield($context);
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/thakurji/templates/page/page.html.twig";
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
        return array (  87 => 74,  84 => 73,  78 => 70,  75 => 69,  73 => 68,  68 => 65,  62 => 62,  59 => 61,  57 => 60,  53 => 58,  47 => 56,  45 => 55,  43 => 54,  40 => 53,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/thakurji/templates/page/page.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\page\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 54, "if" => 55);
        static $filters = array("escape" => 56);
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
