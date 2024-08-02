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

/* modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig */
class __TwigTemplate_ee4d3ee0bef03b819b09f09bda433a0c extends Template
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
        // line 30
        if (($context["include_map"] ?? null)) {
            // line 31
            yield "  ";
            $context["new_map_type"] = 0;
            // line 32
            yield "  ";
            if ((($context["map_type"] ?? null) == "k")) {
                // line 33
                yield "    ";
                $context["new_map_type"] = 1;
                // line 34
                yield "  ";
            }
            // line 35
            yield "  <iframe width=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 35, $this->source), "html", null, true);
            yield "\" height=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 35, $this->source), "html", null, true);
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["iframe_title"] ?? null), 35, $this->source), "html", null, true);
            yield "\" frameborder=\"0\" style=\"border:0\" src=\"https://www.google.com/maps/embed?origin=mfe&amp;pb=!1m4!2m1!1s";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_suffix"] ?? null), 35, $this->source), "html", null, true);
            yield "!5e";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["new_map_type"] ?? null), 35, $this->source), "html", null, true);
            yield "!6i";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["zoom"] ?? null), 35, $this->source), "html", null, true);
            yield "!5m1!1s";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 35, $this->source), "html", null, true);
            yield "\"></iframe>
";
        }
        // line 37
        if (($context["include_static_map"] ?? null)) {
            // line 38
            yield "  <div class=\"simple-gmap-static-map\">
    <img src=\"https://maps.googleapis.com/maps/api/staticmap?size=";
            // line 39
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["width"] ?? null), 39, $this->source), "html", null, true);
            yield "x";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["height"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;scale=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["static_scale"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;zoom=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["zoom"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;language=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;maptype=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["static_map_type"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;markers=color:red|";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_suffix"] ?? null), 39, $this->source), "html", null, true);
            yield "&amp;sensor=false&amp;key=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["apikey"] ?? null), 39, $this->source), "html", null, true);
            yield "\" />
  </div>
";
        }
        // line 42
        if (($context["include_link"] ?? null)) {
            // line 43
            yield "  <p class=\"simple-gmap-link\"><a href=\"https://www.google.com/maps?q=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url_suffix"] ?? null), 43, $this->source), "html", null, true);
            yield "&amp;hl=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["langcode"] ?? null), 43, $this->source), "html", null, true);
            yield "&amp;t=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["map_type"] ?? null), 43, $this->source), "html", null, true);
            yield "&amp;z=";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["zoom"] ?? null), 43, $this->source), "html", null, true);
            yield "\" target=\"_blank\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["link_text"] ?? null), 43, $this->source), "html", null, true);
            yield "</a></p>
";
        }
        // line 45
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["address_text"] ?? null))) {
            // line 46
            yield "  <p class=\"simple-gmap-address\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["address_text"] ?? null), 46, $this->source), "html", null, true);
            yield "</p>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["include_map", "map_type", "width", "height", "iframe_title", "url_suffix", "zoom", "langcode", "include_static_map", "static_scale", "static_map_type", "apikey", "include_link", "link_text", "address_text"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig";
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
        return array (  115 => 46,  113 => 45,  99 => 43,  97 => 42,  77 => 39,  74 => 38,  72 => 37,  54 => 35,  51 => 34,  48 => 33,  45 => 32,  42 => 31,  40 => 30,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/simple_gmap/templates/simple-gmap-output.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\modules\\contrib\\simple_gmap\\templates\\simple-gmap-output.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 30, "set" => 31);
        static $filters = array("escape" => 35);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
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
