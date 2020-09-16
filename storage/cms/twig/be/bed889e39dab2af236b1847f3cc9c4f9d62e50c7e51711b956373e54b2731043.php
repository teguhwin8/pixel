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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/media-banner-tab.htm */
class __TwigTemplate_a8d94e4e44b3183d63340ed95fcc69306da518fd44becb85f45370658c4dbbf7 extends \Twig\Template
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
        echo "<section class=\"ratio_square\">
    <div class=\"custom-container b-g-white section-pb-space\">
        <div class=\"row\">
            <div class=\"col p-0\">
                <div class=\"theme-tab product\">
                    <ul class=\"tabs tab-title media-tab\">
                        <li class=\"current\">
                            <a href=\"tab-7\">new product</a>
                        </li>
                        <li class=\"\">
                            <a href=\"tab-8\">Feature Products</a>
                        </li>
                        <li class=\"\"><a href=\"tab-9\">best Sellers</a></li>
                        <li class=\"\"><a href=\"tab-10\">On Sale</a></li>
                    </ul>
                    <div class=\"tab-content-cls\">
                        <div id=\"tab-7\" class=\"tab-content active default\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-8\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-9\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-10\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/media-banner-tab.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"ratio_square\">
    <div class=\"custom-container b-g-white section-pb-space\">
        <div class=\"row\">
            <div class=\"col p-0\">
                <div class=\"theme-tab product\">
                    <ul class=\"tabs tab-title media-tab\">
                        <li class=\"current\">
                            <a href=\"tab-7\">new product</a>
                        </li>
                        <li class=\"\">
                            <a href=\"tab-8\">Feature Products</a>
                        </li>
                        <li class=\"\"><a href=\"tab-9\">best Sellers</a></li>
                        <li class=\"\"><a href=\"tab-10\">On Sale</a></li>
                    </ul>
                    <div class=\"tab-content-cls\">
                        <div id=\"tab-7\" class=\"tab-content active default\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-8\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-9\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-10\" class=\"tab-content\">
                            <div class=\"slide-5 product-m no-arrow\">
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div
                                        class=\"media-banner media-banner-1 border-0\"
                                    >
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/2.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"media-banner-box\">
                                            <div class=\"media\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/media-banner/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"banner\"
                                                />
                                                <div class=\"media-body\">
                                                    <div class=\"media-contant\">
                                                        <div>
                                                            <div class=\"rating\">
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                                <i
                                                                    class=\"fa fa-star\"
                                                                ></i>
                                                            </div>
                                                            <p>
                                                                Reader
                                                                distracted.
                                                            </p>
                                                            <h6>
                                                                \$24.05
                                                                <span
                                                                    >\$56.21</span
                                                                >
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/media-banner-tab.htm", "");
    }
}
