<?php

/* themes/infinex/templates/layout/page.html.twig */
class __TwigTemplate_2e19c2bfd08fd595faff1dfcd1075528ef45d0d55eb6c183e3fae44dcc759da2 extends Twig_Template
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
        $tags = array("include" => 47);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('include'),
                array(),
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

        // line 46
        echo "<header id=\"header\" class=\"header\"><!--header-->
\t\t";
        // line 47
        $this->loadTemplate("@infinex/includes/top.html.twig", "themes/infinex/templates/layout/page.html.twig", 47)->display($context);
        echo " 
";
        // line 48
        $this->loadTemplate("@infinex/includes/header.html.twig", "themes/infinex/templates/layout/page.html.twig", 48)->display($context);
        echo " 
\t</header><!--/header-->

  
<section id=\"content\">
\t\t\t\t\t\t<div class=\"scrollspy-block col-sm-12\" id=\"about_Infinex\">
\t\t\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-12 no-padding\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"scroll-inner-block\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-12\">
                                                        ";
        // line 62
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<!--<div class=\"page-title\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t  <h2>About Us</h2>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"page-desc\">
                                                                dfsd
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>-->
                                                            
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t
\t</section>\t

 


";
        // line 85
        $this->loadTemplate("@infinex/includes/footer.html.twig", "themes/infinex/templates/layout/page.html.twig", 85)->display($context);
        echo " 


";
    }

    public function getTemplateName()
    {
        return "themes/infinex/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 85,  67 => 62,  50 => 48,  46 => 47,  43 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/infinex/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\www\\infinex\\themes\\infinex\\templates\\layout\\page.html.twig");
    }
}
