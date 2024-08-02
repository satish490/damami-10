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

/* __string_template__50b50738602c952505d803de5cda566c */
class __TwigTemplate_160594da687c24d69156ad9899d59abf extends Template
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
        yield "<div class=\"row\">
<div class=\"col-sm-4 festival\">
<div class=\"festival-image\">";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_upload_image"] ?? null), 3, $this->source), "html", null, true);
        yield "</div>
<div class=\"festival-date\">";
        // line 4
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_festival_date"] ?? null), 4, $this->source), "html", null, true);
        yield "</div>
</div>
<div class=\"col-sm-8 festival disc\">
<div class=\"festival-title\">";
        // line 7
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 7, $this->source), "html", null, true);
        yield "</div>
<div class=\"festival-desc\">";
        // line 8
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null), 8, $this->source), "html", null, true);
        yield "</div>
</div>
</div>";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["field_upload_image", "field_festival_date", "title", "body"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "__string_template__50b50738602c952505d803de5cda566c";
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
        return array (  58 => 8,  54 => 7,  48 => 4,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__50b50738602c952505d803de5cda566c", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
