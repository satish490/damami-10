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

/* themes/contrib/bootstrap5/templates/views/views-view-grid.html.twig */
class __TwigTemplate_66727ce43578bf96bc5a5d7966812062 extends Template
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
        // line 28
        $context["classes"] = ["views-view-grid", CoreExtension::getAttribute($this->env, $this->source,         // line 30
($context["options"] ?? null), "alignment", [], "any", false, false, true, 30), ("cols-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 31
($context["options"] ?? null), "columns", [], "any", false, false, true, 31), 31, $this->source)), "clearfix"];
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 35)) {
            // line 36
            yield "  ";
            // line 37
            $context["row_classes"] = ["views-row", (((CoreExtension::getAttribute($this->env, $this->source,             // line 39
($context["options"] ?? null), "alignment", [], "any", false, false, true, 39) == "horizontal")) ? ("clearfix") : (""))];
        }
        // line 43
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 43)) {
            // line 44
            yield "  ";
            // line 45
            $context["col_classes"] = ["views-col", (((CoreExtension::getAttribute($this->env, $this->source,             // line 47
($context["options"] ?? null), "alignment", [], "any", false, false, true, 47) == "vertical")) ? ("clearfix") : (""))];
        }
        // line 51
        if (($context["title"] ?? null)) {
            // line 52
            yield "  <h3>";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 52, $this->source), "html", null, true);
            yield "</h3>
";
        }
        // line 54
        yield "<div";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 54), 54, $this->source), "html", null, true);
        yield ">
  ";
        // line 55
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "alignment", [], "any", false, false, true, 55) == "horizontal")) {
            // line 56
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 57
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 57), "addClass", [($context["row_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 57)) ? (("row-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 57), 57, $this->source))) : (""))], "method", false, false, true, 57), 57, $this->source), "html", null, true);
                yield ">
        ";
                // line 58
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 58));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 59
                    yield "          <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 59), "addClass", [($context["col_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 59)) ? (("col-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 59), 59, $this->source))) : (""))], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                    yield ">";
                    // line 60
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                    // line 61
                    yield "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            yield "  ";
        } else {
            // line 66
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                // line 67
                yield "      <div";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["column"], "attributes", [], "any", false, false, true, 67), "addClass", [($context["col_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "col_class_default", [], "any", false, false, true, 67)) ? (("col-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 67), 67, $this->source))) : (""))], "method", false, false, true, 67), 67, $this->source), "html", null, true);
                yield ">
        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["column"], "content", [], "any", false, false, true, 68));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                    // line 69
                    yield "          <div";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 69), "addClass", [($context["row_classes"] ?? null), ((CoreExtension::getAttribute($this->env, $this->source, ($context["options"] ?? null), "row_class_default", [], "any", false, false, true, 69)) ? (("row-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 69), 69, $this->source))) : (""))], "method", false, false, true, 69), 69, $this->source), "html", null, true);
                    yield ">";
                    // line 70
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                    // line 71
                    yield "</div>
        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                yield "      </div>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "  ";
        }
        // line 76
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["options", "title", "attributes", "items", "loop"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/contrib/bootstrap5/templates/views/views-view-grid.html.twig";
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
        return array (  233 => 76,  230 => 75,  215 => 73,  200 => 71,  198 => 70,  194 => 69,  177 => 68,  172 => 67,  154 => 66,  151 => 65,  136 => 63,  121 => 61,  119 => 60,  115 => 59,  98 => 58,  93 => 57,  75 => 56,  73 => 55,  68 => 54,  62 => 52,  60 => 51,  57 => 47,  56 => 45,  54 => 44,  52 => 43,  49 => 39,  48 => 37,  46 => 36,  44 => 35,  42 => 31,  41 => 30,  40 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/contrib/bootstrap5/templates/views/views-view-grid.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\contrib\\bootstrap5\\templates\\views\\views-view-grid.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "if" => 35, "for" => 56);
        static $filters = array("escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
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
