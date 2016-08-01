<?php

/* themes/custom/d8test/templates/page.html.twig */
class __TwigTemplate_42f902f2599e786559f03cd2ac6fdd66965845d824be71e3893be0ff04d4661e extends Twig_Template
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
        $tags = array("if" => 29);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo " <header role=\"banner\" class=\"header\">
  <div class=\"container\">
  <div class=\"row\">
    ";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
    </div>
    </div>
  </header>
 <section class=\"breadcrumbs\">
   <div class=\"container\">
       ";
        // line 10
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "
   </div>
 </section>
 <section class=\"main-content\">
<div class=\"container\">

 

  ";
        // line 18
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 19
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "





  ";
        // line 25
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

  <main role=\"main\">
    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 29
        echo "   ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_primary", array())) {
            // line 30
            echo "   <div class=\"col-sm-4\">
      <aside class=\"layout-sidebar-first sidebar\" role=\"complementary\">
        ";
            // line 32
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_primary", array()), "html", null, true));
            echo "
      </aside>
      </div>
    ";
        }
        // line 36
        echo "    <div class=\"layout-content col-sm-8\">
      ";
        // line 37
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
    </div>";
        // line 39
        echo "
 

    ";
        // line 42
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 43
            echo "      <aside class=\"layout-sidebar-second\" role=\"complementary\">
        ";
            // line 44
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
            echo "
      </aside>
    ";
        }
        // line 47
        echo "
  </main>

  

</div>";
        // line 53
        echo "</section>
 ";
        // line 54
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 55
            echo "    <footer role=\"contentinfo\" class=\"footer\">
    <div class=\"container\">
      ";
            // line 57
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
      </div>
    </footer>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/custom/d8test/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 57,  136 => 55,  134 => 54,  131 => 53,  124 => 47,  118 => 44,  115 => 43,  113 => 42,  108 => 39,  104 => 37,  101 => 36,  94 => 32,  90 => 30,  87 => 29,  81 => 25,  72 => 19,  68 => 18,  57 => 10,  48 => 4,  43 => 1,);
    }
}
/*  <header role="banner" class="header">*/
/*   <div class="container">*/
/*   <div class="row">*/
/*     {{ page.header }}*/
/*     </div>*/
/*     </div>*/
/*   </header>*/
/*  <section class="breadcrumbs">*/
/*    <div class="container">*/
/*        {{ page.breadcrumb }}*/
/*    </div>*/
/*  </section>*/
/*  <section class="main-content">*/
/* <div class="container">*/
/* */
/*  */
/* */
/*   {{ page.primary_menu }}*/
/*   {{ page.secondary_menu }}*/
/* */
/* */
/* */
/* */
/* */
/*   {{ page.help }}*/
/* */
/*   <main role="main">*/
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/*    {% if page.sidebar_primary %}*/
/*    <div class="col-sm-4">*/
/*       <aside class="layout-sidebar-first sidebar" role="complementary">*/
/*         {{ page.sidebar_primary }}*/
/*       </aside>*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="layout-content col-sm-8">*/
/*       {{ page.content }}*/
/*     </div>{# /.layout-content #}*/
/* */
/*  */
/* */
/*     {% if page.sidebar_second %}*/
/*       <aside class="layout-sidebar-second" role="complementary">*/
/*         {{ page.sidebar_second }}*/
/*       </aside>*/
/*     {% endif %}*/
/* */
/*   </main>*/
/* */
/*   */
/* */
/* </div>{# /.layout-container #}*/
/* </section>*/
/*  {% if page.footer %}*/
/*     <footer role="contentinfo" class="footer">*/
/*     <div class="container">*/
/*       {{ page.footer }}*/
/*       </div>*/
/*     </footer>*/
/*   {% endif %}*/
