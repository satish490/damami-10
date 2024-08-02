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

/* @thakurji/includes/header.html.twig */
class __TwigTemplate_64b6b2b3f8ec787bf61abdaa4c31580a extends Template
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
        // line 9
        yield "<header class=\"main-header\">
  <div class=\"header-top container-fluid\">
      <div class=\"container\">
      <div class=\"row\">
        ";
        // line 13
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 13)) {
            // line 14
            yield "          <div class=\"col-sm-6 header-top-left\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_left", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
            yield "</div>
        ";
        }
        // line 16
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 16)) {
            // line 17
            yield "          <div class=\"col-sm-6 header-top-right\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header_top_right", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
            yield "</div>
        ";
        }
        // line 19
        yield "        </div>
      </div>
    </div>
   
  <div class=\"container-fluid header-bottom\">
      <div class=\"container\">
      <div class=\"row\">
        ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 26)) {
            // line 27
            yield "          <div class=\"col-sm-2 logo\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "logo", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            yield "</div>
        ";
        }
        // line 29
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu_area", [], "any", false, false, true, 29)) {
            // line 30
            yield "          <div class=\"col-sm-10 menu-area\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "menu_area", [], "any", false, false, true, 30), 30, $this->source), "html", null, true);
            yield "</div>
        ";
        }
        // line 32
        yield "      </div>
    </div>
  </div>
</header>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@thakurji/includes/header.html.twig";
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
        return array (  89 => 32,  83 => 30,  80 => 29,  74 => 27,  72 => 26,  63 => 19,  57 => 17,  54 => 16,  48 => 14,  46 => 13,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@thakurji/includes/header.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\includes\\header.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 13);
        static $filters = array("escape" => 14);
        static $functions = array();

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
