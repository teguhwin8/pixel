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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/contact-banner.htm */
class __TwigTemplate_8b6f2e3ae5b8219842287e01151cc9d7f27286ee49215f8072cf6d15621c3cb5 extends \Twig\Template
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
        echo "<section class=\"contact-banner contact-banner-inverse\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"contact-banner-contain\">
                    <div class=\"contact-banner-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/call-img.png\"
                            class=\"img-fluid\"
                            alt=\"call-banner\"
                        />
                    </div>
                    <div><h3>if you have any question please call us</h3></div>
                    <div><h2>123-456-7890</h2></div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/contact-banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"contact-banner contact-banner-inverse\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"contact-banner-contain\">
                    <div class=\"contact-banner-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/call-img.png\"
                            class=\"img-fluid\"
                            alt=\"call-banner\"
                        />
                    </div>
                    <div><h3>if you have any question please call us</h3></div>
                    <div><h2>123-456-7890</h2></div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/contact-banner.htm", "");
    }
}
