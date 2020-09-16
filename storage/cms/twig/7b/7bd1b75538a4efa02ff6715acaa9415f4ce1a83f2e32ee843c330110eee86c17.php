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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/hot-deal.htm */
class __TwigTemplate_1e06f2e4ca81f7dcb32171f492c0873d3c14ef9cf9b88fc3ce0f7196b9dfb1db extends \Twig\Template
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
        echo "<section class=\"hot-deal b-g-white section-big-pb-space space-abjust\">
    <div class=\"custom-container\">
        <div class=\"row hot-2\">
            <div class=\"col-12\">
                <!--title start-->
                <div class=\"title3 b-g-white text-left\">
                    <h4>today's hot deal</h4>
                </div>
                <!--titel end-->
            </div>

            <div class=\"col-lg-9\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"hot-deal-contain deal-abjust\">
                            <div class=\"row hot-deal-subcontain\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"hotdeal-right-slick border-0\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"hot-deal-center\">
                                        <div>
                                            <div>
                                                <h5>
                                                    Simply dummy text of the
                                                    printing.
                                                </h5>
                                            </div>
                                            <div class=\"rating\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div>
                                                <p>
                                                    It is a long established
                                                    fact that a reader. It is a
                                                    long established fact that a
                                                    reader.It is a long
                                                    established fact that a
                                                    reader. It is a long
                                                    established fact that a
                                                    reader.
                                                </p>
                                                <div class=\"price\">
                                                    <span>\$45.00</span>
                                                    <span>\$50.30</span>
                                                </div>
                                            </div>
                                            <div class=\"timer\">
                                                <p id=\"demo\">
                                                    <span>
                                                        25
                                                        <span>days</span>
                                                    </span>
                                                    <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                    <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                    <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"hotdeal-right-nav\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"hot-deal-contain deal-abjust\">
                            <div class=\"row hot-deal-subcontain\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"hotdeal-right-slick border-0\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"hot-deal-center\">
                                        <div>
                                            <div>
                                                <h5>
                                                    Simply dummy text of the
                                                    printing.
                                                </h5>
                                            </div>
                                            <div class=\"rating\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div>
                                                <p>
                                                    It is a long established
                                                    fact that a reader. It is a
                                                    long established fact that a
                                                    reader.It is a long
                                                    established fact that a
                                                    reader. It is a long
                                                    established fact that a
                                                    reader.
                                                </p>
                                                <div class=\"price\">
                                                    <span>\$45.00</span>
                                                    <span>\$50.30</span>
                                                </div>
                                            </div>
                                            <div class=\"timer\">
                                                <p id=\"demo1\">
                                                    <span>
                                                        25
                                                        <span>days</span>
                                                    </span>
                                                    <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                    <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                    <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"hotdeal-right-nav\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"slide-1-section no-arrow\">
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>New Products</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>Hot deal</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/4.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>Best Sellers</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/hot-deal.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"hot-deal b-g-white section-big-pb-space space-abjust\">
    <div class=\"custom-container\">
        <div class=\"row hot-2\">
            <div class=\"col-12\">
                <!--title start-->
                <div class=\"title3 b-g-white text-left\">
                    <h4>today's hot deal</h4>
                </div>
                <!--titel end-->
            </div>

            <div class=\"col-lg-9\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"hot-deal-contain deal-abjust\">
                            <div class=\"row hot-deal-subcontain\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"hotdeal-right-slick border-0\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"hot-deal-center\">
                                        <div>
                                            <div>
                                                <h5>
                                                    Simply dummy text of the
                                                    printing.
                                                </h5>
                                            </div>
                                            <div class=\"rating\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div>
                                                <p>
                                                    It is a long established
                                                    fact that a reader. It is a
                                                    long established fact that a
                                                    reader.It is a long
                                                    established fact that a
                                                    reader. It is a long
                                                    established fact that a
                                                    reader.
                                                </p>
                                                <div class=\"price\">
                                                    <span>\$45.00</span>
                                                    <span>\$50.30</span>
                                                </div>
                                            </div>
                                            <div class=\"timer\">
                                                <p id=\"demo\">
                                                    <span>
                                                        25
                                                        <span>days</span>
                                                    </span>
                                                    <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                    <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                    <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"hotdeal-right-nav\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"hot-deal-contain deal-abjust\">
                            <div class=\"row hot-deal-subcontain\">
                                <div class=\"col-lg-4 col-md-4\">
                                    <div class=\"hotdeal-right-slick border-0\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-deal\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-lg-6 col-md-6\">
                                    <div class=\"hot-deal-center\">
                                        <div>
                                            <div>
                                                <h5>
                                                    Simply dummy text of the
                                                    printing.
                                                </h5>
                                            </div>
                                            <div class=\"rating\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div>
                                                <p>
                                                    It is a long established
                                                    fact that a reader. It is a
                                                    long established fact that a
                                                    reader.It is a long
                                                    established fact that a
                                                    reader. It is a long
                                                    established fact that a
                                                    reader.
                                                </p>
                                                <div class=\"price\">
                                                    <span>\$45.00</span>
                                                    <span>\$50.30</span>
                                                </div>
                                            </div>
                                            <div class=\"timer\">
                                                <p id=\"demo1\">
                                                    <span>
                                                        25
                                                        <span>days</span>
                                                    </span>
                                                    <span>
                                                        46
                                                        <span>hrs</span>
                                                    </span>
                                                    <span>
                                                        12
                                                        <span>min</span>
                                                    </span>
                                                    <span>
                                                        03
                                                        <span>sec</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-2\">
                                    <div class=\"hotdeal-right-nav\">
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/8.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/7.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/6.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                        <div>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/hot-deal/5.jpg\"
                                                alt=\"hot-dea\"
                                                class=\"img-fluid\"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"slide-1-section no-arrow\">
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>New Products</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>Hot deal</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/4.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"media-banner border-0\">
                            <div class=\"media-banner-box\">
                                <div class=\"media-heading\">
                                    <h5>Best Sellers</h5>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                                        class=\"img-fluid\"
                                        alt=\"banner\"
                                    />
                                    <div class=\"media-body\">
                                        <div class=\"media-contant\">
                                            <div>
                                                <div class=\"rating\">
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                                <p>Generator on Internet.</p>
                                                <h6>\$153.00</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"media-banner-box\">
                                <div class=\"media-view\">
                                    <h5>View More</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/hot-deal.htm", "");
    }
}
