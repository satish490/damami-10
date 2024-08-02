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

/* themes/custom/thakurji/templates/node/node--temple.html.twig */
class __TwigTemplate_8e69ef86ef6f760f3921b9aa5b71c5ef extends Template
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
<div class=\"temple-details-page\">
  <h1 class=\"node-title\">";
        // line 74
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "title", [], "any", false, false, true, 74), "value", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        yield "</h1>
  <div id=\"carouselExampleIndicators\" class=\"wrapper-image carousel slide carousel-fade\" data-bs-ride=\"carousel\">
    <div class=\"carousel-inner\">

      ";
        // line 79
        yield "      ";
        $context["z"] = 0;
        // line 80
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_upload_image", [], "any", false, false, true, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 81
            yield "        <div class=\"carousel-item\">
          ";
            // line 82
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_upload_image", [], "any", false, false, true, 82)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["z"] ?? null)] ?? null) : null), 82, $this->source), "html", null, true);
            yield "
        </div>
        ";
            // line 84
            $context["z"] = (($context["z"] ?? null) + 1);
            // line 85
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "
    </div>

    <div class=\"carousel-indicators\">
      ";
        // line 90
        $context["i"] =  -1;
        // line 91
        yield "      ";
        $context["j"] = 0;
        // line 92
        yield "      ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_upload_image", [], "any", false, false, true, 92));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 93
            yield "        ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), $context["image"]) > 1)) {
                // line 94
                yield "          ";
                $context["i"] = (($context["i"] ?? null) + 1);
                // line 95
                yield "          ";
                $context["j"] = (($context["j"] ?? null) + 1);
                // line 96
                yield "          <button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["i"] ?? null), 96, $this->source), "html", null, true);
                yield "\" aria-label=\"Slide ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["j"] ?? null), 96, $this->source), "html", null, true);
                yield "\"></button>
        ";
            }
            // line 98
            yield "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        yield "    </div>
  </div>

  <div class=\"temple-page\">

    <div class=\"information-block\">
        ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 105), "value", [], "any", false, false, true, 105)) {
            // line 106
            yield "      <div class=\"temple-des\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "body", [], "any", false, false, true, 106), "value", [], "any", false, false, true, 106), 106, $this->source));
            yield "</div>
      ";
        }
        // line 108
        yield "    </div>

    <table class=\"temple-table\" data-aos=\"flip-left\" data-aos-easing=\"ease-out-cubic\" data-aos-duration=\"2000\">
      <tr>
        <th colspan=\"2\" style=\"color: #008000; background:#ffcc33;\">Information Details</th>
      </tr>

      ";
        // line 115
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founder", [], "any", false, false, true, 115), "value", [], "any", false, false, true, 115)) {
            // line 116
            yield "      <tr>
        <th>";
            // line 117
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founder", [], "any", false, false, true, 117), "fieldDefinition", [], "any", false, false, true, 117), "label", [], "any", false, false, true, 117), 117, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 118
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founder", [], "any", false, false, true, 118), "value", [], "any", false, false, true, 118), 118, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 121
        yield "
      ";
        // line 122
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founded", [], "any", false, false, true, 122), "value", [], "any", false, false, true, 122)) {
            // line 123
            yield "      <tr>
        <th>";
            // line 124
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founded", [], "any", false, false, true, 124), "fieldDefinition", [], "any", false, false, true, 124), "label", [], "any", false, false, true, 124), 124, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 125
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_founded", [], "any", false, false, true, 125), "value", [], "any", false, false, true, 125), 125, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 128
        yield "
      ";
        // line 129
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_organized_by", [], "any", false, false, true, 129), "value", [], "any", false, false, true, 129)) {
            // line 130
            yield "      <tr>
        <th>";
            // line 131
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_organized_by", [], "any", false, false, true, 131)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#title"] ?? null) : null), 131, $this->source), "html", null, true);
            yield "</th>
        <td>";
            // line 132
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_organized_by", [], "any", false, false, true, 132), "value", [], "any", false, false, true, 132), 132, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 135
        yield "
      ";
        // line 136
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dedicated_to", [], "any", false, false, true, 136), "value", [], "any", false, false, true, 136)) {
            // line 137
            yield "      <tr>
        <th>";
            // line 138
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_dedicated_to", [], "any", false, false, true, 138)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#title"] ?? null) : null), 138, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 139
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_dedicated_to", [], "any", false, false, true, 139), "value", [], "any", false, false, true, 139), 139, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 142
        yield "
      ";
        // line 143
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_photography", [], "any", false, false, true, 143), "value", [], "any", false, false, true, 143)) {
            // line 144
            yield "      <tr>
        <th>";
            // line 145
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_3 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_photography", [], "any", false, false, true, 145)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#title"] ?? null) : null), 145, $this->source), "html", null, true);
            yield ":</th>
        <td> ";
            // line 146
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_photography", [], "any", false, false, true, 146), "value", [], "any", false, false, true, 146), 146, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 149
        yield "
      ";
        // line 150
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_free_entry", [], "any", false, false, true, 150), "value", [], "any", false, false, true, 150)) {
            // line 151
            yield "      <tr>
        <th>";
            // line 152
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_4 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_free_entry", [], "any", false, false, true, 152)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#title"] ?? null) : null), 152, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 153
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_free_entry", [], "any", false, false, true, 153), "value", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 156
        yield "
      ";
        // line 157
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_address", [], "any", false, false, true, 157), "value", [], "any", false, false, true, 157)) {
            // line 158
            yield "      <tr>
        <th>";
            // line 159
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_5 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_address", [], "any", false, false, true, 159)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#title"] ?? null) : null), 159, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 160
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_address", [], "any", false, false, true, 160), "value", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 163
        yield "
      ";
        // line 164
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_road", [], "any", false, false, true, 164), "value", [], "any", false, false, true, 164)) {
            // line 165
            yield "      <tr>
        <th>";
            // line 166
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_6 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_road", [], "any", false, false, true, 166)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#title"] ?? null) : null), 166, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 167
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_road", [], "any", false, false, true, 167), "value", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 170
        yield "
      ";
        // line 171
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_nearest_railway", [], "any", false, false, true, 171), "value", [], "any", false, false, true, 171)) {
            // line 172
            yield "      <tr>
        <th>";
            // line 173
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_7 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_nearest_railway", [], "any", false, false, true, 173)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#title"] ?? null) : null), 173, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 174
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_nearest_railway", [], "any", false, false, true, 174), "value", [], "any", false, false, true, 174), 174, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 177
        yield "
      ";
        // line 178
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_air", [], "any", false, false, true, 178), "value", [], "any", false, false, true, 178)) {
            // line 179
            yield "      <tr>
        <th>";
            // line 180
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_8 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_air", [], "any", false, false, true, 180)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#title"] ?? null) : null), 180, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 181
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_air", [], "any", false, false, true, 181), "value", [], "any", false, false, true, 181), 181, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 184
        yield "
      ";
        // line 185
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["node"] ?? null), "field_location_map", [], "any", false, false, true, 185), "value", [], "any", false, false, true, 185)) {
            // line 186
            yield "      <tr>
        <th>";
            // line 187
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_compile_9 = CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_map", [], "any", false, false, true, 187)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["#title"] ?? null) : null), 187, $this->source), "html", null, true);
            yield ":</th>
        <td>";
            // line 188
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_location_map", [], "any", false, false, true, 188), 188, $this->source), "html", null, true);
            yield "</td>
      </tr>
      ";
        }
        // line 191
        yield "    </table>
    
  </div>

</div>

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["media", "view_mode", "node", "content"]);        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/custom/thakurji/templates/node/node--temple.html.twig";
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
        return array (  343 => 191,  337 => 188,  333 => 187,  330 => 186,  328 => 185,  325 => 184,  319 => 181,  315 => 180,  312 => 179,  310 => 178,  307 => 177,  301 => 174,  297 => 173,  294 => 172,  292 => 171,  289 => 170,  283 => 167,  279 => 166,  276 => 165,  274 => 164,  271 => 163,  265 => 160,  261 => 159,  258 => 158,  256 => 157,  253 => 156,  247 => 153,  243 => 152,  240 => 151,  238 => 150,  235 => 149,  229 => 146,  225 => 145,  222 => 144,  220 => 143,  217 => 142,  211 => 139,  207 => 138,  204 => 137,  202 => 136,  199 => 135,  193 => 132,  189 => 131,  186 => 130,  184 => 129,  181 => 128,  175 => 125,  171 => 124,  168 => 123,  166 => 122,  163 => 121,  157 => 118,  153 => 117,  150 => 116,  148 => 115,  139 => 108,  133 => 106,  131 => 105,  123 => 99,  117 => 98,  109 => 96,  106 => 95,  103 => 94,  100 => 93,  95 => 92,  92 => 91,  90 => 90,  84 => 86,  78 => 85,  76 => 84,  71 => 82,  68 => 81,  63 => 80,  60 => 79,  53 => 74,  49 => 72,  47 => 69,  46 => 68,  45 => 67,  44 => 65,  40 => 62,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/thakurji/templates/node/node--temple.html.twig", "C:\\xampp\\htdocs\\damami-10\\web\\themes\\custom\\thakurji\\templates\\node\\node--temple.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 65, "for" => 80, "if" => 93);
        static $filters = array("clean_class" => 67, "escape" => 74, "length" => 93, "raw" => 105);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'if'],
                ['clean_class', 'escape', 'length', 'raw'],
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
