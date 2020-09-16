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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/discount-banner.htm */
class __TwigTemplate_be96562d95a40a2a00f8fe8ef10589c05289b379d72f10d098a225f892d5d147 extends \Twig\Template
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
        echo "<section class=\"discount-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"discount-banner-contain\">
                    <h2>Discount on every single item on our site.</h2>
                    <h1>
                        <span>OMG! Just Look at the</span>
                        <span>great Deals!</span>
                    </h1>
                    <div class=\"rounded-contain rounded-inverse\">
                        <div class=\"rounded-subcontain\">
                            How does it feel, when you see great discount deals
                            for each product?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/discount-banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"discount-banner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"discount-banner-contain\">
                    <h2>Discount on every single item on our site.</h2>
                    <h1>
                        <span>OMG! Just Look at the</span>
                        <span>great Deals!</span>
                    </h1>
                    <div class=\"rounded-contain rounded-inverse\">
                        <div class=\"rounded-subcontain\">
                            How does it feel, when you see great discount deals
                            for each product?
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/discount-banner.htm", "");
    }
}
