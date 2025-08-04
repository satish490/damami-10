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

/* themes/custom/thakurji/templates/views/views-view-fields--temple-about-section.html.twig */
class __TwigTemplate_9c88d9bac3158c238dfdd70b9e88d47a extends Template
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
        // line 1
        yield "<section class=\"about-sacred-temple\">
  <div class=\"intro-text\">
    <h2 class=\"main-heading\">";
        // line 3
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_heading", [], "any", false, false, true, 3), "content", [], "any", false, false, true, 3), "html", null, true);
        yield "</h2>
    <div class=\"prayers-underline\"></div>
    <div class=\"intro-subheading\">";
        // line 5
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_subheading", [], "any", false, false, true, 5), "content", [], "any", false, false, true, 5), "html", null, true);
        yield "</div>
  </div>

  <div class=\"about-container\">
    <div class=\"about-left\">
      <div class=\"heritage-section\">
        <h3 class=\"heritage-title\">";
        // line 11
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_heritage_title", [], "any", false, false, true, 11), "content", [], "any", false, false, true, 11), "html", null, true);
        yield "</h3>
        <div class=\"heritage-description\">";
        // line 12
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_heritage_description", [], "any", false, false, true, 12), "content", [], "any", false, false, true, 12), "html", null, true);
        yield "</div>
      </div>

      <div class=\"about-stats\">
        <div class=\"stat-item\">
          <div class=\"stat-icon\"><i class=\"fas fa-user\"></i></div>
          <div>
            <strong>";
        // line 19
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_annual_devotees_count", [], "any", false, false, true, 19), "content", [], "any", false, false, true, 19), "html", null, true);
        yield "</strong>
            <p>Annual Devotees</p>
          </div>
        </div>
        <div class=\"stat-item\">
          <div class=\"stat-icon\"><i class=\"fas fa-mountain\"></i></div>
          <div>
            <strong>";
        // line 26
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_altitude", [], "any", false, false, true, 26), "content", [], "any", false, false, true, 26), "html", null, true);
        yield "</strong>
            <p>Above Sea Level</p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"about-right\">
      <div class=\"image-backing\"></div>
      <div class=\"image-foreground\">
        ";
        // line 36
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fields"] ?? null), "field_image", [], "any", false, false, true, 36), "content", [], "any", false, false, true, 36), "html", null, true);
        yield "
      </div>
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["fields"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/thakurji/templates/views/views-view-fields--temple-about-section.html.twig";
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
        return array (  99 => 36,  86 => 26,  76 => 19,  66 => 12,  62 => 11,  53 => 5,  48 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/thakurji/templates/views/views-view-fields--temple-about-section.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\views\\views-view-fields--temple-about-section.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = [];
        static $filters = ["escape" => 3];
        static $functions = [];

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
