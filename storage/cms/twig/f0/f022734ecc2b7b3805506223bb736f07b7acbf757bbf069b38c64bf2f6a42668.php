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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/collection-banner.htm */
class __TwigTemplate_e02eb942d2bf4b69a36c1472930dbb9adfdcbdce8b4b13c4c92d75cc800b514d extends \Twig\Template
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
        echo "<section class=\"collection-banner section-pt-space b-g-white\">
    <div class=\"custom-container\">
        <div class=\"row collection2\">
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/1.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/1.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>women</h3>
                            <h4>fashion</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/2.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/2.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>camera</h3>
                            <h4>lenses</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/3.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/3.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>refrigerator</h3>
                            <h4>lG mini</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"collection-banner section-pt-space b-g-white\">
    <div class=\"custom-container\">
        <div class=\"row collection2\">
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/1.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/1.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>women</h3>
                            <h4>fashion</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/2.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/2.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>camera</h3>
                            <h4>lenses</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-right\">
                    <div
                        class=\"collection-img bg-size\"
                        style=\"
                            background-image: url('http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/3.jpg');
                            background-size: cover;
                            background-position: center center;
                            display: block;
                        \"
                    >
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/3.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                            style=\"display: none\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>refrigerator</h3>
                            <h4>lG mini</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner.htm", "");
    }
}
