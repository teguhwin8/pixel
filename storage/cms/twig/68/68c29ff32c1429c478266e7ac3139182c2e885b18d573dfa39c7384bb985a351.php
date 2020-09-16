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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/category/left-sidebar.htm */
class __TwigTemplate_5ce6508bf64f0218821385734dcd3d9ab0b5108d5a15ad5017a099599b8b2e71 extends \Twig\Template
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
        echo "<div class=\"col-sm-3 collection-filter category-page-side\">
    <!-- side-bar colleps block stat -->
    <div
        class=\"collection-filter-block creative-card creative-inner category-side\"
    >
        <!-- brand filter start -->
        <div class=\"collection-mobile-back\">
            <span class=\"filter-back\"
                ><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> back</span
            >
        </div>
        <div class=\"collection-collapse-block open\">
            <h3 class=\"collapse-block-title mt-0\">brand</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"collection-brand-filter\">
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"zara\"
                        />
                        <label class=\"custom-control-label\" for=\"zara\"
                            >zara</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"vera-moda\"
                        />
                        <label class=\"custom-control-label\" for=\"vera-moda\"
                            >vera-moda</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"forever-21\"
                        />
                        <label class=\"custom-control-label\" for=\"forever-21\"
                            >forever-21</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"roadster\"
                        />
                        <label class=\"custom-control-label\" for=\"roadster\"
                            >roadster</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"only\"
                        />
                        <label class=\"custom-control-label\" for=\"only\"
                            >only</label
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- color filter start here -->
        <div class=\"collection-collapse-block open\">
            <h3 class=\"collapse-block-title\">colors</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"color-selector\">
                    <ul>
                        <li class=\"color-1 active\"></li>
                        <li class=\"color-2\"></li>
                        <li class=\"color-3\"></li>
                        <li class=\"color-4\"></li>
                        <li class=\"color-5\"></li>
                        <li class=\"color-6\"></li>
                        <li class=\"color-7\"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- price filter start here -->
        <div class=\"collection-collapse-block border-0 open\">
            <h3 class=\"collapse-block-title\">price</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"collection-brand-filter\">
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"hundred\"
                        />
                        <label class=\"custom-control-label\" for=\"hundred\"
                            >\$10 - \$100</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"twohundred\"
                        />
                        <label class=\"custom-control-label\" for=\"twohundred\"
                            >\$100 - \$200</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"threehundred\"
                        />
                        <label class=\"custom-control-label\" for=\"threehundred\"
                            >\$200 - \$300</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"fourhundred\"
                        />
                        <label class=\"custom-control-label\" for=\"fourhundred\"
                            >\$300 - \$400</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"fourhundredabove\"
                        />
                        <label
                            class=\"custom-control-label\"
                            for=\"fourhundredabove\"
                            >\$400 above</label
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- silde-bar colleps block end here -->
    <!-- side-bar single product slider start -->
    <div class=\"theme-card creative-card creative-inner\">
        <h5 class=\"title-border\">new product</h5>
        <div class=\"offer-slider slide-1\">
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- side-bar single product slider end -->
    <!-- side-bar banner start here -->
    <div class=\"collection-sidebar-banner\">
        <a href=\"#\"
            ><img
                src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/side-banner.png\"
                class=\"img-fluid\"
                alt=\"\"
        /></a>
    </div>
    <!-- side-bar banner end here -->
    <div class=\"theme-card creative-card creative-inner\">
        <h5 class=\"title-border\"></h5>
        <div class=\"offer-slider slide-1\">
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/category/left-sidebar.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-sm-3 collection-filter category-page-side\">
    <!-- side-bar colleps block stat -->
    <div
        class=\"collection-filter-block creative-card creative-inner category-side\"
    >
        <!-- brand filter start -->
        <div class=\"collection-mobile-back\">
            <span class=\"filter-back\"
                ><i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i> back</span
            >
        </div>
        <div class=\"collection-collapse-block open\">
            <h3 class=\"collapse-block-title mt-0\">brand</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"collection-brand-filter\">
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"zara\"
                        />
                        <label class=\"custom-control-label\" for=\"zara\"
                            >zara</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"vera-moda\"
                        />
                        <label class=\"custom-control-label\" for=\"vera-moda\"
                            >vera-moda</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"forever-21\"
                        />
                        <label class=\"custom-control-label\" for=\"forever-21\"
                            >forever-21</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"roadster\"
                        />
                        <label class=\"custom-control-label\" for=\"roadster\"
                            >roadster</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"only\"
                        />
                        <label class=\"custom-control-label\" for=\"only\"
                            >only</label
                        >
                    </div>
                </div>
            </div>
        </div>
        <!-- color filter start here -->
        <div class=\"collection-collapse-block open\">
            <h3 class=\"collapse-block-title\">colors</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"color-selector\">
                    <ul>
                        <li class=\"color-1 active\"></li>
                        <li class=\"color-2\"></li>
                        <li class=\"color-3\"></li>
                        <li class=\"color-4\"></li>
                        <li class=\"color-5\"></li>
                        <li class=\"color-6\"></li>
                        <li class=\"color-7\"></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- price filter start here -->
        <div class=\"collection-collapse-block border-0 open\">
            <h3 class=\"collapse-block-title\">price</h3>
            <div class=\"collection-collapse-block-content\">
                <div class=\"collection-brand-filter\">
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"hundred\"
                        />
                        <label class=\"custom-control-label\" for=\"hundred\"
                            >\$10 - \$100</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"twohundred\"
                        />
                        <label class=\"custom-control-label\" for=\"twohundred\"
                            >\$100 - \$200</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"threehundred\"
                        />
                        <label class=\"custom-control-label\" for=\"threehundred\"
                            >\$200 - \$300</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"fourhundred\"
                        />
                        <label class=\"custom-control-label\" for=\"fourhundred\"
                            >\$300 - \$400</label
                        >
                    </div>
                    <div
                        class=\"custom-control custom-checkbox collection-filter-checkbox\"
                    >
                        <input
                            type=\"checkbox\"
                            class=\"custom-control-input\"
                            id=\"fourhundredabove\"
                        />
                        <label
                            class=\"custom-control-label\"
                            for=\"fourhundredabove\"
                            >\$400 above</label
                        >
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- silde-bar colleps block end here -->
    <!-- side-bar single product slider start -->
    <div class=\"theme-card creative-card creative-inner\">
        <h5 class=\"title-border\">new product</h5>
        <div class=\"offer-slider slide-1\">
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- side-bar single product slider end -->
    <!-- side-bar banner start here -->
    <div class=\"collection-sidebar-banner\">
        <a href=\"#\"
            ><img
                src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/side-banner.png\"
                class=\"img-fluid\"
                alt=\"\"
        /></a>
    </div>
    <!-- side-bar banner end here -->
    <div class=\"theme-card creative-card creative-inner\">
        <h5 class=\"title-border\"></h5>
        <div class=\"offer-slider slide-1\">
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
            <div>
                <div class=\"media\">
                    <a href=\"#\"
                        ><img
                            class=\"img-fluid\"
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                    /></a>
                    <div class=\"media-body align-self-center\">
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                        </div>
                        <a href=\"#\"
                            ><h6>Slim Fit Cotton Shirt</h6></a
                        >
                        <h4>\$500.00</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/category/left-sidebar.htm", "");
    }
}
