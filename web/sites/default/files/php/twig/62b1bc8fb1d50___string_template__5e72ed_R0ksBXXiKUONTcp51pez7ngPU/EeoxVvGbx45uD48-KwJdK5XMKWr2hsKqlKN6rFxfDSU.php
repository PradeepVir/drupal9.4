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

/* __string_template__5e72edafb4855678732a6f0e54816ca9afc9e28f4fee6c9bff491792d86818cd */
class __TwigTemplate_0ddb5a851d0d2eaa0a59b8170b47c24355bfa0866c3b5f1342ff4a2168f46dee extends \Twig\Template
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
        // line 1
        echo "<div class=\"card\">
  <div class=\"card_head\" style=\"width:100%;height:0; padding-top:50%;position:relative; min-height: 200px;\">
    <div class=\"str\"><span></span><i class=\"bi bi-star-fill\"></i></div>
    <div class=\"prc border rounded border-white px-3\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_price"] ?? null), 4, $this->source), "html", null, true);
        echo " </div>
    ";
        // line 5
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_confrance_banner"] ?? null), 5, $this->source), "html", null, true);
        echo "
  </div>
  <div class=\"card-body p-0\">
    <div class=\"card_tx\">
      <h5 class=\"card-title\">";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 9, $this->source), "html", null, true);
        echo "</h5>
      <p class=\"card-text\"><span><i class=\"bi bi-tags-fill\"></i></span> ";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_tags"] ?? null), 10, $this->source), "html", null, true);
        echo "</p>
      <p class=\"card-text\"><span><i class=\"bi bi-calendar-week\"></i></span> ";
        // line 11
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_date"] ?? null), 11, $this->source), "html", null, true);
        echo "</p>
      <p class=\"card-text\"><span class=\"loc\"><i class=\"bi bi-geo-alt-fill\"></i></span> ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["field_conference_location"] ?? null), 12, $this->source), "html", null, true);
        echo " </p>
    </div>
    <div class=\"det_itm\">
      <ul class=\"list-group list-group-horizontal \">
        <li class=\"list-group-item border-start-0\"><a href=\"\"><i class=\"bi bi-heart\"></i></a></li>
        <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-cloud-arrow-down\"></i></a></li>
        <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-share-fill\"></i></a></li>
        <li class=\"list-group-item flex-grow-1 text-center border-end-0\"><a href=\"/node/";
        // line 19
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null), 19, $this->source), "html", null, true);
        echo "\">View Details</a></li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__5e72edafb4855678732a6f0e54816ca9afc9e28f4fee6c9bff491792d86818cd";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 19,  67 => 12,  63 => 11,  59 => 10,  55 => 9,  48 => 5,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{# inline_template_start #}<div class=\"card\">
  <div class=\"card_head\" style=\"width:100%;height:0; padding-top:50%;position:relative; min-height: 200px;\">
    <div class=\"str\"><span></span><i class=\"bi bi-star-fill\"></i></div>
    <div class=\"prc border rounded border-white px-3\">{{ field_conference_price }} </div>
    {{ field_confrance_banner }}
  </div>
  <div class=\"card-body p-0\">
    <div class=\"card_tx\">
      <h5 class=\"card-title\">{{ title }}</h5>
      <p class=\"card-text\"><span><i class=\"bi bi-tags-fill\"></i></span> {{ field_conference_tags }}</p>
      <p class=\"card-text\"><span><i class=\"bi bi-calendar-week\"></i></span> {{ field_conference_date }}</p>
      <p class=\"card-text\"><span class=\"loc\"><i class=\"bi bi-geo-alt-fill\"></i></span> {{ field_conference_location }} </p>
    </div>
    <div class=\"det_itm\">
      <ul class=\"list-group list-group-horizontal \">
        <li class=\"list-group-item border-start-0\"><a href=\"\"><i class=\"bi bi-heart\"></i></a></li>
        <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-cloud-arrow-down\"></i></a></li>
        <li class=\"list-group-item\"><a href=\"\"><i class=\"bi bi-share-fill\"></i></a></li>
        <li class=\"list-group-item flex-grow-1 text-center border-end-0\"><a href=\"/node/{{ nid }}\">View Details</a></li>
      </ul>
    </div>
  </div>
</div>", "__string_template__5e72edafb4855678732a6f0e54816ca9afc9e28f4fee6c9bff491792d86818cd", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
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
