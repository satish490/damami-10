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

/* modules/contrib/superfish/templates/superfish-menu-items.html.twig */
class __TwigTemplate_b2625b7fa40926e22bb2c741ea2553cf extends Template
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
        // line 21
        yield "
";
        // line 22
        $context["classes"] = [];
        // line 23
        $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["menu_items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                yield "
  ";
                // line 26
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 26))) {
                    // line 27
                    yield "    ";
                    $context["item_class"] = (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 27) . " menuparent");
                    // line 28
                    yield "    ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 28)) {
                        // line 29
                        yield "      ";
                        $context["item_class"] = (($context["item_class"] ?? null) . " sf-multicolumn-column");
                        // line 30
                        yield "    ";
                    }
                    // line 31
                    yield "  ";
                }
                // line 32
                yield "
  <li";
                // line 33
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 33), "html", null, true);
                yield ">
    ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 34)) {
                    // line 35
                    yield "    <div class=\"sf-multicolumn-column\">
    ";
                }
                // line 37
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 37))) {
                    // line 38
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link_menuparent", [], "any", false, false, true, 38), "html", null, true);
                    yield "
    ";
                } else {
                    // line 40
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, true, 40), "html", null, true);
                    yield "
    ";
                }
                // line 42
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 42)) {
                    yield "<ul class=\"sf-multicolumn\">
    <li class=\"sf-multicolumn-wrapper ";
                    // line 43
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "item_class", [], "any", false, false, true, 43), "html", null, true);
                    yield "\">
    ";
                }
                // line 45
                yield "    ";
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 45))) {
                    // line 46
                    yield "      ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 46)) {
                        yield "<ol>";
                    } else {
                        yield "<ul>";
                    }
                    // line 47
                    yield "      ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "children", [], "any", false, false, true, 47), "html", null, true);
                    yield "
      ";
                    // line 48
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_content", [], "any", false, false, true, 48)) {
                        yield "</ol>";
                    } else {
                        yield "</ul>";
                    }
                    // line 49
                    yield "    ";
                }
                // line 50
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_wrapper", [], "any", false, false, true, 50)) {
                    yield "</li></ul>";
                }
                // line 51
                yield "    ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "multicolumn_column", [], "any", false, false, true, 51)) {
                    yield "</div>";
                }
                // line 52
                yield "  </li>

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 23
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(Twig\Extension\CoreExtension::spaceless($_v0));
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["menu_items"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "modules/contrib/superfish/templates/superfish-menu-items.html.twig";
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
        return array (  157 => 23,  147 => 52,  142 => 51,  137 => 50,  134 => 49,  128 => 48,  123 => 47,  116 => 46,  113 => 45,  108 => 43,  103 => 42,  97 => 40,  91 => 38,  88 => 37,  84 => 35,  82 => 34,  78 => 33,  75 => 32,  72 => 31,  69 => 30,  66 => 29,  63 => 28,  60 => 27,  58 => 26,  55 => 25,  51 => 24,  49 => 23,  47 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "modules/contrib/superfish/templates/superfish-menu-items.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\modules\\contrib\\superfish\\templates\\superfish-menu-items.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 22, "apply" => 23, "for" => 24, "if" => 26];
        static $filters = ["escape" => 33, "spaceless" => 23];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'apply', 'for', 'if'],
                ['escape', 'spaceless'],
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
