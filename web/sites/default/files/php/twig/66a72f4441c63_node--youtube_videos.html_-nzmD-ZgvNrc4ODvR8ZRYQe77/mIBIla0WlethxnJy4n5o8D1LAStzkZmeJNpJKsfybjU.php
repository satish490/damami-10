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

/* themes/custom/thakurji/templates/node/node--youtube_videos.html.twig */
class __TwigTemplate_6190bd1aadbe8f002b61ea08fb41822f extends Template
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
        // line 62
        yield "

";
        // line 65
        $context["classes"] = ["media", ("media--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source,         // line 67
($context["media"] ?? null), "bundle", [], "method", false, false, true, 67), 67, $this->source))), (( !CoreExtension::getAttribute($this->env, $this->source,         // line 68
($context["media"] ?? null), "isPublished", [], "method", false, false, true, 68)) ? ("media--unpublished") : ("")), ((        // line 69
($context["view_mode"] ?? null)) ? (("media--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 69, $this->source)))) : (""))];
        // line 72
        yield "
...
<div class=\"row video-top\">
  <div class=\"col-sm-8\">
    <div class=\"node-ytvideo\">";
        // line 76
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_youtube_video", [], "any", false, false, true, 76), 76, $this->source), "html", null, true);
        yield "</div>
  </div>
  ";
        // line 79
        yield "  ";
        if (((($__internal_compile_0 = (($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_video_category", [], "any", false, false, true, 79)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[0] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#title"] ?? null) : null) == "Bhajan")) {
            // line 80
            yield "    <div class=\"col-sm-4 latest-video\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["latestVideo"] ?? null), 80, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (((($__internal_compile_2 = (($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source,         // line 81
($context["content"] ?? null), "field_video_category", [], "any", false, false, true, 81)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3[0] ?? null) : null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null) == "Aarti")) {
            // line 82
            yield "    <div class=\"col-sm-4 latest-video\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["latestVideo"] ?? null), 82, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (((($__internal_compile_4 = (($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source,         // line 83
($context["content"] ?? null), "field_video_category", [], "any", false, false, true, 83)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5[0] ?? null) : null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null) == "Katha")) {
            // line 84
            yield "    <div class=\"col-sm-4 latest-video\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["latestVideo"] ?? null), 84, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (((($__internal_compile_6 = (($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source,         // line 85
($context["content"] ?? null), "field_video_category", [], "any", false, false, true, 85)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7[0] ?? null) : null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null) == "Mantra")) {
            // line 86
            yield "    <div class=\"col-sm-4 latest-video\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["latestVideo"] ?? null), 86, $this->source), "html", null, true);
            yield "</div>
  ";
        } elseif (((($__internal_compile_8 = (($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source,         // line 87
($context["content"] ?? null), "field_video_category", [], "any", false, false, true, 87)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9[0] ?? null) : null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#title"] ?? null) : null) == "Devotional movies")) {
            // line 88
            yield "    <div class=\"col-sm-4 latest-video\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["latestVideo"] ?? null), 88, $this->source), "html", null, true);
            yield "</div>
  ";
        }
        // line 90
        yield "</div>



";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["media", "view_mode", "content", "latestVideo"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/thakurji/templates/node/node--youtube_videos.html.twig";
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
        return array (  97 => 90,  91 => 88,  89 => 87,  84 => 86,  82 => 85,  77 => 84,  75 => 83,  70 => 82,  68 => 81,  63 => 80,  60 => 79,  55 => 76,  49 => 72,  47 => 69,  46 => 68,  45 => 67,  44 => 65,  40 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/thakurji/templates/node/node--youtube_videos.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\node\\node--youtube_videos.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "if" => 79);
        static $filters = array("clean_class" => 67, "escape" => 76);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape'],
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
