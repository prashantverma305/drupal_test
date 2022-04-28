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

/* modules/custom/accenture_common/templates/slider-block.html.twig */
class __TwigTemplate_8ab9f620bb7fd2eacbf38ae4d5b2888c6ea16806b621593f241424ef0355f5d2 extends \Twig\Template
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
        echo "<div class=\"hero-banner\">
   ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["homeslider"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 3
            echo "      ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 3), "deskTopImg", [], "any", false, false, true, 3))) {
                // line 4
                echo "        <div class=\"hero-banner-items\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <picture>
               <img class=\"banner-img\" src=\"";
                // line 8
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 8), "deskTopImg", [], "any", false, false, true, 8), 8, $this->source), "html", null, true);
                echo "\" alt=\"Scam Alert\">
               <img class=\"banner-img-mob\" src=\"";
                // line 9
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 9), "mobileImg", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
                echo "\" alt=\"Scam Alert\">
            </picture>
            <div class=\"container textcover\">
               <div class=\"row\">
                  <div class=\"col-12 mx-auto\">
                     <h1 class=\"hero-banner-title specialsmaller animated\" data-animation-in=\"fadeInUp\">";
                // line 14
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 14), "SliderTitle", [], "any", false, false, true, 14), 14, $this->source), "html", null, true);
                echo "</h1>
                     <p class=\"hero-banner-subtitle animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.6\">";
                // line 15
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 15), "SubTitle", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "</p>
                     <a href=\"";
                // line 16
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 16), "link_url", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "\" class=\"generalcta outline minw180 animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.7\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 16), "link_title", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
                echo "</a>
                  </div>
               </div>
            </div>
         </div>
      ";
            } else {
                // line 22
                echo "        <div class=\"hero-banner-items videoslideimg\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <video playsinline webkit-playsinline autoplay loop=\"true\" muted width=\"1280\" height=\"720\" class=\"videoplay\">
               <source type=\"video/mp4\" src=\"";
                // line 26
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 26), "video", [], "any", false, false, true, 26), 26, $this->source), "html", null, true);
                echo "\">
            </video>
            <div class=\"container textcover\">
               <div class=\"row\">
                  <div class=\"col-12 mx-auto\">
                     <h1 class=\"hero-banner-title animated\" data-animation-in=\"fadeInUp\">";
                // line 31
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 31), "SliderTitle", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
                echo "</h1>
                     <p class=\"hero-banner-subtitle animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.6\">";
                // line 32
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 32), "SubTitle", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                echo "</p>
                     <a href=\"";
                // line 33
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 33), "link_url", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "\" class=\"generalcta solidred yvideo animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.85\" target=\"_blank\"><i class=\"icon-play\"></i>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "SliderDetails", [], "any", false, false, true, 33), "link_title", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
                echo "</a>
                  </div>
               </div>
            </div>
         </div>
      ";
            }
            // line 39
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/accenture_common/templates/slider-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  119 => 39,  108 => 33,  104 => 32,  100 => 31,  92 => 26,  86 => 22,  75 => 16,  71 => 15,  67 => 14,  59 => 9,  55 => 8,  49 => 4,  46 => 3,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-banner\">
   {% for keys, childs in homeslider %}
      {% if(childs.SliderDetails.deskTopImg is not empty) %}
        <div class=\"hero-banner-items\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <picture>
               <img class=\"banner-img\" src=\"{{childs.SliderDetails.deskTopImg}}\" alt=\"Scam Alert\">
               <img class=\"banner-img-mob\" src=\"{{childs.SliderDetails.mobileImg}}\" alt=\"Scam Alert\">
            </picture>
            <div class=\"container textcover\">
               <div class=\"row\">
                  <div class=\"col-12 mx-auto\">
                     <h1 class=\"hero-banner-title specialsmaller animated\" data-animation-in=\"fadeInUp\">{{childs.SliderDetails.SliderTitle}}</h1>
                     <p class=\"hero-banner-subtitle animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.6\">{{childs.SliderDetails.SubTitle}}</p>
                     <a href=\"{{childs.SliderDetails.link_url}}\" class=\"generalcta outline minw180 animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.7\">{{childs.SliderDetails.link_title}}</a>
                  </div>
               </div>
            </div>
         </div>
      {% else %}
        <div class=\"hero-banner-items videoslideimg\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <video playsinline webkit-playsinline autoplay loop=\"true\" muted width=\"1280\" height=\"720\" class=\"videoplay\">
               <source type=\"video/mp4\" src=\"{{childs.SliderDetails.video}}\">
            </video>
            <div class=\"container textcover\">
               <div class=\"row\">
                  <div class=\"col-12 mx-auto\">
                     <h1 class=\"hero-banner-title animated\" data-animation-in=\"fadeInUp\">{{childs.SliderDetails.SliderTitle}}</h1>
                     <p class=\"hero-banner-subtitle animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.6\">{{childs.SliderDetails.SubTitle}}</p>
                     <a href=\"{{childs.SliderDetails.link_url}}\" class=\"generalcta solidred yvideo animated\" data-animation-in=\"fadeInUp\" data-delay-in=\"0.85\" target=\"_blank\"><i class=\"icon-play\"></i>{{childs.SliderDetails.link_title}}</a>
                  </div>
               </div>
            </div>
         </div>
      {% endif %}
  {% endfor %}
</div>", "modules/custom/accenture_common/templates/slider-block.html.twig", "C:\\xampp_7\\htdocs\\drupal_test\\modules\\custom\\accenture_common\\templates\\slider-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 2, "if" => 3);
        static $filters = array("escape" => 8);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
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
