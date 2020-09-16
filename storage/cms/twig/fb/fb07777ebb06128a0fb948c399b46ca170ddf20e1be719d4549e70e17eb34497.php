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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/theme-slider.htm */
class __TwigTemplate_eae0c0e7a8cafeb6f3a2290bfdf986270e6a071a1d1911fc7f221bbea4822c30 extends \Twig\Template
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
        echo "<section class=\"theme-slider b-g-white\" id=\"theme-slider\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-1\">
                                    <li id=\"img-1\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/1.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-2\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/1.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>mi<span>Mobile</span></h1>
                                    <h4>fast and light</h4>
                                    <h2>Pixel Perfect Deal Camera</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-2\">
                                    <li id=\"img-3\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/2.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-4\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/2.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>big<span>Sale</span></h1>
                                    <h4>now start at \$99</h4>
                                    <h2>50% off</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-3\">
                                    <li id=\"img-5\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/3.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-6\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/3.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>camera<span>Sale</span></h1>
                                    <h4>now start at \$79</h4>
                                    <h2>70% off today</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/theme-slider.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"theme-slider b-g-white\" id=\"theme-slider\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-1\">
                                    <li id=\"img-1\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/1.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-2\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/1.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>mi<span>Mobile</span></h1>
                                    <h4>fast and light</h4>
                                    <h2>Pixel Perfect Deal Camera</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-2\">
                                    <li id=\"img-3\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/2.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-4\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/2.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>big<span>Sale</span></h1>
                                    <h4>now start at \$99</h4>
                                    <h2>50% off</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"slider-banner p-center slide-banner-1\">
                            <div class=\"slider-img\">
                                <ul class=\"layout1-slide-3\">
                                    <li id=\"img-5\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/3.2.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                    <li id=\"img-6\" class=\"slide-center\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/slider/3.1.png\"
                                            class=\"img-fluid\"
                                            alt=\"slider\"
                                        />
                                    </li>
                                </ul>
                            </div>
                            <div class=\"slider-banner-contain\">
                                <div>
                                    <h1>camera<span>Sale</span></h1>
                                    <h4>now start at \$79</h4>
                                    <h2>70% off today</h2>
                                    <a class=\"btn btn-normal\"> Shop Now </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/theme-slider.htm", "");
    }
}
