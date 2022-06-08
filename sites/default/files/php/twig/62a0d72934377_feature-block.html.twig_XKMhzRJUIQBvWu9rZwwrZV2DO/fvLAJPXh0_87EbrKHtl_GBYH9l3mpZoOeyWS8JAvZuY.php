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

/* modules/custom/accenture_common/templates/feature-block.html.twig */
class __TwigTemplate_5bc74d3e6ec23243351a0264f5d08432d0e386b6fb08c9ce1dcb94bdbc5c7440 extends \Twig\Template
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
        echo "<div class=\"vid-banner\">
         <div class=\"vid-banner-items videoslideimg\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <video playsinline webkit-playsinline autoplay muted width=\"1280\" height=\"720\" class=\"videoplay\">
               <source type=\"video/mp4\" src=\"";
        // line 6
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 6, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 6, $this->source)), "html", null, true);
        echo "/assets/video/unparalleled-possibilities.mp4\">
            </video>
            <div class=\"container stagger-tween textcover\">
               <div class=\"row\">
                  <div class=\"col-12 col-lg-6 order-1 order-lg-2 offset-lg-6 my-auto\">
                     <div class=\"row\">
                        <div class=\"col-12\">
                           <h2 class=\"text-white firstline stagger-tween-item mt-3 pt-5 mt-lg-0 pt-lg-0\">
                              How Will 5G Enable <br class=\"d-none d-lg-block\">
                              Unparalleled Possibilities <br class=\"d-none d-lg-block\">
                              for the Future?
                           </h2>
                        </div>
                     </div>
                     <div class=\"row mb-5 pb-3 mb-lg-3 pb-lg-0\">
                         ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["feature"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 22
            echo "                           <div class=\"col-6 stagger-tween-item\">
                              <div class=\"uspcontent\">
                                 <div class=\"uspcontent-title\"><span class=\"newcounter\">";
            // line 24
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "featureDetail", [], "any", false, false, true, 24), "from", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "</span>x ";
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "featureDetail", [], "any", false, false, true, 24), "to", [], "any", false, false, true, 24))) {
                echo " to <span class=\"newcounter\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "featureDetail", [], "any", false, false, true, 24), "to", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "</span>x";
            }
            echo "</div>
                                 <div class=\"uspcontent-sub\">";
            // line 25
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "featureDetail", [], "any", false, false, true, 25), "body", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
            echo "</div>
                              </div>
                           </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                        <div class=\"col-12 stagger-tween-item\">
                           <a href=\"./benefits-overview.html\" class=\"generalcta outline hoversolid mt-5\">Discover 5G’s Possibilities</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/accenture_common/templates/feature-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 29,  82 => 25,  72 => 24,  68 => 22,  64 => 21,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"vid-banner\">
         <div class=\"vid-banner-items videoslideimg\">
            <div class=\"videobgoverlay\"></div>
            <div class=\"bgoverlay2\"></div>
            <video playsinline webkit-playsinline autoplay muted width=\"1280\" height=\"720\" class=\"videoplay\">
               <source type=\"video/mp4\" src=\"{{ base_path ~ directory }}/assets/video/unparalleled-possibilities.mp4\">
            </video>
            <div class=\"container stagger-tween textcover\">
               <div class=\"row\">
                  <div class=\"col-12 col-lg-6 order-1 order-lg-2 offset-lg-6 my-auto\">
                     <div class=\"row\">
                        <div class=\"col-12\">
                           <h2 class=\"text-white firstline stagger-tween-item mt-3 pt-5 mt-lg-0 pt-lg-0\">
                              How Will 5G Enable <br class=\"d-none d-lg-block\">
                              Unparalleled Possibilities <br class=\"d-none d-lg-block\">
                              for the Future?
                           </h2>
                        </div>
                     </div>
                     <div class=\"row mb-5 pb-3 mb-lg-3 pb-lg-0\">
                         {% for keys, childs in feature %}
                           <div class=\"col-6 stagger-tween-item\">
                              <div class=\"uspcontent\">
                                 <div class=\"uspcontent-title\"><span class=\"newcounter\">{{childs.featureDetail.from}}</span>x {% if(childs.featureDetail.to is not empty) %} to <span class=\"newcounter\">{{childs.featureDetail.to}}</span>x{% endif %}</div>
                                 <div class=\"uspcontent-sub\">{{childs.featureDetail.body}}</div>
                              </div>
                           </div>
                        {% endfor %}
                        <div class=\"col-12 stagger-tween-item\">
                           <a href=\"./benefits-overview.html\" class=\"generalcta outline hoversolid mt-5\">Discover 5G’s Possibilities</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>", "modules/custom/accenture_common/templates/feature-block.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\custom\\accenture_common\\templates\\feature-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 21, "if" => 24);
        static $filters = array("escape" => 6);
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
