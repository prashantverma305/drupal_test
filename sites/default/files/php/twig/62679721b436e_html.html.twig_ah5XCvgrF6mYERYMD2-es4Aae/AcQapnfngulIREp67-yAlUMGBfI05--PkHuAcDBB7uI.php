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

/* themes/custom/accenture_theme/templates/html.html.twig */
class __TwigTemplate_d1aad85ddd74c2897af01b9c3ac75cdc8463b61f7ce6fba235ff4de75b66b4a1 extends \Twig\Template
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
        // line 28
        echo "  ";
        // line 29
        $context["body_classes"] = [0 => (( !        // line 30
($context["root_path"] ?? null)) ? ("path-frontpage") : (("path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source))))), 1 => ((twig_get_attribute($this->env, $this->source,         // line 31
($context["path_info"] ?? null), "args", [], "any", false, false, true, 31)) ? (("path-" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["path_info"] ?? null), "args", [], "any", false, false, true, 31), 31, $this->source))) : (""))];
        // line 34
        echo "  
<!DOCTYPE html>
<html";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["html_attributes"] ?? null), 36, $this->source), "html", null, true);
        echo ">
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1\">
    <head-placeholder token=\"";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 39, $this->source));
        echo "\">
    <title>";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 40, $this->source), " | "));
        echo "</title>
    <css-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
    <js-placeholder token=\"";
        // line 42
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 42, $this->source));
        echo "\">
  </head>
  <body";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["body_classes"] ?? null)], "method", false, false, true, 44), 44, $this->source), "html", null, true);
        echo " id=\"outer-page\">
    ";
        // line 45
        if ( !twig_test_empty(($context["preloader"] ?? null))) {
            // line 46
            echo "    <!-- Preloader -->
  <div class=\"preloader\">
    <div class=\"clear-loading loading-effect-2\">
      <span></span>
    </div>
        <div class=\"preloader-toppart\"></div>
        <div class=\"preloader-bottompart\"></div>
  </div>
  ";
        }
        // line 55
        echo "    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      ";
        // line 56
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Skip to main content"));
        echo "
    </a>
    ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 58, $this->source), "html", null, true);
        echo "
    ";
        // line 59
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 59, $this->source), "html", null, true);
        echo "
    ";
        // line 60
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 60, $this->source), "html", null, true);
        echo "
    <js-bottom-placeholder token=\"";
        // line 61
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 61, $this->source));
        echo "\">
  ";
        // line 62
        if (($context["goto"] ?? null)) {
            // line 63
            echo "  ";
        }
        // line 64
        echo "  </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/accenture_theme/templates/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 64,  115 => 63,  113 => 62,  109 => 61,  105 => 60,  101 => 59,  97 => 58,  92 => 56,  89 => 55,  78 => 46,  76 => 45,  72 => 44,  67 => 42,  63 => 41,  59 => 40,  55 => 39,  49 => 36,  45 => 34,  43 => 31,  42 => 30,  41 => 29,  39 => 28,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Default theme implementation for the basic structure of a single Drupal page.
 *
 * Variables:
 * - logged_in: A flag indicating if user is logged in.
 * - root_path: The root path of the current page (e.g., node, admin, user).
 * - node_type: The content type for the current node, if the page is a node.
 * - head_title: List of text elements that make up the head_title variable.
 *   May contain or more of the following:
 *   - title: The title of the page.
 *   - name: The name of the site.
 *   - slogan: The slogan of the site.
 * - page_top: Initial rendered markup. This should be printed before 'page'.
 * - page: The rendered page markup.
 * - page_bottom: Closing rendered markup. This variable should be printed after
 *   'page'.
 * - db_offline: A flag indicating if the database is offline.
 * - placeholder_token: The token for generating head, css, js and js-bottom
 *   placeholders.
 *
 * @see template_preprocess_html()
 *
 * @ingroup themeable
 */
#}
  {%
    set body_classes = [
      not root_path ? 'path-frontpage' : 'path-' ~ root_path|clean_class,
      path_info.args ? 'path-' ~ path_info.args,
    ]
  %}
  
<!DOCTYPE html>
<html{{ html_attributes }}>
  <head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1\">
    <head-placeholder token=\"{{ placeholder_token|raw }}\">
    <title>{{ head_title|safe_join(' | ') }}</title>
    <css-placeholder token=\"{{ placeholder_token|raw }}\">
    <js-placeholder token=\"{{ placeholder_token|raw }}\">
  </head>
  <body{{ attributes.addClass(body_classes) }} id=\"outer-page\">
    {% if preloader is not empty %}
    <!-- Preloader -->
  <div class=\"preloader\">
    <div class=\"clear-loading loading-effect-2\">
      <span></span>
    </div>
        <div class=\"preloader-toppart\"></div>
        <div class=\"preloader-bottompart\"></div>
  </div>
  {% endif %}
    <a href=\"#main-content\" class=\"visually-hidden focusable\">
      {{ 'Skip to main content'|t }}
    </a>
    {{ page_top }}
    {{ page }}
    {{ page_bottom }}
    <js-bottom-placeholder token=\"{{ placeholder_token|raw }}\">
  {% if goto %}
  {% endif %}
  </body>
</html>
", "themes/custom/accenture_theme/templates/html.html.twig", "C:\\xampp_7\\htdocs\\drupal_test\\themes\\custom\\accenture_theme\\templates\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 29, "if" => 45);
        static $filters = array("clean_class" => 30, "escape" => 36, "raw" => 39, "safe_join" => 40, "t" => 56);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'escape', 'raw', 'safe_join', 't'],
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
