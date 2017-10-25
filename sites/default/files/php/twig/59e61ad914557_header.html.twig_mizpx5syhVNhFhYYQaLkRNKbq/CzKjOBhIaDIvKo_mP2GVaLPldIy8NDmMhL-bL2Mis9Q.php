<?php

/* @infinex/includes/header.html.twig */
class __TwigTemplate_693157a6316ac8b6437a49b1ce12bfe349a8abfaa58f29ba53aaf13c5044b3ae extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "<div class=\"header-bottom\"><!--header-middle-->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-7\">
\t\t\t\t\t\t<div class=\"main-menu pull-left\">
\t\t\t\t\t\t";
        // line 6
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "menublock", array()), "html", null, true));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-sm-5\">
\t\t\t\t\t\t<div class=\"search-box pull-right\">
\t\t\t\t\t\t\t<form role=\"search\" class=\"search-form\" action=\"/searches\">
\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-default dropdown-toggle choose\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<span id=\"srch-category\">All</span> <span class=\"caret\"></span>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu\" id=\"mnu-category\">
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#Products\">Products</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#Technical\">Technical Documentation</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#Support\">Support</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#MPN\">MPN Cross Reference</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#Selector\">Component Selector</a></li>
\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"/searches#Quality\">Quality</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" id=\"txt-category\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"txt-search\" class=\"form-control\" placeholder=\"Search for...\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-btn\">
\t\t\t\t\t\t\t\t\t\t<button id=\"btn-search\" type=\"submit\" class=\"btn btn-default mlens\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-search\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t
\t\t</div><!--/header-middle-->

\t";
    }

    public function getTemplateName()
    {
        return "@infinex/includes/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@infinex/includes/header.html.twig", "C:\\xampp\\htdocs\\www\\infinex\\themes\\infinex\\templates\\includes\\header.html.twig");
    }
}
