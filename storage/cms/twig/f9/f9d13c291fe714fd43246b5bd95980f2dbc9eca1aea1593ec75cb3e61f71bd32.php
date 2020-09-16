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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/product-slider-tab.htm */
class __TwigTemplate_bf2bbd20954d91bf3af2f60078f602eee7abc78d6b357e3e6dab1e9c639ca422 extends \Twig\Template
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
        echo "<section class=\"section-py-space ratio_square product\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col pr-0\">
                <div class=\"theme-tab product mb--5\">
                    <div class=\"tab-content-cls\">
                        <div id=\"tab-1\" class=\"tab-content active default\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-6\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/product-slider-tab.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-py-space ratio_square product\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col pr-0\">
                <div class=\"theme-tab product mb--5\">
                    <div class=\"tab-content-cls\">
                        <div id=\"tab-1\" class=\"tab-content active default\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-2\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-3\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-4\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-5\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id=\"tab-6\" class=\"tab-content\">
                            <div class=\"product-slide-6 product-m no-arrow\">
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a4.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a5.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a6.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a7.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a8.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                            <div class=\"on-sale1\">on sale</div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class=\"product-box\">
                                        <div class=\"product-imgbox\">
                                            <div class=\"product-front\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div class=\"product-back\">
                                                <img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a3.jpg\"
                                                    class=\"img-fluid\"
                                                    alt=\"product\"
                                                />
                                            </div>
                                            <div
                                                class=\"product-icon icon-inline\"
                                            >
                                                <button onclick=\"openCart()\">
                                                    <i class=\"ti-bag\"></i>
                                                </button>
                                                <a
                                                    href=\"javascript:void(0)\"
                                                    title=\"Add to Wishlist\"
                                                >
                                                    <i
                                                        class=\"ti-heart\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"#\"
                                                    data-toggle=\"modal\"
                                                    data-target=\"#quick-view\"
                                                    title=\"Quick View\"
                                                >
                                                    <i
                                                        class=\"ti-search\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                                <a
                                                    href=\"compare.html\"
                                                    title=\"Compare\"
                                                >
                                                    <i
                                                        class=\"fa fa-exchange\"
                                                        aria-hidden=\"true\"
                                                    ></i>
                                                </a>
                                            </div>
                                            <div class=\"new-label1\">
                                                <div>new</div>
                                            </div>
                                        </div>
                                        <div
                                            class=\"product-detail detail-inline\"
                                        >
                                            <div class=\"detail-title\">
                                                <div class=\"detail-left\">
                                                    <div class=\"rating-star\">
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
                                                        <i
                                                            class=\"fa fa-star\"
                                                        ></i>
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
                                                    <a href=\"#\">
                                                        <h6 class=\"price-title\">
                                                            reader will be
                                                            distracted.
                                                        </h6>
                                                    </a>
                                                </div>
                                                <div class=\"detail-right\">
                                                    <div class=\"check-price\">
                                                        \$ 56.21
                                                    </div>
                                                    <div class=\"price\">
                                                        <div class=\"price\">
                                                            \$ 24.05
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
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/product-slider-tab.htm", "");
    }
}
