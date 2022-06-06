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

/* themes/custom/accenture_theme/templates/user-login-form.html.twig */
class __TwigTemplate_af612e7f2d2ae6f8f817eea7534dfd7be37a979120a173422012da731b380bc6 extends \Twig\Template
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
        echo "<section id=\"user-login\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-5 yg-business-login\">                                  
            <div class=\"login-text\">                              
                <h2 class=\"title\" style=\"text-align:center;\"><strong>USER <span>LOGIN</span></strong></h2> 
                <form role=\"form\" id=\"sub-form\">
                    <div class=\"form-group\">
                     ";
        // line 9
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"form-group\">
                    ";
        // line 12
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pass", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
        echo "
                    </div>
                    <div class=\"form-group\">
                        <a href=\"";
        // line 15
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_url"] ?? null), 15, $this->source), "html", null, true);
        echo "/user/password\" alt=\"Request new password via email\">Forgot password?</a>
                    </div>
                    ";
        // line 17
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_build_id", [], "any", false, false, true, 17), 17, $this->source), "html", null, true);
        echo "
                    ";
        // line 18
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "form_id", [], "any", false, false, true, 18), 18, $this->source), "html", null, true);
        echo "
                    <div class=\"login-button\">
                        ";
        // line 20
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "actions", [], "any", false, false, true, 20), 20, $this->source), "html", null, true);
        echo "
                    </div>
                </form>
            </div>        
        </div>                  
    </div>
  </div>
</section>  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/accenture_theme/templates/user-login-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 20,  70 => 18,  66 => 17,  61 => 15,  55 => 12,  49 => 9,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"user-login\">
  <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-md-5 yg-business-login\">                                  
            <div class=\"login-text\">                              
                <h2 class=\"title\" style=\"text-align:center;\"><strong>USER <span>LOGIN</span></strong></h2> 
                <form role=\"form\" id=\"sub-form\">
                    <div class=\"form-group\">
                     {{ form.name }}
                    </div>
                    <div class=\"form-group\">
                    {{ form.pass }}
                    </div>
                    <div class=\"form-group\">
                        <a href=\"{{ base_url }}/user/password\" alt=\"Request new password via email\">Forgot password?</a>
                    </div>
                    {{ form.form_build_id }}
                    {{ form.form_id }}
                    <div class=\"login-button\">
                        {{ form.actions }}
                    </div>
                </form>
            </div>        
        </div>                  
    </div>
  </div>
</section>  ", "themes/custom/accenture_theme/templates/user-login-form.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\custom\\accenture_theme\\templates\\user-login-form.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 9);
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
