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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/deal-banner.htm */
class __TwigTemplate_4695470eb7db5f6fa7d5fa22bf717c5d00b1188021fdd251b533a1235bbb2fbf extends \Twig\Template
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
        echo "<section class=\"deal-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-8\">
                <div class=\"deal-banner-containe\">
                    <h2>save up to 30% to 40% off</h2>
                    <h1>omg! just look at the great deals!</h1>
                </div>
            </div>
            <div class=\"col-md-12 col-lg-4\">
                <div class=\"deal-banner-containe\">
                    <div class=\"deal-btn\">
                        <a class=\"btn-white\"> View more </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/deal-banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"deal-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12 col-lg-8\">
                <div class=\"deal-banner-containe\">
                    <h2>save up to 30% to 40% off</h2>
                    <h1>omg! just look at the great deals!</h1>
                </div>
            </div>
            <div class=\"col-md-12 col-lg-4\">
                <div class=\"deal-banner-containe\">
                    <div class=\"deal-btn\">
                        <a class=\"btn-white\"> View more </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/deal-banner.htm", "");
    }
}
