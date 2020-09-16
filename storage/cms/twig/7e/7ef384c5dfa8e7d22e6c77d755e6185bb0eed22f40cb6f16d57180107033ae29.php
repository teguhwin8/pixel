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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/brand-panel.htm */
class __TwigTemplate_35996132b7b97ca12f317c47cd80efcc2488aeed3aba4240ff61f48414bc14eb extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<section class=\"brand-panel\">
    <div class=\"brand-panel-box\">
        <div class=\"brand-panel-contain\">
            <ul>
                <li><a href=\"#\">top brand</a></li>
                <li><a>:</a></li>
                <li><a href=\"category-page(left-sidebar).html\">aerie</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">baci lingrie</a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">gerbe</a></li>
                <li><a href=\"category-page(left-sidebar).html\">jolidon</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">Wonderbra</a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">Ultimo</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">Vassarette </a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">Oysho</a></li>
            </ul>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/brand-panel.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"brand-panel\">
    <div class=\"brand-panel-box\">
        <div class=\"brand-panel-contain\">
            <ul>
                <li><a href=\"#\">top brand</a></li>
                <li><a>:</a></li>
                <li><a href=\"category-page(left-sidebar).html\">aerie</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">baci lingrie</a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">gerbe</a></li>
                <li><a href=\"category-page(left-sidebar).html\">jolidon</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">Wonderbra</a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">Ultimo</a></li>
                <li>
                    <a href=\"category-page(left-sidebar).html\">Vassarette </a>
                </li>
                <li><a href=\"category-page(left-sidebar).html\">Oysho</a></li>
            </ul>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/brand-panel.htm", "");
    }
}
