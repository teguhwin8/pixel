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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/collection-banner-2.htm */
class __TwigTemplate_c330f59919bae0269f5934c3b37a3d3e1afa92ff7039ec8b0e8aee0156b7a87e extends \Twig\Template
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
        echo "<section class=\"collection-banner section-pb-space\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"collection-banner-main banner-5 p-center\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/7.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/7.jpg\"
                            class=\"bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div class=\"sub-contain\">
                            <h3>save up to 30% off</h3>
                            <h4>women<span>fashion</span></h4>
                            <div class=\"shop\">
                                <a class=\"btn btn-normal\" href=\"#\">
                                    shop now
                                </a>
                            </div>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner-2.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"collection-banner section-pb-space\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"collection-banner-main banner-5 p-center\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/7.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/7.jpg\"
                            class=\"bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div class=\"sub-contain\">
                            <h3>save up to 30% off</h3>
                            <h4>women<span>fashion</span></h4>
                            <div class=\"shop\">
                                <a class=\"btn btn-normal\" href=\"#\">
                                    shop now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner-2.htm", "");
    }
}
