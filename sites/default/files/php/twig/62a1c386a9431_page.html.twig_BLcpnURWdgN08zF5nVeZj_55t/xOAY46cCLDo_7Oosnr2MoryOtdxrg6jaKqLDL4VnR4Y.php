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

/* themes/custom/accenture_theme/templates/page.html.twig */
class __TwigTemplate_d17c2fd6e2463e2f6028796fd966366455fa991e6b5ff5a7a363f93cd565e518 extends \Twig\Template
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
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->extensions["Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension"];
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/accenture_theme/templates/page.html.twig"));

        // line 1
        echo "<header class=\"topnavigation en-header\">
   <div class=\"menutopcover\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12 px-0\">
                  <nav id=\"maintopnavi\" class=\"navbar navbar-expand-lg navbar-light\">
                     <a class=\"navbar-brand mr-auto\" href=\"";
        // line 7
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 7, $this->source), "html", null, true);
        echo "\"><img src=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["logopath"] ?? null), 7, $this->source), "html", null, true);
        echo "\"  alt=\"Lorem Ipsum (DNB) Logo\" class=\"mr-2\"></a>
                     <div class=\"row no-gutters padrightadjust\">
                        <div class=\"col-auto ml-auto\">
                        <img src=\"";
        // line 10
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 10, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 10, $this->source)), "html", null, true);
        echo "/assets/img/logo/5g-logo.png\" class=\"logo5g d-lg-none\" alt=\"5G\">
                        <button class=\"navbar-toggler px-0\" type=\"button\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        </div>
                     </div>
                     <div class=\"d-none d-lg-flex\" id=\"navbarTop\">
                        <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--company btnjsvoid\" href=\"#\">Our Company</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--future btnjsvoid\" href=\"#\">5G Future</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--media btnjsvoid\" href=\"#\">Media</a>
                        </li>
                        <!-- <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--contact btnjsvoid\" href=\"#\">Contact Us</a>
                              </li> -->
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link jscroll-trigger faqlinks\" href=\"./#faq\">FAQ</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <div class=\"nav-link lang-bar\">
                                 <div class=\"lang-bar-item\">
                                    <a id=\"lang-bm\" href=\"./ms/\">BM</a>
                                 </div>
                                 <div class=\"lang-bar-item\">
                                    <a id=\"lang-en\" class=\"active\" href=\"javascript:void(0);\">EN</a>
                                 </div>
                              </div>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 ml-lg-4 d-none d-lg-block\">
                              <img src=\"";
        // line 44
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 44, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 44, $this->source)), "html", null, true);
        echo "/assets/img/logo/5g-logo.png\" class=\"logo5g\" alt=\"5G\">
                        </li>
                        </ul>
                        <!--NavEND-->
                     </div>
                  </nav>
            </div>
         </div>
      </div>
   </div>
   <div id=\"mainavi-submenu\">
      <!--subMenu level 1-->
      <div class=\"submenu submenu--mobmain\">
         <ul class=\"navbar-nav mt-0 pt-0 ml-auto\">
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--company\">Our Company</a>
            </li>
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--future\">5G Future</a>
            </li>
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--media\">Media</a>
            </li>
            <!-- <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--contact\">Contact Us</a>
               </li> -->
            <li class=\"nav-item\">
               <a class=\"nav-link jscroll-trigger faqlinks\" href=\"./#faq\">FAQ</a>
            </li>
            <li class=\"nav-item\">
               <div class=\"nav-link lang-bar\">
                  <div class=\"lang-bar-item\">
                     <a href=\"./ms/\">BM</a>
                  </div>
                  <div class=\"lang-bar-item\">
                     <a href=\"javascript:void(0);\" class=\"active\">EN</a>
                  </div>
               </div>
            </li>
            <li class=\"nav-item pl-0 mx-0 ml-lg-4 d-none d-lg-block\">
               <img src=\"";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 84, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 84, $this->source)), "html", null, true);
        echo "/assets/img/logo/5g-logo.png\" class=\"logo5g\" alt=\"5G\">
            </li>
         </ul>
         <!--NavEND-->
      </div>
      <div class=\"submenu submenu--company\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>About Us</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./about-us.html\" class=\"submenu--list-button\">
                        DNB Role
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Our People</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./leadership.html\" class=\"submenu--list-button\">
                        Board of Directors
                        </a>
                     </li>
                     <li>
                        <a href=\"./leadership.html#managementeam\" class=\"submenu--list-button\">
                        Senior Management Team
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class=\"submenu submenu--future\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <!-- <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Economic Transformation</strong></p>
                  <ul class=\"submenu--list\">
                    <li>
                      <a href=\"./economic-transformation.html\" class=\"submenu--list-button\">
                        Overview
                      </a>
                    </li>
                  </ul>
                  </div> -->
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Roll Out Plan</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./interactive-map.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>5G Benefits</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./benefits-overview.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                     <!-- <li>
                        <a href=\"#\" class=\"submenu--list-button btnjsvoid\" data-id=\"menuindus\">
                          Industries
                        </a>
                        </li> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class=\"submenu submenu--media\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>DNB News</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./news.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Resource Centre</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./partner-desk.html\" class=\"submenu--list-button\">
                        Partner’s Desk
                        </a>
                     </li>
                     <li>
                        <a href=\"./glossary.html\" class=\"submenu--list-button\">
                        Glossary
                        </a>
                     </li>
                     <li>
                        <a href=\"./white-papers.html\" class=\"submenu--list-button\">
                        White Papers
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class=\"submenu submenu--contact\">
         <div class=\"container\">
           <div class=\"row no-gutters\">
             <div class=\"col-12 col-xl-1\">
               <div class=\"submenu--backbtn d-lg-none\">
                 <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                   <i class=\"icon-chevron-prev\"></i>
                 </a>
               </div>
             </div>
             <div class=\"col-12 col-lg-4 col-xl-3\">
               <p><strong>Office Details</strong></p>
               <ul class=\"submenu--list\">
                 <li>
                   <a href=\"#\" class=\"submenu--list-button\">
                     Overview
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
         </div> -->
      <!--subMenu level 2-->
      <div class=\"submenu submenu--subinner submenu--subinner-menuindus\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn subinnerback\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--future\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/retail.html\">
                        Retail
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/education.html\">
                        Education
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/healthcare.html\">
                        Healthcare
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/tourism.html\">
                        Tourism
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/power-and-utilities.html\">
                        Power & Utilities
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/oil-and-gas.html\">
                        Oil & Gas
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/manufacturing.html\">
                        Manufacturing
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/ports.html\">
                        Ports
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/agriculture.html\">
                        Agriculture
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/government-public-safety-welfare.html\">
                        Government, Public Safety and Welfare
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<main role=\"main\">
   <section>
      ";
        // line 321
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 321), 321, $this->source), "html", null, true);
        echo "
   </section>
</main>
<footer>
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>Get In Touch</strong></p>
         <p class=\"mt-1 pt-1\">
            ";
        // line 330
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_description"] ?? null), 330, $this->source), "html", null, true);
        echo "
         </p>
         </div>
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>General Inquiries</strong></p>
         <p class=\"mt-1 pt-1\">
            ";
        // line 336
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["email_id"] ?? null)))) {
            // line 337
            echo "               <a href=\"mailto:";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_id"] ?? null), 337, $this->source), "html", null, true);
            echo "\" class=\"ctalinks\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["email_id"] ?? null), 337, $this->source), "html", null, true);
            echo "</a>
            ";
        }
        // line 339
        echo "         </p>
         <p class=\"footer--paddingtop m-0\"><strong>Connect with us</strong></p>
         <p class=\"mt-1 pt-1\">
            ";
        // line 342
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["linked_in"] ?? null)))) {
            // line 343
            echo "               <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linked_in"] ?? null), 343, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                  <img src=\"";
            // line 344
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 344, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 344, $this->source)), "html", null, true);
            echo "/assets/img/icon/icon-linkedin.png\" alt=\"Linkedin\">
               </a>&nbsp;
            ";
        }
        // line 347
        echo "            ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["facebook"] ?? null)))) {
            // line 348
            echo "               <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook"] ?? null), 348, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                  <img src=\"";
            // line 349
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 349, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 349, $this->source)), "html", null, true);
            echo "/assets/img/icon/icon-facebook.png\" alt=\"Linkedin\">
               </a>&nbsp;
            ";
        }
        // line 352
        echo "            ";
        if ( !twig_test_empty($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(($context["youtube"] ?? null)))) {
            // line 353
            echo "               <a href=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["youtube"] ?? null), 353, $this->source), "html", null, true);
            echo "\" target=\"_blank\">
                  <img src=\"";
            // line 354
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($this->sandbox->ensureToStringAllowed(($context["base_path"] ?? null), 354, $this->source) . $this->sandbox->ensureToStringAllowed(($context["directory"] ?? null), 354, $this->source)), "html", null, true);
            echo "/assets/img/icon/icon-youtube.png\" alt=\"Linkedin\">
               </a>&nbsp;
            ";
        }
        // line 357
        echo "         </p>
         </div>
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>Quick Links</strong></p>
         <p class=\"mt-1 pt-1\">
         <p class=\"m-0\"><a href=\"careers.html\">Careers</a></p>
         <p class=\"mt-2 pt-1\"><a href=\"partners.html\">Partners</a></p>
         <!-- <p class=\"mt-2 pt-1\"><a href=\"\">MNO</a></p> -->
         </p>
         </div>
         <!--scrolltotop-->
         <a href=\"#page-top\" class=\"jscroll-trigger scrolltotop\">
         <i class=\"icon-chevron-top\"></i>
         </a>
         <!-- <div class=\"col-12 pt-3\">
         <p class=\"tinytxt\">We are constantly expanding the content of our website. Check back frequently for the latest updates.</p>
         </div> -->
      </div>
      <hr>
      <div class=\"row\">
         <div class=\"col-12 col-lg order-lg-2 text-lg-right my-auto\">
         <a href=\"./privacy-notice.html\" class=\"footnote\">Privacy Notice</a>
         </div>
         <div class=\"col-12 col-lg order-lg-1 my-auto\">
         <p class=\"footnote\">
               &copy; 2021 Lorem Ipsum (1219503-P) All Rights Reserved
         </p>
         </div>
      </div>
   </div>
</footer>
<!--MODAL-->
<div class=\"modal generalmodal\" id=\"videomodal\">
   <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body bg-black\">
            <div class=\"row\">
               <div class=\"embed-responsive embed-responsive-16by9\">
                  <iframe class=\"embed-responsive-item\" src=\"\" frameborder=\"0\" allowfullscreen=\"\" allow=\"autoplay; encrypted-media\"></iframe>
               </div>
               <button type=\"button\" class=\"closebtn\" data-dismiss=\"modal\" aria-label=\"Close\">
               <i class=\"icon-close\"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   \$('.counter').countUp({
     duration: 3000
   });
   
   \$('.newcounter').countUp({
     duration: 600
   });
   
   \$(window).scroll(function() {
     var scrollPosition = \$(window).scrollTop();
     var secfaq = \$(\"#faq\").offset().top - 60;
     if (scrollPosition >= secfaq) {
       \$('.faqlinks').addClass(\"active\");
     }
     if (scrollPosition < secfaq) {
       \$('.faqlinks').removeClass(\"active\");
     }
   });
</script>";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/accenture_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 357,  449 => 354,  444 => 353,  441 => 352,  435 => 349,  430 => 348,  427 => 347,  421 => 344,  416 => 343,  414 => 342,  409 => 339,  401 => 337,  399 => 336,  390 => 330,  378 => 321,  138 => 84,  95 => 44,  58 => 10,  50 => 7,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"topnavigation en-header\">
   <div class=\"menutopcover\">
      <div class=\"container\">
         <div class=\"row\">
            <div class=\"col-12 px-0\">
                  <nav id=\"maintopnavi\" class=\"navbar navbar-expand-lg navbar-light\">
                     <a class=\"navbar-brand mr-auto\" href=\"{{base_path}}\"><img src=\"{{logopath}}\"  alt=\"Lorem Ipsum (DNB) Logo\" class=\"mr-2\"></a>
                     <div class=\"row no-gutters padrightadjust\">
                        <div class=\"col-auto ml-auto\">
                        <img src=\"{{ base_path ~ directory }}/assets/img/logo/5g-logo.png\" class=\"logo5g d-lg-none\" alt=\"5G\">
                        <button class=\"navbar-toggler px-0\" type=\"button\">
                        <span class=\"navbar-toggler-icon\"></span>
                        </button>
                        </div>
                     </div>
                     <div class=\"d-none d-lg-flex\" id=\"navbarTop\">
                        <ul class=\"navbar-nav ml-auto\">
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--company btnjsvoid\" href=\"#\">Our Company</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--future btnjsvoid\" href=\"#\">5G Future</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--media btnjsvoid\" href=\"#\">Media</a>
                        </li>
                        <!-- <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link menu--contact btnjsvoid\" href=\"#\">Contact Us</a>
                              </li> -->
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <a class=\"nav-link jscroll-trigger faqlinks\" href=\"./#faq\">FAQ</a>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 mx-lg-4\">
                              <div class=\"nav-link lang-bar\">
                                 <div class=\"lang-bar-item\">
                                    <a id=\"lang-bm\" href=\"./ms/\">BM</a>
                                 </div>
                                 <div class=\"lang-bar-item\">
                                    <a id=\"lang-en\" class=\"active\" href=\"javascript:void(0);\">EN</a>
                                 </div>
                              </div>
                        </li>
                        <li class=\"nav-item pl-0 mx-0 ml-lg-4 d-none d-lg-block\">
                              <img src=\"{{ base_path ~ directory }}/assets/img/logo/5g-logo.png\" class=\"logo5g\" alt=\"5G\">
                        </li>
                        </ul>
                        <!--NavEND-->
                     </div>
                  </nav>
            </div>
         </div>
      </div>
   </div>
   <div id=\"mainavi-submenu\">
      <!--subMenu level 1-->
      <div class=\"submenu submenu--mobmain\">
         <ul class=\"navbar-nav mt-0 pt-0 ml-auto\">
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--company\">Our Company</a>
            </li>
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--future\">5G Future</a>
            </li>
            <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--media\">Media</a>
            </li>
            <!-- <li class=\"nav-item\">
               <a class=\"nav-link monbmenu btnjsvoid\" href=\"#\" data-type=\"submenu--contact\">Contact Us</a>
               </li> -->
            <li class=\"nav-item\">
               <a class=\"nav-link jscroll-trigger faqlinks\" href=\"./#faq\">FAQ</a>
            </li>
            <li class=\"nav-item\">
               <div class=\"nav-link lang-bar\">
                  <div class=\"lang-bar-item\">
                     <a href=\"./ms/\">BM</a>
                  </div>
                  <div class=\"lang-bar-item\">
                     <a href=\"javascript:void(0);\" class=\"active\">EN</a>
                  </div>
               </div>
            </li>
            <li class=\"nav-item pl-0 mx-0 ml-lg-4 d-none d-lg-block\">
               <img src=\"{{ base_path ~ directory }}/assets/img/logo/5g-logo.png\" class=\"logo5g\" alt=\"5G\">
            </li>
         </ul>
         <!--NavEND-->
      </div>
      <div class=\"submenu submenu--company\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>About Us</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./about-us.html\" class=\"submenu--list-button\">
                        DNB Role
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Our People</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./leadership.html\" class=\"submenu--list-button\">
                        Board of Directors
                        </a>
                     </li>
                     <li>
                        <a href=\"./leadership.html#managementeam\" class=\"submenu--list-button\">
                        Senior Management Team
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class=\"submenu submenu--future\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <!-- <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Economic Transformation</strong></p>
                  <ul class=\"submenu--list\">
                    <li>
                      <a href=\"./economic-transformation.html\" class=\"submenu--list-button\">
                        Overview
                      </a>
                    </li>
                  </ul>
                  </div> -->
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Roll Out Plan</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./interactive-map.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>5G Benefits</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./benefits-overview.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                     <!-- <li>
                        <a href=\"#\" class=\"submenu--list-button btnjsvoid\" data-id=\"menuindus\">
                          Industries
                        </a>
                        </li> -->
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <div class=\"submenu submenu--media\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn d-lg-none\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>DNB News</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./news.html\" class=\"submenu--list-button\">
                        Overview
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-4 col-xl-3\">
                  <p><strong>Resource Centre</strong></p>
                  <ul class=\"submenu--list\">
                     <li>
                        <a href=\"./partner-desk.html\" class=\"submenu--list-button\">
                        Partner’s Desk
                        </a>
                     </li>
                     <li>
                        <a href=\"./glossary.html\" class=\"submenu--list-button\">
                        Glossary
                        </a>
                     </li>
                     <li>
                        <a href=\"./white-papers.html\" class=\"submenu--list-button\">
                        White Papers
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- <div class=\"submenu submenu--contact\">
         <div class=\"container\">
           <div class=\"row no-gutters\">
             <div class=\"col-12 col-xl-1\">
               <div class=\"submenu--backbtn d-lg-none\">
                 <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--mobmain\">
                   <i class=\"icon-chevron-prev\"></i>
                 </a>
               </div>
             </div>
             <div class=\"col-12 col-lg-4 col-xl-3\">
               <p><strong>Office Details</strong></p>
               <ul class=\"submenu--list\">
                 <li>
                   <a href=\"#\" class=\"submenu--list-button\">
                     Overview
                   </a>
                 </li>
               </ul>
             </div>
           </div>
         </div>
         </div> -->
      <!--subMenu level 2-->
      <div class=\"submenu submenu--subinner submenu--subinner-menuindus\">
         <div class=\"container\">
            <div class=\"row no-gutters\">
               <div class=\"col-12 col-xl-1\">
                  <div class=\"submenu--backbtn subinnerback\">
                     <a href=\"#\" class=\"circta btnjsvoid\" data-type=\"submenu--future\">
                     <i class=\"icon-chevron-prev\"></i>
                     </a>
                  </div>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/retail.html\">
                        Retail
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/education.html\">
                        Education
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/healthcare.html\">
                        Healthcare
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/tourism.html\">
                        Tourism
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/power-and-utilities.html\">
                        Power & Utilities
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/oil-and-gas.html\">
                        Oil & Gas
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/manufacturing.html\">
                        Manufacturing
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/ports.html\">
                        Ports
                        </a>
                     </li>
                  </ul>
               </div>
               <div class=\"col-12 col-lg-3\">
                  <ul class=\"submenu--list innerlist\">
                     <li>
                        <a href=\"./industries/agriculture.html\">
                        Agriculture
                        </a>
                     </li>
                     <li>
                        <a href=\"./industries/government-public-safety-welfare.html\">
                        Government, Public Safety and Welfare
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</header>
<main role=\"main\">
   <section>
      {{page.content}}
   </section>
</main>
<footer>
   <div class=\"container\">
      <div class=\"row\">
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>Get In Touch</strong></p>
         <p class=\"mt-1 pt-1\">
            {{footer_description}}
         </p>
         </div>
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>General Inquiries</strong></p>
         <p class=\"mt-1 pt-1\">
            {% if email_id|render is not empty %}
               <a href=\"mailto:{{email_id}}\" class=\"ctalinks\">{{email_id}}</a>
            {% endif %}
         </p>
         <p class=\"footer--paddingtop m-0\"><strong>Connect with us</strong></p>
         <p class=\"mt-1 pt-1\">
            {% if linked_in|render is not empty %}
               <a href=\"{{linked_in}}\" target=\"_blank\">
                  <img src=\"{{ base_path ~ directory }}/assets/img/icon/icon-linkedin.png\" alt=\"Linkedin\">
               </a>&nbsp;
            {% endif %}
            {% if facebook|render is not empty %}
               <a href=\"{{facebook}}\" target=\"_blank\">
                  <img src=\"{{ base_path ~ directory }}/assets/img/icon/icon-facebook.png\" alt=\"Linkedin\">
               </a>&nbsp;
            {% endif %}
            {% if youtube|render is not empty %}
               <a href=\"{{youtube}}\" target=\"_blank\">
                  <img src=\"{{ base_path ~ directory }}/assets/img/icon/icon-youtube.png\" alt=\"Linkedin\">
               </a>&nbsp;
            {% endif %}
         </p>
         </div>
         <div class=\"col-12 col-lg-4 mb-4\">
         <p><strong>Quick Links</strong></p>
         <p class=\"mt-1 pt-1\">
         <p class=\"m-0\"><a href=\"careers.html\">Careers</a></p>
         <p class=\"mt-2 pt-1\"><a href=\"partners.html\">Partners</a></p>
         <!-- <p class=\"mt-2 pt-1\"><a href=\"\">MNO</a></p> -->
         </p>
         </div>
         <!--scrolltotop-->
         <a href=\"#page-top\" class=\"jscroll-trigger scrolltotop\">
         <i class=\"icon-chevron-top\"></i>
         </a>
         <!-- <div class=\"col-12 pt-3\">
         <p class=\"tinytxt\">We are constantly expanding the content of our website. Check back frequently for the latest updates.</p>
         </div> -->
      </div>
      <hr>
      <div class=\"row\">
         <div class=\"col-12 col-lg order-lg-2 text-lg-right my-auto\">
         <a href=\"./privacy-notice.html\" class=\"footnote\">Privacy Notice</a>
         </div>
         <div class=\"col-12 col-lg order-lg-1 my-auto\">
         <p class=\"footnote\">
               &copy; 2021 Lorem Ipsum (1219503-P) All Rights Reserved
         </p>
         </div>
      </div>
   </div>
</footer>
<!--MODAL-->
<div class=\"modal generalmodal\" id=\"videomodal\">
   <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
      <div class=\"modal-content\">
         <div class=\"modal-body bg-black\">
            <div class=\"row\">
               <div class=\"embed-responsive embed-responsive-16by9\">
                  <iframe class=\"embed-responsive-item\" src=\"\" frameborder=\"0\" allowfullscreen=\"\" allow=\"autoplay; encrypted-media\"></iframe>
               </div>
               <button type=\"button\" class=\"closebtn\" data-dismiss=\"modal\" aria-label=\"Close\">
               <i class=\"icon-close\"></i>
               </button>
            </div>
         </div>
      </div>
   </div>
</div>
<script>
   \$('.counter').countUp({
     duration: 3000
   });
   
   \$('.newcounter').countUp({
     duration: 600
   });
   
   \$(window).scroll(function() {
     var scrollPosition = \$(window).scrollTop();
     var secfaq = \$(\"#faq\").offset().top - 60;
     if (scrollPosition >= secfaq) {
       \$('.faqlinks').addClass(\"active\");
     }
     if (scrollPosition < secfaq) {
       \$('.faqlinks').removeClass(\"active\");
     }
   });
</script>", "themes/custom/accenture_theme/templates/page.html.twig", "C:\\xampp_7\\htdocs\\drupal_test\\themes\\custom\\accenture_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 336);
        static $filters = array("escape" => 7, "render" => 336);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'render'],
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
