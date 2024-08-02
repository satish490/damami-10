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

/* @thakurji/includes/footer.html.twig */
class __TwigTemplate_66200356199da6725aa5a6bf9d5a8224 extends Template
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
        yield "  <div class=\"whole-footer-middle-area container-fluid\">
    <div class=\"container\">
        <div class=\"row\">
          ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_first", [], "any", false, false, true, 12)) {
            // line 13
            yield "            <div class=\"col-sm-5 footer-middle-first \">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_first", [], "any", false, false, true, 13), 13, $this->source), "html", null, true);
            yield "</div>
          ";
        }
        // line 15
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_second", [], "any", false, false, true, 15)) {
            // line 16
            yield "            <div class=\"col-sm-3 footer-middle-second\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_second", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
            yield "</div>
          ";
        }
        // line 18
        yield "          ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_third", [], "any", false, false, true, 18)) {
            // line 19
            yield "            <div class=\"col-sm-4 footer-middle-third\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_middle_third", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            yield "</div>
          ";
        }
        // line 21
        yield "        </div>
    </div>
  </div>
  ";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_logo", [], "any", false, false, true, 24)) {
            // line 25
            yield "    <div class=\"container-fluid footer-bottom-logo\">
      <div class=\"container\">";
            // line 26
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_bottom_logo", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
            yield "</div>
    </div>
  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@thakurji/includes/footer.html.twig";
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
        return array (  81 => 26,  78 => 25,  76 => 24,  71 => 21,  65 => 19,  62 => 18,  56 => 16,  53 => 15,  47 => 13,  45 => 12,  40 => 9,);
    }

    public function getSourceContext()
    {
        return new Source("", "@thakurji/includes/footer.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\includes\\footer.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 12);
        static $filters = array("escape" => 13);
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
