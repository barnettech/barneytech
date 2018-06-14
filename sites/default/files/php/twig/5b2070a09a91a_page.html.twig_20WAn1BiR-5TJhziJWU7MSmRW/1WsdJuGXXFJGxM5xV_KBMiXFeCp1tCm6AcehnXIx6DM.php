<?php

/* themes/himalaya/templates/page.html.twig */
class __TwigTemplate_24b25bdbeccbe615b0f5f4aeee6940a31d6582ee9f06c2878f04ab75528777af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 13);
        $filters = array("t" => 10);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 8
        echo "<div id=\"page-wrapper\" class=\"section with-arrow\">
  <div id=\"page\">
    <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
      <nav id=\"navigation\" class=\"margin_bottom\">
        <div class=\"container mean-container\">
          ";
        // line 13
        if ($this->getAttribute(($context["page"] ?? null), "logo", array())) {
            // line 14
            echo "            <div class=\"logo\">
              ";
            // line 15
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "logo", array()), "html", null, true));
            echo "
            </div>
          ";
        }
        // line 18
        echo "          <div class=\"mean-bar\">
            ";
        // line 19
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 20
            echo "              <a href=\"#nav\" class=\"meanmenu-reveal\">
                <span></span>
                <span></span>
                <span></span>
              </a>
              <nav class=\"mean-nav submenu\">
                ";
            // line 26
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "  
              </nav>
            ";
        }
        // line 28
        echo "  
          </div>
        ";
        // line 30
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
            // line 31
            echo "            <div id=\"main-menu\">
              ";
            // line 32
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
            echo "
            </div>
         ";
        }
        // line 35
        echo "        </div>
      </nav>
    </header>
    ";
        // line 38
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 39
            echo "      <div class=\"container\">
        <div class=\"header-region col-100 float_left\">
          ";
            // line 41
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 45
        echo "    ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            echo " 
      <div class=\"container\">
        <div class=\"help-wrapper float_left col-100\">
          ";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
            echo "
        </div>
      </div>
    ";
        }
        // line 51
        echo " 
    <div id=\"main-wrapper\" class=\"clearfix paddingt\">
      <div id=\"main\" class=\"clearfix container\">
        ";
        // line 54
        if ($this->getAttribute(($context["page"] ?? null), "breadcrumb", array())) {
            // line 55
            echo "          <div class=\"breadcrumb col-100 float_left\">
            ";
            // line 56
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 59
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 60
            echo "            <div id=\"sidebar\" class=\"column sidebar float_left\">
              <aside class=\"section\" role=\"complementary\">
                ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
              </aside>
            </div>
            <main id=\"content\" class=\"two-column float_left with-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
                ";
            // line 69
            if (($context["title"] ?? null)) {
                // line 70
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 71
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
                  </h1>
                ";
            }
            // line 74
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
                ";
            // line 75
            if (($context["action_links"] ?? null)) {
                // line 76
                echo "                  <ul class=\"action-links\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
                echo "</ul>
                ";
            }
            // line 78
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              </section>
            </main>
            ";
        } else {
            // line 82
            echo "            <main id=\"content\" class=\"col-100 float_left no-left-sidebar\" role=\"main\">
              <section class=\"section\">
                <a id=\"main-content\" tabindex=\"-1\"></a>
                ";
            // line 85
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
            echo "
                ";
            // line 86
            if (($context["title"] ?? null)) {
                // line 87
                echo "                  <h1 class=\"title\" id=\"page-title\">
                    ";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
                echo "
                  </h1>
                ";
            }
            // line 91
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
            echo "
                ";
            // line 92
            if (($context["action_links"] ?? null)) {
                // line 93
                echo "                  <ul class=\"action-links\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
                echo "</ul>
                ";
            }
            // line 95
            echo "                ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
              </section>
            </main>
          ";
        }
        // line 99
        echo "      </div>
    </div>
  </div>
  <div id=\"footer-section container\">
    <div class=\"col-100 float_left footer-inner-section\">
      ";
        // line 104
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 105
            echo "        <div id=\"footer-columns\" class=\"clearfix col-100 float_left\">
          <div class=\"footer-col footer_first_wrapper column-3  float_left\">";
            // line 106
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_second_wrapper column-3 float_left\">";
            // line 107
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_third_wrapper column-3 float_left\">";
            // line 108
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "</div>
          <div class=\"footer-col footer_fourth_wrapper column-3 float_left\">";
            // line 109
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "</div>
        </div>
      ";
        }
        // line 112
        echo "    </div>
  </div>
</div>
<div id=\"footer\">
  ";
        // line 116
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 117
            echo "    <div class=\"section section-full-colored\">
      <div class=\"section-content center\">
        ";
            // line 119
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div>
    </div>
  ";
        }
        // line 123
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/himalaya/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 123,  281 => 119,  277 => 117,  275 => 116,  269 => 112,  263 => 109,  259 => 108,  255 => 107,  251 => 106,  248 => 105,  246 => 104,  239 => 99,  231 => 95,  225 => 93,  223 => 92,  218 => 91,  212 => 88,  209 => 87,  207 => 86,  203 => 85,  198 => 82,  190 => 78,  184 => 76,  182 => 75,  177 => 74,  171 => 71,  168 => 70,  166 => 69,  162 => 68,  153 => 62,  149 => 60,  146 => 59,  140 => 56,  137 => 55,  135 => 54,  130 => 51,  123 => 48,  116 => 45,  109 => 41,  105 => 39,  103 => 38,  98 => 35,  92 => 32,  89 => 31,  87 => 30,  83 => 28,  77 => 26,  69 => 20,  67 => 19,  64 => 18,  58 => 15,  55 => 14,  53 => 13,  47 => 10,  43 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/himalaya/templates/page.html.twig", "/Users/james_barnett/Sites/drupal8/themes/himalaya/templates/page.html.twig");
    }
}
