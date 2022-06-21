<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/subtheme/templates/view/views-view-unformatted--conference_view.html.twig */
class __TwigTemplate_3764f053acf42a7dab53c5e278271a065afb1659841590d0c2b037272a2b1d50 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        if (($context["title"] ?? null)) {
            // line 21
            echo "  <h3>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 21, $this->source), "html", null, true);
            echo "</h3>
";
        }
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 24
            echo "  ";
            // line 25
            $context["row_classes"] = [0 => ((            // line 26
($context["default_row_class"] ?? null)) ? ("card") : (""))];
            // line 29
            echo "  <div";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["row"], "attributes", [], "any", false, false, true, 29), "addClass", [0 => ($context["row_classes"] ?? null)], "method", false, false, true, 29), 29, $this->source), "html", null, true);
            echo ">
          <div class=\"card_head\" style=\"width:100%;height:0; padding-top:50%;position:relative; min-height: 200px;\">
            <div class=\"str\"><span></span><i class=\"bi bi-star-fill\"></i></div>
            <div class=\"prc border rounded border-white px-3\">";
            // line 32
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 32), "field_conference_price", [], "any", false, false, true, 32), "value", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
            echo "</div>
            <img src=\"";
            // line 33
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getFileUrl($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_1 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 33)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 33), "field_confrance_banner", [], "any", false, false, true, 33), "entity", [], "any", false, false, true, 33), "uri", [], "any", false, false, true, 33), "value", [], "any", false, false, true, 33), 33, $this->source)), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"\" style=\"position:absolute; top:0; left:0; width:100%;\" onerror=\"this.onerror=null;this.src='../images/ef3-placeholder-image.jpg';\">
          </div>

          <div class=\"card-body p-0\">
            <div class=\"card_tx\">
              <h5 class=\"card-title\">";
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 38)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 38), "title", [], "any", false, false, true, 38), "value", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
            echo "</h5>

            ";
            // line 40
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_3 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 40)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 40), "field_conference_tags", [], "any", false, false, true, 40), 0, [], "any", false, false, true, 40), "entity", [], "any", false, false, true, 40), "label", [], "any", false, false, true, 40))) {
                // line 41
                echo "            <p class=\"card-text\"><span><i class=\"bi bi-tags-fill\"></i></span> 
            \t";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_4 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 42)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 42), "field_conference_tags", [], "any", false, false, true, 42));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 43
                    echo "
            \t";
                    // line 44
                    if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, true, 44)) {
                        // line 45
                        echo "\t\t\t\t    ";
                        $context["separator"] = "";
                        // line 46
                        echo "\t\t\t\t  ";
                    } else {
                        // line 47
                        echo "\t\t\t\t    ";
                        $context["separator"] = ", ";
                        // line 48
                        echo "\t\t\t\t  ";
                    }
                    // line 49
                    echo "\t        \t
\t\t\t        ";
                    // line 50
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "entity", [], "any", false, false, true, 50), "label", [], "any", false, false, true, 50), 50, $this->source), "html", null, true);
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["separator"] ?? null), 50, $this->source), "html", null, true);
                    echo " 
\t\t\t    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t             </p>
\t        ";
            }
            // line 54
            echo "
              
\t        ";
            // line 56
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 56)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 56), "field_conference_date", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56))) {
                // line 57
                echo "
\t        \t<p class=\"card-text\"><span><i class=\"bi bi-calendar-week\"></i></span> ";
                // line 58
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 58)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 58), "field_conference_date", [], "any", false, false, true, 58), "value", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
                echo "</p>

\t        ";
            }
            // line 61
            echo "

\t        ";
            // line 63
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_7 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 63)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 63), "field_conference_location", [], "any", false, false, true, 63), "value", [], "any", false, false, true, 63))) {
                // line 64
                echo "
\t        \t<p class=\"card-text\"><span class=\"loc\"><i class=\"bi bi-geo-alt-fill\"></i></span> 
              ";
                // line 66
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_compile_8 = twig_get_attribute($this->env, $this->source, $context["row"], "content", [], "any", false, false, true, 66)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["#row"] ?? null) : null), "_entity", [], "any", false, false, true, 66), "field_conference_location", [], "any", false, false, true, 66), "value", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "</p>

\t        ";
            }
            // line 69
            echo "
              
              
            </div>
            <div class=\"det_itm\">
              <ul class=\"list-group list-group-horizontal \">
                <li class=\"list-group-item border-start-0\"><a href=\"\"><i class=\"bi bi-heart\"></i></a></li>
                <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-cloud-arrow-down\"></i></a></li>
                <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-share-fill\"></i></a></li>
                <li class=\"list-group-item flex-grow-1 text-center border-end-0\"><a href=\"\">View Details</a></li>
              </ul>
            </div>
          </div>
  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "themes/custom/subtheme/templates/view/views-view-unformatted--conference_view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 69,  168 => 66,  164 => 64,  162 => 63,  158 => 61,  152 => 58,  149 => 57,  147 => 56,  143 => 54,  139 => 52,  122 => 50,  119 => 49,  116 => 48,  113 => 47,  110 => 46,  107 => 45,  105 => 44,  102 => 43,  85 => 42,  82 => 41,  80 => 40,  75 => 38,  67 => 33,  63 => 32,  56 => 29,  54 => 26,  53 => 25,  51 => 24,  47 => 23,  41 => 21,  39 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 *
 * @ingroup themeable
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}
{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'card',
    ]
  %}
  <div{{ row.attributes.addClass(row_classes) }}>
          <div class=\"card_head\" style=\"width:100%;height:0; padding-top:50%;position:relative; min-height: 200px;\">
            <div class=\"str\"><span></span><i class=\"bi bi-star-fill\"></i></div>
            <div class=\"prc border rounded border-white px-3\">{{row.content['#row']._entity.field_conference_price.value}}</div>
            <img src=\"{{file_url(row.content['#row']._entity.field_confrance_banner.entity.uri.value)}}\" class=\"card-img-top\" alt=\"\" style=\"position:absolute; top:0; left:0; width:100%;\" onerror=\"this.onerror=null;this.src='../images/ef3-placeholder-image.jpg';\">
          </div>

          <div class=\"card-body p-0\">
            <div class=\"card_tx\">
              <h5 class=\"card-title\">{{row.content['#row']._entity.title.value}}</h5>

            {% if row.content['#row']._entity.field_conference_tags.0.entity.label is not empty %}
            <p class=\"card-text\"><span><i class=\"bi bi-tags-fill\"></i></span> 
            \t{% for item in row.content['#row']._entity.field_conference_tags %}

            \t{% if loop.last %}
\t\t\t\t    {% set separator = '' %}
\t\t\t\t  {% else %}
\t\t\t\t    {% set separator = ', ' %}
\t\t\t\t  {% endif %}
\t        \t
\t\t\t        {{ item.entity.label }}{{ separator }} 
\t\t\t    {% endfor %}
\t             </p>
\t        {% endif %}

              
\t        {% if row.content['#row']._entity.field_conference_date.value is not empty %}

\t        \t<p class=\"card-text\"><span><i class=\"bi bi-calendar-week\"></i></span> {{row.content['#row']._entity.field_conference_date.value}}</p>

\t        {% endif %}


\t        {% if row.content['#row']._entity.field_conference_location.value is not empty %}

\t        \t<p class=\"card-text\"><span class=\"loc\"><i class=\"bi bi-geo-alt-fill\"></i></span> 
              {{ row.content['#row']._entity.field_conference_location.value }}</p>

\t        {% endif %}

              
              
            </div>
            <div class=\"det_itm\">
              <ul class=\"list-group list-group-horizontal \">
                <li class=\"list-group-item border-start-0\"><a href=\"\"><i class=\"bi bi-heart\"></i></a></li>
                <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-cloud-arrow-down\"></i></a></li>
                <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-share-fill\"></i></a></li>
                <li class=\"list-group-item flex-grow-1 text-center border-end-0\"><a href=\"\">View Details</a></li>
              </ul>
            </div>
          </div>
  </div>
{% endfor %}", "themes/custom/subtheme/templates/view/views-view-unformatted--conference_view.html.twig", "/var/www/html/htmlproject/web/themes/custom/subtheme/templates/view/views-view-unformatted--conference_view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 20, "for" => 23, "set" => 25);
        static $filters = array("escape" => 21);
        static $functions = array("file_url" => 33);

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                ['escape'],
                ['file_url']
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
