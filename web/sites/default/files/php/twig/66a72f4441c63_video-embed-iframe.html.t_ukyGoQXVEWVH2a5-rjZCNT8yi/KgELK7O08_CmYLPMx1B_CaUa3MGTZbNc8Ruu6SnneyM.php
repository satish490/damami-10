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

/* modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig */
class __TwigTemplate_bf43e555cc45d7e586dc65a000ce9429 extends Template
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
        // line 7
        yield "<iframe";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 7, $this->source), "html", null, true);
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["url"] ?? null))) {
            yield " src=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 7, $this->source), "html", null, true);
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["query"] ?? null))) {
                yield "?";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::urlencode($this->sandbox->ensureToStringAllowed(($context["query"] ?? null), 7, $this->source)), "html", null, true);
            }
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["fragment"] ?? null))) {
                yield "#";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["fragment"] ?? null), 7, $this->source), "html", null, true);
            }
            yield "\"";
        }
        yield "></iframe>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["attributes", "url", "query", "fragment"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig";
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
        return array (  40 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/contrib/video_embed_field/templates/video-embed-iframe.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\modules\\contrib\\video_embed_field\\templates\\video-embed-iframe.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 7);
        static $filters = array("escape" => 7, "url_encode" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'url_encode'],
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
