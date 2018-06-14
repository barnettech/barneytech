<?php

/* themes/barnettechetjlb/templates/page.html.twig */
class __TwigTemplate_ccd7d670e34a666a1ea899412f2b4f8da4b4c610e108c0e3a5bcd872bbc9a933 extends Twig_Template
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
        $tags = array("if" => 84);
        $filters = array("t" => 80);
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

        // line 78
        echo "<div id=\"page-wrapper\"><div id=\"page\">

  <header id=\"header\" role=\"banner\" aria-label=\"";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\"><div class=\"section clearfix\">

    ";
        // line 82
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "secondary_menu", array()), "html", null, true));
        echo "

    ";
        // line 84
        if (($context["logo"] ?? null)) {
            // line 85
            echo "      <a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
            echo "\" title=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" rel=\"home\" id=\"logo\">
        <img src=\"";
            // line 86
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logo"] ?? null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
            echo "\" />
      </a>
    ";
        }
        // line 89
        echo "
    ";
        // line 90
        if ((($context["site_name"] ?? null) || ($context["site_slogan"] ?? null))) {
            // line 91
            echo "      <div id=\"name-and-slogan\"";
            if ((($context["hide_site_name"] ?? null) && ($context["hide_site_slogan"] ?? null))) {
                echo " class=\"visually-hidden\"";
            }
            echo ">
        ";
            // line 92
            if (($context["site_name"] ?? null)) {
                // line 93
                echo "          ";
                if (($context["title"] ?? null)) {
                    // line 94
                    echo "            <div id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\"";
                    }
                    echo ">
              <strong>
                <a href=\"";
                    // line 96
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                    echo "</span></a>
              </strong>
            </div>
          ";
                    // line 100
                    echo "          ";
                } else {
                    // line 101
                    echo "            <h1 id=\"site-name\"";
                    if (($context["hide_site_name"] ?? null)) {
                        echo " class=\"visually-hidden\" ";
                    }
                    echo ">
              <a href=\"";
                    // line 102
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
                    echo "\" title=\"";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
                    echo "\" rel=\"home\"><span>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
                    echo "</span></a>
            </h1>
          ";
                }
                // line 105
                echo "        ";
            }
            // line 106
            echo "
        ";
            // line 107
            if (($context["site_slogan"] ?? null)) {
                // line 108
                echo "          <div id=\"site-slogan\"";
                if (($context["hide_site_slogan"] ?? null)) {
                    echo " class=\"visually-hidden\"";
                }
                echo ">
            ";
                // line 109
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true));
                echo "
          </div>
        ";
            }
            // line 112
            echo "      </div><!-- /#name-and-slogan -->
    ";
        }
        // line 114
        echo "
    ";
        // line 115
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
    ";
        // line 116
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "

  </div></header> <!-- /.section, /#header-->

  ";
        // line 120
        if (($context["messages"] ?? null)) {
            // line 121
            echo "    <div id=\"messages\"><div class=\"section clearfix\">
      ";
            // line 122
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["messages"] ?? null), "html", null, true));
            echo "
    </div></div> <!-- /.section, /#messages -->
  ";
        }
        // line 125
        echo "
  ";
        // line 126
        if ($this->getAttribute(($context["page"] ?? null), "featured", array())) {
            // line 127
            echo "    <div id=\"featured\"><aside class=\"section clearfix\" role=\"complementary\">
      ";
            // line 128
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured", array()), "html", null, true));
            echo "
    </aside></div> <!-- /.section, /#featured -->
  ";
        }
        // line 131
        echo "
  <div id=\"main-wrapper\" class=\"clearfix\"><div id=\"main\" class=\"clearfix\">
    ";
        // line 133
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["breadcrumb"] ?? null), "html", null, true));
        echo "

    <main id=\"content\" class=\"column\" role=\"main\"><section class=\"section\">
      ";
        // line 136
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            echo "<div id=\"highlighted\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "</div>";
        }
        // line 137
        echo "      <a id=\"main-content\" tabindex=\"-1\"></a>
      ";
        // line 138
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
        ";
        // line 139
        if (($context["title"] ?? null)) {
            // line 140
            echo "          <h1 class=\"title\" id=\"page-title\">
            ";
            // line 141
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
          </h1>
        ";
        }
        // line 144
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
        ";
        // line 145
        if (($context["tabs"] ?? null)) {
            // line 146
            echo "          <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tabs")));
            echo "\">
            ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["tabs"] ?? null), "html", null, true));
            echo "
          </nav>
        ";
        }
        // line 150
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
        ";
        // line 151
        if (($context["action_links"] ?? null)) {
            // line 152
            echo "          <ul class=\"action-links\">
            ";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["action_links"] ?? null), "html", null, true));
            echo "
          </ul>
        ";
        }
        // line 156
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
    </section></main> <!-- /.section, /#content -->

    ";
        // line 159
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 160
            echo "      <div id=\"sidebar-first\" class=\"column sidebar\"><aside class=\"section\" role=\"complementary\">
        ";
            // line 161
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
            echo "
      </aside></div><!-- /.section, /#sidebar-first -->
    ";
        }
        // line 164
        echo "
    ";
        // line 165
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 166
            echo "      <div id=\"sidebar-second\" class=\"column sidebar\"><aside class=\"section\" role=\"complementary\">
        ";
            // line 167
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside></div><!-- /.section, /#sidebar-second -->
    ";
        }
        // line 170
        echo "
  </div></div><!-- /#main, /#main-wrapper -->

  ";
        // line 173
        if ((($this->getAttribute(($context["page"] ?? null), "triptych_first", array()) || $this->getAttribute(($context["page"] ?? null), "triptych_middle", array())) || $this->getAttribute(($context["page"] ?? null), "triptych_last", array()))) {
            // line 174
            echo "    <div id=\"triptych-wrapper\"><aside id=\"triptych\" class=\"clearfix\" role=\"complementary\">
      ";
            // line 175
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "triptych_first", array()), "html", null, true));
            echo "
      ";
            // line 176
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "triptych_middle", array()), "html", null, true));
            echo "
      ";
            // line 177
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "triptych_last", array()), "html", null, true));
            echo "
    </aside></div><!-- /#triptych, /#triptych-wrapper -->
  ";
        }
        // line 180
        echo "
  <div id=\"footer-wrapper\"><footer class=\"section\">

    ";
        // line 183
        if (((($this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", array()) || $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", array())) || $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", array()))) {
            // line 184
            echo "      <div id=\"footer-columns\" class=\"clearfix\">
        ";
            // line 185
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_firstcolumn", array()), "html", null, true));
            echo "
        ";
            // line 186
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_secondcolumn", array()), "html", null, true));
            echo "
        ";
            // line 187
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_thirdcolumn", array()), "html", null, true));
            echo "
        ";
            // line 188
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourthcolumn", array()), "html", null, true));
            echo "
      </div><!-- /#footer-columns -->
    ";
        }
        // line 191
        echo "
    ";
        // line 192
        if ($this->getAttribute(($context["page"] ?? null), "footer", array())) {
            // line 193
            echo "      <div id=\"footer\" role=\"contentinfo\" class=\"clearfix\">
        ";
            // line 194
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
            echo "
      </div> <!-- /#footer -->
   ";
        }
        // line 197
        echo "
  </footer></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
";
    }

    public function getTemplateName()
    {
        return "themes/barnettechetjlb/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 197,  353 => 194,  350 => 193,  348 => 192,  345 => 191,  339 => 188,  335 => 187,  331 => 186,  327 => 185,  324 => 184,  322 => 183,  317 => 180,  311 => 177,  307 => 176,  303 => 175,  300 => 174,  298 => 173,  293 => 170,  287 => 167,  284 => 166,  282 => 165,  279 => 164,  273 => 161,  270 => 160,  268 => 159,  261 => 156,  255 => 153,  252 => 152,  250 => 151,  245 => 150,  239 => 147,  234 => 146,  232 => 145,  227 => 144,  221 => 141,  218 => 140,  216 => 139,  212 => 138,  209 => 137,  203 => 136,  197 => 133,  193 => 131,  187 => 128,  184 => 127,  182 => 126,  179 => 125,  173 => 122,  170 => 121,  168 => 120,  161 => 116,  157 => 115,  154 => 114,  150 => 112,  144 => 109,  137 => 108,  135 => 107,  132 => 106,  129 => 105,  119 => 102,  112 => 101,  109 => 100,  99 => 96,  91 => 94,  88 => 93,  86 => 92,  79 => 91,  77 => 90,  74 => 89,  66 => 86,  59 => 85,  57 => 84,  52 => 82,  47 => 80,  43 => 78,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/barnettechetjlb/templates/page.html.twig", "/Users/james_barnett/Sites/barneytech/themes/barnettechetjlb/templates/page.html.twig");
    }
}
