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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/breadcrumb.htm */
class __TwigTemplate_c0589d571fd96c9ae819ba2c1e73c26d80a4f6dd8729c42a7d37a499bccf325b extends \Twig\Template
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
        $tags = array();
        $filters = array("escape" => 7);
        $functions = array();

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

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"breadcrumb-main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"breadcrumb-contain\">
                    <div>
                        <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 7), "title", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
        echo "</h2>
                        <ul>
                            <li><a href=\"#\">home</a></li>
                            <li><i class=\"fa fa-angle-double-right\"></i></li>
                            <li><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "title", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        echo "</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/breadcrumb.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 11,  70 => 7,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"breadcrumb-main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"breadcrumb-contain\">
                    <div>
                        <h2>{{ this.page.title }}</h2>
                        <ul>
                            <li><a href=\"#\">home</a></li>
                            <li><i class=\"fa fa-angle-double-right\"></i></li>
                            <li><a href=\"#\">{{ this.page.title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/breadcrumb.htm", "");
    }
}
