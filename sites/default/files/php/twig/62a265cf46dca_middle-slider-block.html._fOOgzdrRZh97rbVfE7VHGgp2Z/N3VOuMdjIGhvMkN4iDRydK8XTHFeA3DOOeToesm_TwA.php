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

/* modules/custom/accenture_common/templates/middle-slider-block.html.twig */
class __TwigTemplate_22da1f3ae5776befdcadafae3377ede5f6bef501ec29dc0ef7c89814683ce714 extends \Twig\Template
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
        echo "<div class=\"container\">
  <div class=\"row stagger-tween mb-5 pb-5 border-bottom\">
    <div class=\"col-12 col-lg-6\">
      <h2 class=\"weight-bolder stagger-tween-item font-primary mb-3 mb-lg-0\">5G EXPLAINED</h2>
    </div>
  </div>
  <div class=\"row stagger-tween\">
    <div class=\"col-12 col-lg-6 my-auto\">
      <!--<h2 class=\"weight-light stagger-tween-item\">What is 5G?</h2>
      <p class=\"larger mt-3 mb-4 mb-lg-0 stagger-tween-item\">
        5G is the latest generation of cellular technology. <br class=\"d-none d-lg-block\">It is meant to deliver faster, more reliable, and lower latency connectivity than earlier generations.  It is set to revolutionise our everyday experiences and open up a future of <br class=\"d-none d-lg-block\">unparalleled possibilities.
      </p>-->
      <dd>";
        // line 13
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, views_embed_view("midde_block", "block_1"), "html", null, true);
        echo "</dd>
    </div>
    <div class=\"col-12 col-lg-6 my-auto stagger-tween-item\">
      <div class=\"row\">
        <div class=\"col-11 col-lg-12 inershadow mx-auto\">
          <div class=\"row no-gutters\">
            <div class=\"col-6 my-auto fivegslider\">
              <div class=\"row no-gutters\">
                <div class=\"col-6\">
                  <div class=\"whatis5g\">
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["network"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 24
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 24), "NetworkID", [], "any", false, false, true, 24) == 5)) {
                // line 25
                echo "                          <div class=\"whatis5g-items colorbluebg\"><div class=\"counter innertop\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 25), "NetworkID", [], "any", false, false, true, 25), 25, $this->source), "html", null, true);
                echo "</div></div>
                        ";
            } else {
                // line 27
                echo "                          <div class=\"whatis5g-items\"><div class=\"innertop\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 27), "NetworkID", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
                echo "</div></div>
                        ";
            }
            // line 29
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                  </div>
                </div>
                <div class=\"col-5 text-left\">
                  <div class=\"innertop\">
                    G
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-6 mb-auto pl-2 pl-lg-3\">
              <div class=\"contentwhatis5g\">
                ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["network"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 42
            echo "                    <div class=\"contentwhatis5g-items\">
                      <div class=\"d-flex align-items-start flex-column h-100\">
                        <p>";
            // line 44
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 44), "body", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "<strong>";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 44), "speed", [], "any", false, false, true, 44), 44, $this->source), "html", null, true);
            echo "</strong></p>
                        <div class=\"mt-auto\"><img src=\"";
            // line 45
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "NetworkDetails", [], "any", false, false, true, 45), "Network_image", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
            echo "\" alt=\"icon\" class=\"logoicon\"></div>
                      </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "
              </div>
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
        return "modules/custom/accenture_common/templates/middle-slider-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 49,  118 => 45,  112 => 44,  108 => 42,  104 => 41,  91 => 30,  85 => 29,  79 => 27,  73 => 25,  70 => 24,  66 => 23,  53 => 13,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <div class=\"row stagger-tween mb-5 pb-5 border-bottom\">
    <div class=\"col-12 col-lg-6\">
      <h2 class=\"weight-bolder stagger-tween-item font-primary mb-3 mb-lg-0\">5G EXPLAINED</h2>
    </div>
  </div>
  <div class=\"row stagger-tween\">
    <div class=\"col-12 col-lg-6 my-auto\">
      <!--<h2 class=\"weight-light stagger-tween-item\">What is 5G?</h2>
      <p class=\"larger mt-3 mb-4 mb-lg-0 stagger-tween-item\">
        5G is the latest generation of cellular technology. <br class=\"d-none d-lg-block\">It is meant to deliver faster, more reliable, and lower latency connectivity than earlier generations.  It is set to revolutionise our everyday experiences and open up a future of <br class=\"d-none d-lg-block\">unparalleled possibilities.
      </p>-->
      <dd>{{ drupal_view('midde_block', 'block_1') }}</dd>
    </div>
    <div class=\"col-12 col-lg-6 my-auto stagger-tween-item\">
      <div class=\"row\">
        <div class=\"col-11 col-lg-12 inershadow mx-auto\">
          <div class=\"row no-gutters\">
            <div class=\"col-6 my-auto fivegslider\">
              <div class=\"row no-gutters\">
                <div class=\"col-6\">
                  <div class=\"whatis5g\">
                    {% for keys, childs in network %}
                        {% if(childs.NetworkDetails.NetworkID == 5) %}
                          <div class=\"whatis5g-items colorbluebg\"><div class=\"counter innertop\">{{childs.NetworkDetails.NetworkID}}</div></div>
                        {% else %}
                          <div class=\"whatis5g-items\"><div class=\"innertop\">{{childs.NetworkDetails.NetworkID}}</div></div>
                        {% endif %}
                    {% endfor %}
                  </div>
                </div>
                <div class=\"col-5 text-left\">
                  <div class=\"innertop\">
                    G
                  </div>
                </div>
              </div>
            </div>
            <div class=\"col-6 mb-auto pl-2 pl-lg-3\">
              <div class=\"contentwhatis5g\">
                {% for keys, childs in network %}
                    <div class=\"contentwhatis5g-items\">
                      <div class=\"d-flex align-items-start flex-column h-100\">
                        <p>{{childs.NetworkDetails.body}}<strong>{{childs.NetworkDetails.speed}}</strong></p>
                        <div class=\"mt-auto\"><img src=\"{{childs.NetworkDetails.Network_image}}\" alt=\"icon\" class=\"logoicon\"></div>
                      </div>
                    </div>
                {% endfor %}

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>", "modules/custom/accenture_common/templates/middle-slider-block.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\custom\\accenture_common\\templates\\middle-slider-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 23, "if" => 24);
        static $filters = array("escape" => 13);
        static $functions = array("drupal_view" => 13);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                ['drupal_view']
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
