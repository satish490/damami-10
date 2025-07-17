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

/* @thakurji/includes/footer.html.twig */
class __TwigTemplate_519aa92a964cf29cb57479f0145a27b0 extends Template
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
        // line 9
        yield "  <div class=\"whole-footer-middle-area container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
          ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_first", [], "any", false, false, true, 12)) {
            // line 13
            yield "            <div class=\"col-sm-4 footer-middle-first \">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_first", [], "any", false, false, true, 13), "html", null, true);
            yield "</div>
          ";
        }
        // line 15
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_second", [], "any", false, false, true, 15)) {
            // line 16
            yield "            <div class=\"col-sm-2 footer-middle-second\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_second", [], "any", false, false, true, 16), "html", null, true);
            yield "</div>
          ";
        }
        // line 18
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_third", [], "any", false, false, true, 18)) {
            // line 19
            yield "            <div class=\"col-sm-3 footer-middle-third\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_third", [], "any", false, false, true, 19), "html", null, true);
            yield "</div>
          ";
        }
        // line 21
        yield "           ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_fourth", [], "any", false, false, true, 21)) {
            // line 22
            yield "            <div class=\"col-sm-3 footer-middle-fourth\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_fourth", [], "any", false, false, true, 22), "html", null, true);
            yield "</div>
          ";
        }
        // line 24
        yield "        </div>
    </div>
  </div>
  ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_logo", [], "any", false, false, true, 27)) {
            // line 28
            yield "    <div class=\"container-fluid footer-bottom-logo\">
      <div class=\"container\">";
            // line 29
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_logo", [], "any", false, false, true, 29), "html", null, true);
            yield "</div>
    </div>
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@thakurji/includes/footer.html.twig";
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
        return array (  94 => 29,  91 => 28,  89 => 27,  84 => 24,  78 => 22,  75 => 21,  69 => 19,  66 => 18,  60 => 16,  57 => 15,  51 => 13,  49 => 12,  44 => 9,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@thakurji/includes/footer.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\includes\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 12];
        static $filters = ["escape" => 13];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
