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

/* modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig */
class __TwigTemplate_b637199eaf8e6d271404f3c71553077b extends Template
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
        // line 17
        if (($context["slideshow"] ?? null)) {
            // line 18
            yield "  <div class=\"skin-";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["skin"] ?? null), 18, $this->source), "html", null, true);
            yield "\">
    ";
            // line 19
            if (($context["top_widget_rendered"] ?? null)) {
                // line 20
                yield "      <div class=\"views-slideshow-controls-top clearfix\">
        ";
                // line 21
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["top_widget_rendered"] ?? null), 21, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 24
            yield "
    ";
            // line 25
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideshow"] ?? null), 25, $this->source), "html", null, true);
            yield "

    ";
            // line 27
            if (($context["bottom_widget_rendered"] ?? null)) {
                // line 28
                yield "      <div class=\"views-slideshow-controls-bottom clearfix\">
        ";
                // line 29
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_widget_rendered"] ?? null), 29, $this->source), "html", null, true);
                yield "
      </div>
    ";
            }
            // line 32
            yield "    </div>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["slideshow", "skin", "top_widget_rendered", "bottom_widget_rendered"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig";
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
        return array (  77 => 32,  71 => 29,  68 => 28,  66 => 27,  61 => 25,  58 => 24,  52 => 21,  49 => 20,  47 => 19,  42 => 18,  40 => 17,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/views_slideshow/templates/views-view-slideshow.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\modules\\contrib\\views_slideshow\\templates\\views-view-slideshow.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 17);
        static $filters = array("escape" => 18);
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
