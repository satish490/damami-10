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

/* themes/custom/thakurji/templates/page/html.html.twig */
class __TwigTemplate_6e7fa317d74b9e6d53e6a0619675769a extends Template
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
        // line 1
        yield "
";
        // line 49
        $context["body_classes"] = [((        // line 50
($context["logged_in"] ?? null)) ? ("user-logged-in") : ("")), (( !        // line 51
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-innerpage not-front path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 51, $this->source))))), ((        // line 52
($context["node_type"] ?? null)) ? (("page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 52, $this->source)))) : ("")), ((        // line 53
($context["db_offline"] ?? null)) ? ("db-offline") : ("")), ((( !CoreExtension::getAttribute($this->env, $this->source,         // line 54
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 54) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 54))) ? ("no-sidebars") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 55
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 55) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 55))) ? ("sidebar-first") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 56
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 56) &&  !CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 56))) ? ("sidebar-second") : ("")), (((CoreExtension::getAttribute($this->env, $this->source,         // line 57
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 57) && CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 57))) ? ("Two-sidebars") : ("")), ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 58
($context["theme"] ?? null), "settings", [], "any", false, false, true, 58), "navbar_position", [], "any", false, false, true, 58)) ? (("navbar-is-" . $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 58), "navbar_position", [], "any", false, false, true, 58), 58, $this->source))) : ("")), ((CoreExtension::getAttribute($this->env, $this->source,         // line 59
($context["theme"] ?? null), "has_glyphicons", [], "any", false, false, true, 59)) ? ("has-glyphicons") : ("")), ((        // line 60
($context["current_path"] ?? null)) ? (("node" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["current_path"] ?? null), 60, $this->source)))) : (""))];
        // line 63
        yield "<!DOCTYPE html>
<html ";
        // line 64
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 64, $this->source), "html", null, true);
        yield ">
  <head>
    <head-placeholder token=\"";
        // line 66
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 66, $this->source));
        yield "\">
    <title>";
        // line 67
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 67, $this->source), " | "));
        yield "</title>
    <css-placeholder token=\"";
        // line 68
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 68, $this->source));
        yield "\">
    <js-placeholder token=\"";
        // line 69
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 69, $this->source));
        yield "\">
  </head>
  <body";
        // line 71
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["body_classes"] ?? null)], "method", false, false, true, 71), 71, $this->source), "html", null, true);
        yield ">
    <a href=\"#main-content\" class=\"visually-hidden focusable skip-link\">
      ";
        // line 73
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        yield "
    </a>
    ";
        // line 75
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 75, $this->source), "html", null, true);
        yield "
    ";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 76, $this->source), "html", null, true);
        yield "
    ";
        // line 77
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 77, $this->source), "html", null, true);
        yield "
    <js-bottom-placeholder token=\"";
        // line 78
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 78, $this->source));
        yield "\">
  </body>
</html>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "root_path", "node_type", "db_offline", "page", "theme", "current_path", "html_attributes", "placeholder_token", "head_title", "attributes", "page_top", "page_bottom"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/thakurji/templates/page/html.html.twig";
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
        return array (  103 => 78,  99 => 77,  95 => 76,  91 => 75,  86 => 73,  81 => 71,  76 => 69,  72 => 68,  68 => 67,  64 => 66,  59 => 64,  56 => 63,  54 => 60,  53 => 59,  52 => 58,  51 => 57,  50 => 56,  49 => 55,  48 => 54,  47 => 53,  46 => 52,  45 => 51,  44 => 50,  43 => 49,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/thakurji/templates/page/html.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\page\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 49);
        static $filters = array("clean_class" => 51, "escape" => 64, "raw" => 66, "safe_join" => 67, "t" => 73);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
