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

/* modules/custom/accenture_common/templates/faq-block.html.twig */
class __TwigTemplate_c0f9bca7224b68136fabcabc4cc999d18805cf0c0e37dd37c32e57a7dade7c3a extends \Twig\Template
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
        // line 3
        echo "<div class=\"container\">
    <div class=\"row content-tween\">
    <div class=\"col-12 col-lg-8 mx-auto fixedoverflowcontainerfaq content-tween-item\">
        <div class=\"fixedoverflowcover\">
            <div class=\"nav nav-pills nav-fill navcontcover\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 9
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 9), "tid", [], "any", false, false, true, 9) == 1)) {
                // line 10
                echo "                    <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#contmenu";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 10), "tid", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "<br class=\"d-none d-lg-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 10), "description", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                echo "</a>
                    ";
            } else {
                // line 12
                echo "                    <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 12), "tid", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 12), "name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "<br class=\"d-none d-lg-block\">";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 12), "description", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
                echo "</a>
                    ";
            }
            // line 14
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </div>
        </div>
    </div>
    </div>
    <div class=\"row mt-4 pt-lg-2\">
    <div class=\"col-12 col-lg-8 mx-auto text-left\">
        <div class=\"tab-content\">
                ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["faqs"] ?? null));
        foreach ($context['_seq'] as $context["keys"] => $context["childs"]) {
            // line 23
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 23), "tid", [], "any", false, false, true, 23) == 1)) {
                // line 24
                echo "                        <div class=\"tab-pane fade show active content-tween\" id=\"contmenu";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 24), "tid", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
                echo "\">
                        <div id=\"oneaccordion\" class=\"myaccordion\">
                        ";
                // line 26
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["faqsDetails"] ?? null));
                foreach ($context['_seq'] as $context["keys"] => $context["childss"]) {
                    // line 27
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 27), "tid", [], "any", false, false, true, 27) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 27), "tid", [], "any", false, false, true, 27))) {
                        // line 28
                        echo "                        <div class=\"card content-tween-item\">
                            <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont";
                        // line 29
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 29), "nid", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
                        echo "\">
                                <div class=\"row\">
                                    <div class=\"col my-auto\">
                                    <h3>";
                        // line 32
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 32), "featuretitle", [], "any", false, false, true, 32), 32, $this->source), "html", null, true);
                        echo "</h3>
                                    </div>
                                    <div class=\"col-auto text-right mb-auto\">
                                    <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"faqcont";
                        // line 39
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 39), "nid", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
                        echo "\" class=\"collapse\" data-parent=\"#oneaccordion\">
                                <div class=\"card-body\">
                                    ";
                        // line 41
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 41), "body", [], "any", false, false, true, 41), 41, $this->source), "html", null, true);
                        echo "
                                </div>
                            </div>
                        </div>
                        ";
                    }
                    // line 46
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childss'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 47
                echo "                        </div>
                        <br/>
                        <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                        </div>
                    ";
            } else {
                // line 52
                echo "                        <div class=\"tab-pane fade\" id=\"contmenu";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 52), "tid", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
                echo "\">
                        <div id=\"twoaccordion\" class=\"myaccordion\">
                        ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["faqsDetails"] ?? null));
                foreach ($context['_seq'] as $context["keys"] => $context["childss"]) {
                    // line 55
                    echo "                        ";
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childs"], "terms", [], "any", false, false, true, 55), "tid", [], "any", false, false, true, 55) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 55), "tid", [], "any", false, false, true, 55))) {
                        // line 56
                        echo "                        <div class=\"card\">
                            <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq";
                        // line 57
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 57), "tid", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "cont";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 57), "nid", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                        echo "\">
                                <div class=\"row\">
                                    <div class=\"col my-auto\">
                                    <h3>";
                        // line 60
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 60), "featuretitle", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
                        echo "</h3>
                                    </div>
                                    <div class=\"col-auto text-right mb-auto\">
                                    <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"faq";
                        // line 67
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 67), "tid", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "cont";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 67), "nid", [], "any", false, false, true, 67), 67, $this->source), "html", null, true);
                        echo "\" class=\"collapse\" data-parent=\"#twoaccordion\">
                                <div class=\"card-body\">
                                ";
                        // line 69
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["childss"], "faqsData", [], "any", false, false, true, 69), "body", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                        echo "
                                </div>
                            </div>
                        </div>
                        ";
                    }
                    // line 74
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childss'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo "                        </div>
                        <br/>
                        <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                        </div>
                    ";
            }
            // line 80
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['keys'], $context['childs'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "        </div>
    </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/accenture_common/templates/faq-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 81,  215 => 80,  208 => 75,  202 => 74,  194 => 69,  187 => 67,  177 => 60,  169 => 57,  166 => 56,  163 => 55,  159 => 54,  153 => 52,  146 => 47,  140 => 46,  132 => 41,  127 => 39,  117 => 32,  111 => 29,  108 => 28,  105 => 27,  101 => 26,  95 => 24,  92 => 23,  88 => 22,  79 => 15,  73 => 14,  63 => 12,  53 => 10,  50 => 9,  46 => 8,  39 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{#<!-- {{ kint(faqs) }}
{{ kint(faqsDetails) }} --> #}
<div class=\"container\">
    <div class=\"row content-tween\">
    <div class=\"col-12 col-lg-8 mx-auto fixedoverflowcontainerfaq content-tween-item\">
        <div class=\"fixedoverflowcover\">
            <div class=\"nav nav-pills nav-fill navcontcover\">
                {% for keys, childs in faqs %}
                    {% if(childs.terms.tid == 1) %}
                    <a class=\"nav-item nav-link active\" data-toggle=\"tab\" href=\"#contmenu{{childs.terms.tid}}\">{{childs.terms.name}}<br class=\"d-none d-lg-block\">{{childs.terms.description}}</a>
                    {% else %}
                    <a class=\"nav-item nav-link\" data-toggle=\"tab\" href=\"#contmenu{{childs.terms.tid}}\">{{childs.terms.name}}<br class=\"d-none d-lg-block\">{{childs.terms.description}}</a>
                    {% endif %}
                {% endfor %}
            </div>
        </div>
    </div>
    </div>
    <div class=\"row mt-4 pt-lg-2\">
    <div class=\"col-12 col-lg-8 mx-auto text-left\">
        <div class=\"tab-content\">
                {% for keys, childs in faqs %}
                    {% if(childs.terms.tid == 1) %}
                        <div class=\"tab-pane fade show active content-tween\" id=\"contmenu{{childs.terms.tid}}\">
                        <div id=\"oneaccordion\" class=\"myaccordion\">
                        {% for keys, childss in faqsDetails %}
                        {% if(childs.terms.tid == childss.faqsData.tid) %}
                        <div class=\"card content-tween-item\">
                            <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faqcont{{childss.faqsData.nid}}\">
                                <div class=\"row\">
                                    <div class=\"col my-auto\">
                                    <h3>{{childss.faqsData.featuretitle}}</h3>
                                    </div>
                                    <div class=\"col-auto text-right mb-auto\">
                                    <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"faqcont{{childss.faqsData.nid}}\" class=\"collapse\" data-parent=\"#oneaccordion\">
                                <div class=\"card-body\">
                                    {{childss.faqsData.body}}
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        {% endfor %}
                        </div>
                        <br/>
                        <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                        </div>
                    {% else %}
                        <div class=\"tab-pane fade\" id=\"contmenu{{childs.terms.tid}}\">
                        <div id=\"twoaccordion\" class=\"myaccordion\">
                        {% for keys, childss in faqsDetails %}
                        {% if(childs.terms.tid == childss.faqsData.tid) %}
                        <div class=\"card\">
                            <div class=\"card-header text-left collapsed\" data-toggle=\"collapse\" data-target=\"#faq{{childss.faqsData.tid}}cont{{childss.faqsData.nid}}\">
                                <div class=\"row\">
                                    <div class=\"col my-auto\">
                                    <h3>{{childss.faqsData.featuretitle}}</h3>
                                    </div>
                                    <div class=\"col-auto text-right mb-auto\">
                                    <div class=\"cardicons\"><i class=\"icon-plus\"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div id=\"faq{{childss.faqsData.tid}}cont{{childss.faqsData.nid}}\" class=\"collapse\" data-parent=\"#twoaccordion\">
                                <div class=\"card-body\">
                                {{childss.faqsData.body}}
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        {% endfor %}
                        </div>
                        <br/>
                        <button class=\"btn btn-primary\" type=\"button\">Load More</button>
                        </div>
                    {% endif %}
                {% endfor %}
        </div>
    </div>
    </div>
</div>", "modules/custom/accenture_common/templates/faq-block.html.twig", "C:\\xampp\\htdocs\\drupal\\modules\\custom\\accenture_common\\templates\\faq-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 8, "if" => 9);
        static $filters = array("escape" => 10);
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
