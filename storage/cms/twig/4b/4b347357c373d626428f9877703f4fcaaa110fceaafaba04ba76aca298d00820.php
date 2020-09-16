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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/category/product.htm */
class __TwigTemplate_d3bab64dd30e5ab14999103fb7dfa219bea5c1fe714ef70b35cbdfc5b5b5ab36 extends \Twig\Template
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
        echo "<div class=\"collection-product-wrapper\">
    <div class=\"product-top-filter\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"filter-main-btn\">
                    <span class=\"filter-btn\"
                        ><i
                            class=\"fa fa-filter\"
                            aria-hidden=\"true\"
                        ></i>
                        Filter</span
                    >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-filter-content\">
                    <div class=\"search-count\">
                        <h5>
                            Showing Products 1-24 of 10 Result
                        </h5>
                    </div>
                    <div class=\"collection-view\">
                        <ul>
                            <li>
                                <i
                                    class=\"fa fa-th grid-layout-view\"
                                ></i>
                            </li>
                            <li>
                                <i
                                    class=\"fa fa-list-ul list-layout-view\"
                                ></i>
                            </li>
                        </ul>
                    </div>
                    <div class=\"collection-grid-view\">
                        <ul>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/2.png\"
                                    alt=\"\"
                                    class=\"product-2-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/3.png\"
                                    alt=\"\"
                                    class=\"product-3-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/4.png\"
                                    alt=\"\"
                                    class=\"product-4-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/6.png\"
                                    alt=\"\"
                                    class=\"product-6-layout-view\"
                                />
                            </li>
                        </ul>
                    </div>
                    <div class=\"product-page-per-view\">
                        <select>
                            <option value=\"High to low\">
                                24 Products Par Page
                            </option>
                            <option value=\"Low to High\">
                                50 Products Par Page
                            </option>
                            <option value=\"Low to High\">
                                100 Products Par Page
                            </option>
                        </select>
                    </div>
                    <div class=\"product-page-filter\">
                        <select>
                            <option value=\"High to low\">
                                Sorting items
                            </option>
                            <option value=\"Low to High\">
                                50 Products
                            </option>
                            <option value=\"Low to High\">
                                100 Products
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-wrapper-grid\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                <p>
                                    Lorem Ipsum is simply dummy
                                    text of the printing and
                                    typesetting industry. Lorem
                                    Ipsum has been the
                                    industry's standard dummy
                                    text ever since the 1500s,
                                    when an unknown printer took
                                    a galley of type and
                                    scrambled it to make a type
                                    specimen book
                                </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-pagination\">
        <div class=\"theme-paggination-block\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-md-6 col-sm-12\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination\">
                            <li class=\"page-item\">
                                <a
                                    class=\"page-link\"
                                    href=\"#\"
                                    aria-label=\"Previous\"
                                    ><span aria-hidden=\"true\"
                                        ><i
                                            class=\"fa fa-chevron-left\"
                                            aria-hidden=\"true\"
                                        ></i
                                    ></span>
                                    <span class=\"sr-only\"
                                        >Previous</span
                                    ></a
                                >
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\"
                                    >1</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\"
                                    >2</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\"
                                    >3</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a
                                    class=\"page-link\"
                                    href=\"#\"
                                    aria-label=\"Next\"
                                    ><span aria-hidden=\"true\"
                                        ><i
                                            class=\"fa fa-chevron-right\"
                                            aria-hidden=\"true\"
                                        ></i
                                    ></span>
                                    <span class=\"sr-only\"
                                        >Next</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-xl-6 col-md-6 col-sm-12\">
                    <div class=\"product-search-count-bottom\">
                        <h5>
                            Showing Products 1-24 of 10 Result
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/category/product.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"collection-product-wrapper\">
    <div class=\"product-top-filter\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"filter-main-btn\">
                    <span class=\"filter-btn\"
                        ><i
                            class=\"fa fa-filter\"
                            aria-hidden=\"true\"
                        ></i>
                        Filter</span
                    >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"product-filter-content\">
                    <div class=\"search-count\">
                        <h5>
                            Showing Products 1-24 of 10 Result
                        </h5>
                    </div>
                    <div class=\"collection-view\">
                        <ul>
                            <li>
                                <i
                                    class=\"fa fa-th grid-layout-view\"
                                ></i>
                            </li>
                            <li>
                                <i
                                    class=\"fa fa-list-ul list-layout-view\"
                                ></i>
                            </li>
                        </ul>
                    </div>
                    <div class=\"collection-grid-view\">
                        <ul>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/2.png\"
                                    alt=\"\"
                                    class=\"product-2-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/3.png\"
                                    alt=\"\"
                                    class=\"product-3-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/4.png\"
                                    alt=\"\"
                                    class=\"product-4-layout-view\"
                                />
                            </li>
                            <li>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/category/icon/6.png\"
                                    alt=\"\"
                                    class=\"product-6-layout-view\"
                                />
                            </li>
                        </ul>
                    </div>
                    <div class=\"product-page-per-view\">
                        <select>
                            <option value=\"High to low\">
                                24 Products Par Page
                            </option>
                            <option value=\"Low to High\">
                                50 Products Par Page
                            </option>
                            <option value=\"Low to High\">
                                100 Products Par Page
                            </option>
                        </select>
                    </div>
                    <div class=\"product-page-filter\">
                        <select>
                            <option value=\"High to low\">
                                Sorting items
                            </option>
                            <option value=\"Low to High\">
                                50 Products
                            </option>
                            <option value=\"Low to High\">
                                100 Products
                            </option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-wrapper-grid\">
        <div class=\"row\">
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                <p>
                                    Lorem Ipsum is simply dummy
                                    text of the printing and
                                    typesetting industry. Lorem
                                    Ipsum has been the
                                    industry's standard dummy
                                    text ever since the 1500s,
                                    when an unknown printer took
                                    a galley of type and
                                    scrambled it to make a type
                                    specimen book
                                </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-md-4 col-6 col-grid-box\">
                <div class=\"product\">
                    <div class=\"product-box\">
                        <div class=\"product-imgbox\">
                            <div class=\"product-front\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                            <div class=\"product-back\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/a1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"product\"
                                />
                            </div>
                        </div>
                        <div
                            class=\"product-detail detail-center\"
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
                                    <p>
                                        Lorem Ipsum is simply
                                        dummy text of the
                                        printing and typesetting
                                        industry. Lorem Ipsum
                                        has been the industry's
                                        standard dummy text ever
                                        since the 1500s, when an
                                        unknown printer took a
                                        galley of type and
                                        scrambled it to make a
                                        type specimen book
                                    </p>
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
                            <div class=\"icon-detail\">
                                <button
                                    data-toggle=\"modal\"
                                    data-target=\"#addtocart\"
                                    title=\"Add to cart\"
                                >
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"product-pagination\">
        <div class=\"theme-paggination-block\">
            <div class=\"row\">
                <div class=\"col-xl-6 col-md-6 col-sm-12\">
                    <nav aria-label=\"Page navigation\">
                        <ul class=\"pagination\">
                            <li class=\"page-item\">
                                <a
                                    class=\"page-link\"
                                    href=\"#\"
                                    aria-label=\"Previous\"
                                    ><span aria-hidden=\"true\"
                                        ><i
                                            class=\"fa fa-chevron-left\"
                                            aria-hidden=\"true\"
                                        ></i
                                    ></span>
                                    <span class=\"sr-only\"
                                        >Previous</span
                                    ></a
                                >
                            </li>
                            <li class=\"page-item active\">
                                <a class=\"page-link\" href=\"#\"
                                    >1</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\"
                                    >2</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"#\"
                                    >3</a
                                >
                            </li>
                            <li class=\"page-item\">
                                <a
                                    class=\"page-link\"
                                    href=\"#\"
                                    aria-label=\"Next\"
                                    ><span aria-hidden=\"true\"
                                        ><i
                                            class=\"fa fa-chevron-right\"
                                            aria-hidden=\"true\"
                                        ></i
                                    ></span>
                                    <span class=\"sr-only\"
                                        >Next</span
                                    ></a
                                >
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class=\"col-xl-6 col-md-6 col-sm-12\">
                    <div class=\"product-search-count-bottom\">
                        <h5>
                            Showing Products 1-24 of 10 Result
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/category/product.htm", "");
    }
}
