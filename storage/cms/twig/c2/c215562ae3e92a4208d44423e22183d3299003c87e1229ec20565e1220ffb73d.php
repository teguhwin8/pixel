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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/header/category-header2.htm */
class __TwigTemplate_9a54771b6c413c17d26ade3a9621c28570fb5f0da7964e805551fd4a1fecd8c0 extends \Twig\Template
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
        echo "<div class=\"category-header-2\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"navbar-menu\">
                    <div class=\"category-left\">
                        <div class=\"nav-block\">
                            <div class=\"nav-left\">
                                <nav
                                    class=\"navbar\"
                                    data-toggle=\"collapse\"
                                    data-target=\"#navbarToggleExternalContent\"
                                >
                                    <button
                                        class=\"navbar-toggler\"
                                        type=\"button\"
                                        style=\"\"
                                    >
                                        <span class=\"navbar-icon\"
                                            ><i class=\"fa fa-arrow-down\"></i
                                        ></span>
                                    </button>
                                    <h5 class=\"mb-0 text-white title-font\">
                                        Shop by category
                                    </h5>
                                </nav>
                                <div
                                    class=\"collapse nav-desk\"
                                    id=\"navbarToggleExternalContent\"
                                >
                                    <ul class=\"nav-cat title-font\">
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/01.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">western ware</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/02.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">TV, Appliances</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/03.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Pets Products</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/04.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Car, Motorbike</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/05.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Industrial Products</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/06.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\"
                                                >Beauty, Health Products</a
                                            >
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/07.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Grocery Products </a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/08.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Sports</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/09.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Bags, Luggage</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/10.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Movies, Music </a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/11.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Video Games</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/12.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Toys, Baby Products</a>
                                        </li>
                                        <li>
                                            <ul
                                                class=\"mor-slide-open\"
                                                style=\"display: none\"
                                            >
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/08.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Sports</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/09.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Bags, Luggage</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/10.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Movies, Music </a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/11.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Video Games</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/12.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Toys, Baby Products</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class=\"mor-slide-click\"
                                                >mor category
                                                <i
                                                    class=\"fa fa-angle-down pro-down\"
                                                ></i
                                                ><i
                                                    class=\"fa fa-angle-up pro-up\"
                                                    style=\"display: none\"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"menu-block\">
                            <nav id=\"main-nav\">
                                <div class=\"toggle-nav\">
                                    <i class=\"fa fa-bars sidebar-bar\"></i>
                                </div>
                                <ul
                                    id=\"main-menu\"
                                    class=\"sm pixelstrap sm-horizontal\"
                                    data-smartmenus-id=\"15998064596052466\"
                                >
                                    <li>
                                        <div class=\"mobile-back text-right\">
                                            Back<i
                                                class=\"fa fa-angle-right pl-2\"
                                                aria-hidden=\"true\"
                                            ></i>
                                        </div>
                                    </li>
                                    <!--HOME-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-1\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-2\"
                                            aria-expanded=\"false\"
                                            >Home<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-2\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-1\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"index.html\"
                                                    >layout 1</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-2.html\"
                                                    >layout 2</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-3.html\"
                                                    >layout 3</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-4.html\"
                                                    >layout 4</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-5.html\"
                                                    >layout 5</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-6.html\"
                                                    >layout 6</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--HOME-END-->

                                    <!--SHOP-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-3\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-4\"
                                            aria-expanded=\"false\"
                                            >shop<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-4\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-3\"
                                            aria-expanded=\"false\"
                                            style=\"
                                                width: auto;
                                                display: none;
                                                top: auto;
                                                left: 0px;
                                                margin-left: 0px;
                                                margin-top: 0px;
                                                min-width: 10em;
                                                max-width: 20em;
                                            \"
                                            class=\"sm-nowrap\"
                                        >
                                            <li>
                                                <a
                                                    href=\"category-page(left-sidebar).html\"
                                                    >left sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(right-sidebar).html\"
                                                    >right sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(no-sidebar).html\"
                                                    >no sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(sidebar-popup).html\"
                                                    >sidebar popup</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(metro).html\"
                                                    >metro
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(full-width).html\"
                                                    >full width
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(infinite-scroll).html\"
                                                    >infinite scroll</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(3-grid).html\"
                                                    >3 grid</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(6-grid).html\"
                                                    >6 grid</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(list-view).html\"
                                                    >list view</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--SHOP-END-->

                                    <!--product-meu start-->
                                    <li class=\"mega\">
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-5\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-6\"
                                            aria-expanded=\"false\"
                                            >product
                                            <span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            class=\"mega-menu full-mega-menu\"
                                            id=\"sm-15998064596052466-6\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-5\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        sidebar
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(left-sidebar).html\"
                                                                                >left
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(right-sidebar).html\"
                                                                                >right
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(no-sidebar).html\"
                                                                                >non
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        bonus
                                                                        layout
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(bundle).html\"
                                                                                >bundle</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(image-swatch).html\"
                                                                                >image
                                                                                swatch</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(vertical-tab).html\"
                                                                                >vertical
                                                                                tab</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        product
                                                                        layout
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(4-image).html\"
                                                                                >4
                                                                                image
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(sticky).html\"
                                                                                >sticky</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(accordian).html\"
                                                                                >accordian</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        thumbnail
                                                                        image
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(left-image).html\"
                                                                                >left
                                                                                image</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(right-image).html\"
                                                                                >right
                                                                                image</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(image-outside).html\"
                                                                                >image
                                                                                outside</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        3 column
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-col-left).html\"
                                                                                >thumbnail
                                                                                left</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-col-right).html\"
                                                                                >thumbnail
                                                                                right</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-column).html\"
                                                                                >thubnail
                                                                                bottom</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        product
                                                                        element
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-productbox.html\"
                                                                                >product
                                                                                box</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-product-slider.html\"
                                                                                >product
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-no_slider.html\"
                                                                                >no
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class=\"row menu-banner\"
                                                    >
                                                        <div class=\"col-lg-6\">
                                                            <div>
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/menu-banner1.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-lg-6\">
                                                            <div>
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/menu-banner2.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--product-meu end-->

                                    <!--mega-meu start-->
                                    <li class=\"mega\">
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-7\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-8\"
                                            aria-expanded=\"false\"
                                            >features<span
                                                class=\"sub-arrow\"
                                            ></span
                                        ></a>
                                        <ul
                                            class=\"mega-menu full-mega-menu ratio_landscape sm-nowrap\"
                                            id=\"sm-15998064596052466-8\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-7\"
                                            aria-expanded=\"false\"
                                            style=\"
                                                width: auto;
                                                min-width: 10em;
                                                display: none;
                                                max-width: 20em;
                                                top: auto;
                                                left: 0px;
                                                margin-left: -325px;
                                                margin-top: 0px;
                                            \"
                                        >
                                            <li>
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        portfolio
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-2-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-3-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                3</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-4-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                4</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-6-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                6</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-2-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-3-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                3</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-4-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                4</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-fullwidth.html\"
                                                                                >mesonary
                                                                                full
                                                                                width</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        add to
                                                                        cart
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-5.html\"
                                                                                >cart
                                                                                modal
                                                                                popup</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-6.html\"
                                                                                >qty.
                                                                                counter
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"index.html\"
                                                                                >cart
                                                                                top</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-2.html\"
                                                                                >cart
                                                                                bottom</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-3.html\"
                                                                                >cart
                                                                                left</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-4.html\"
                                                                                >cart
                                                                                right</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        shortcodes
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-title.html\"
                                                                                >title</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-banner.html\"
                                                                                >collection
                                                                                banner</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-slider.html\"
                                                                                >home
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-category.html\"
                                                                                >category</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-service.html\"
                                                                                >service</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-image-ratio.html\"
                                                                                >image
                                                                                size
                                                                                ratio</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-tab.html\"
                                                                                >tab</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        email
                                                                        template
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-order-success.html\"
                                                                                >order
                                                                                success</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-order-success-tow.html\"
                                                                                >order
                                                                                success
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-template.html\"
                                                                                >email
                                                                                template</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-template-tow.html\"
                                                                                >email
                                                                                template
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class=\"menu-title menu-secon-title\"
                                                                >
                                                                    <h5>
                                                                        Easy to
                                                                        use
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"button.html\"
                                                                                >element
                                                                                button</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"instagram.html\"
                                                                                >element
                                                                                instagram</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box product\"
                                                        >
                                                            <div
                                                                class=\"mega-img\"
                                                            >
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/mega-banner.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--mega-meu end-->

                                    <!--pages-meu start-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-9\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-10\"
                                            aria-expanded=\"false\"
                                            >pages<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-10\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-9\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    href=\"#\"
                                                    class=\"has-submenu\"
                                                    id=\"sm-15998064596052466-11\"
                                                    aria-haspopup=\"true\"
                                                    aria-controls=\"sm-15998064596052466-12\"
                                                    aria-expanded=\"false\"
                                                    >account<span
                                                        class=\"sub-arrow\"
                                                    ></span
                                                ></a>
                                                <ul
                                                    id=\"sm-15998064596052466-12\"
                                                    role=\"group\"
                                                    aria-hidden=\"true\"
                                                    aria-labelledby=\"sm-15998064596052466-11\"
                                                    aria-expanded=\"false\"
                                                >
                                                    <li>
                                                        <a href=\"wishlist.html\"
                                                            >wishlist</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"cart.html\"
                                                            >cart</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"dashboard.html\"
                                                            >Dashboard</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"login.html\"
                                                            >login</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"register.html\"
                                                            >register</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"contact.html\"
                                                            >contact</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=\"forget-pwd.html\"
                                                            >forget password</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"profile.html\"
                                                            >profile
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"checkout.html\"
                                                            >checkout</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href=\"about-page.html\"
                                                    >about us</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"search.html\">search</a>
                                            </li>
                                            <li>
                                                <a href=\"typography.html\"
                                                    >typography
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"review.html\"
                                                    >review
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"order-success.html\"
                                                    >order success</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"order-history.html\"
                                                    >order history</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"#\"
                                                    class=\"has-submenu\"
                                                    id=\"sm-15998064596052466-13\"
                                                    aria-haspopup=\"true\"
                                                    aria-controls=\"sm-15998064596052466-14\"
                                                    aria-expanded=\"false\"
                                                    >compare<span
                                                        class=\"sub-arrow\"
                                                    ></span
                                                ></a>
                                                <ul
                                                    id=\"sm-15998064596052466-14\"
                                                    role=\"group\"
                                                    aria-hidden=\"true\"
                                                    aria-labelledby=\"sm-15998064596052466-13\"
                                                    aria-expanded=\"false\"
                                                >
                                                    <li>
                                                        <a href=\"compare.html\"
                                                            >compare</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"compare-2.html\"
                                                            >compare-2</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href=\"collection.html\"
                                                    >collection</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"look-book.html\"
                                                    >lookbook</a
                                                >
                                            </li>
                                            <li><a href=\"404.html\">404</a></li>
                                            <li>
                                                <a href=\"coming-soon.html\"
                                                    >coming soon
                                                </a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <!--product-end end-->

                                    <!--blog-meu start-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-15\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-16\"
                                            aria-expanded=\"false\"
                                            >blog<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-16\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-15\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    href=\"blog(left-sidebar).html\"
                                                    >left sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"blog(right-sidebar).html\"
                                                    >right sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"blog(no-sidebar).html\"
                                                    >no sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"blog-details.html\"
                                                    >blog details</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--blog-meu end-->
                                </ul>
                            </nav>
                        </div>
                        <div class=\"icon-block\">
                            <ul>
                                <li
                                    class=\"mobile-user onhover-dropdown\"
                                    onclick=\"openAccount()\"
                                >
                                    <a href=\"#\"><i class=\"icon-user\"></i> </a>
                                </li>
                                <li
                                    class=\"mobile-wishlist\"
                                    onclick=\"openWishlist()\"
                                >
                                    <a
                                        ><i class=\"icon-heart\"></i>
                                        <div class=\"cart-item\">
                                            <div>
                                                0 item<span>wishlist</span>
                                            </div>
                                        </div></a
                                    >
                                </li>
                                <li class=\"mobile-search\">
                                    <a href=\"#\"><i class=\"icon-search\"></i></a>
                                    <div
                                        class=\"search-overlay\"
                                        style=\"display: none\"
                                    >
                                        <div>
                                            <span class=\"close-mobile-search\"
                                                >×</span
                                            >
                                            <div class=\"overlay-content\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xl-12\">
                                                            <form>
                                                                <div
                                                                    class=\"form-group\"
                                                                >
                                                                    <input
                                                                        type=\"text\"
                                                                        class=\"form-control\"
                                                                        id=\"exampleInputPassword1\"
                                                                        placeholder=\"Search a Product\"
                                                                    />
                                                                </div>
                                                                <button
                                                                    type=\"submit\"
                                                                    class=\"btn btn-primary\"
                                                                >
                                                                    <i
                                                                        class=\"fa fa-search\"
                                                                    ></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class=\"mobile-setting mobile-setting-hover\"
                                    onclick=\"openSetting()\"
                                >
                                    <a href=\"#\"
                                        ><i class=\"icon-settings\"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"category-right\">
                        <div class=\"contact-block\">
                            <div>
                                <i class=\"fa fa-volume-control-phone\"></i>
                                <span>call us<span>123-456-76890</span></span>
                            </div>
                        </div>
                        <div class=\"btn-group\">
                            <div class=\"gift-block\" data-toggle=\"dropdown\">
                                <div class=\"grif-icon\">
                                    <i class=\"icon-gift\"></i>
                                </div>
                                <div class=\"gift-offer\">
                                    <p>gift box</p>
                                    <span>Festivel Offer</span>
                                </div>
                            </div>
                            <div class=\"dropdown-menu gift-dropdown\">
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/1.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Billion Days</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/currency.png\"
                                                class=\"cash\"
                                                alt=\"curancy\"
                                            />
                                            Flat Rs. 270 Rewards
                                        </p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/2.png\"
                                            alt=\"Generic placeholder image\"
                                            class=\"gift-bloc\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Fashion Discount</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/fire.png\"
                                                class=\"fire\"
                                                alt=\"fire\"
                                            />Extra 10% off (upto Rs. 10,000*)
                                        </p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/3.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">75% off Store</h5>
                                        <p>No coupon code is required.</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/6.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Upto 50% off</h5>
                                        <p>Buy popular phones under Rs.20.</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/5.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Beauty store</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/currency.png\"
                                                class=\"cash\"
                                                alt=\"curancy\"
                                            />
                                            Flat Rs. 270 Rewards
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/category-header2.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"category-header-2\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"navbar-menu\">
                    <div class=\"category-left\">
                        <div class=\"nav-block\">
                            <div class=\"nav-left\">
                                <nav
                                    class=\"navbar\"
                                    data-toggle=\"collapse\"
                                    data-target=\"#navbarToggleExternalContent\"
                                >
                                    <button
                                        class=\"navbar-toggler\"
                                        type=\"button\"
                                        style=\"\"
                                    >
                                        <span class=\"navbar-icon\"
                                            ><i class=\"fa fa-arrow-down\"></i
                                        ></span>
                                    </button>
                                    <h5 class=\"mb-0 text-white title-font\">
                                        Shop by category
                                    </h5>
                                </nav>
                                <div
                                    class=\"collapse nav-desk\"
                                    id=\"navbarToggleExternalContent\"
                                >
                                    <ul class=\"nav-cat title-font\">
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/01.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">western ware</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/02.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">TV, Appliances</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/03.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Pets Products</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/04.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Car, Motorbike</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/05.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Industrial Products</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/06.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\"
                                                >Beauty, Health Products</a
                                            >
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/07.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Grocery Products </a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/08.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Sports</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/09.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Bags, Luggage</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/10.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Movies, Music </a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/11.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Video Games</a>
                                        </li>
                                        <li>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/12.png\"
                                                alt=\"category-product\"
                                            />
                                            <a href=\"#\">Toys, Baby Products</a>
                                        </li>
                                        <li>
                                            <ul
                                                class=\"mor-slide-open\"
                                                style=\"display: none\"
                                            >
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/08.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Sports</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/09.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Bags, Luggage</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/10.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Movies, Music </a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/11.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Video Games</a>
                                                </li>
                                                <li>
                                                    <img
                                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/nav-img/12.png\"
                                                        alt=\"category-product\"
                                                    />
                                                    <a>Toys, Baby Products</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class=\"mor-slide-click\"
                                                >mor category
                                                <i
                                                    class=\"fa fa-angle-down pro-down\"
                                                ></i
                                                ><i
                                                    class=\"fa fa-angle-up pro-up\"
                                                    style=\"display: none\"
                                                ></i
                                            ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"menu-block\">
                            <nav id=\"main-nav\">
                                <div class=\"toggle-nav\">
                                    <i class=\"fa fa-bars sidebar-bar\"></i>
                                </div>
                                <ul
                                    id=\"main-menu\"
                                    class=\"sm pixelstrap sm-horizontal\"
                                    data-smartmenus-id=\"15998064596052466\"
                                >
                                    <li>
                                        <div class=\"mobile-back text-right\">
                                            Back<i
                                                class=\"fa fa-angle-right pl-2\"
                                                aria-hidden=\"true\"
                                            ></i>
                                        </div>
                                    </li>
                                    <!--HOME-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-1\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-2\"
                                            aria-expanded=\"false\"
                                            >Home<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-2\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-1\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"index.html\"
                                                    >layout 1</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-2.html\"
                                                    >layout 2</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-3.html\"
                                                    >layout 3</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-4.html\"
                                                    >layout 4</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-5.html\"
                                                    >layout 5</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    target=\"_blank\"
                                                    href=\"layout-6.html\"
                                                    >layout 6</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--HOME-END-->

                                    <!--SHOP-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-3\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-4\"
                                            aria-expanded=\"false\"
                                            >shop<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-4\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-3\"
                                            aria-expanded=\"false\"
                                            style=\"
                                                width: auto;
                                                display: none;
                                                top: auto;
                                                left: 0px;
                                                margin-left: 0px;
                                                margin-top: 0px;
                                                min-width: 10em;
                                                max-width: 20em;
                                            \"
                                            class=\"sm-nowrap\"
                                        >
                                            <li>
                                                <a
                                                    href=\"category-page(left-sidebar).html\"
                                                    >left sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(right-sidebar).html\"
                                                    >right sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(no-sidebar).html\"
                                                    >no sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(sidebar-popup).html\"
                                                    >sidebar popup</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(metro).html\"
                                                    >metro
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(full-width).html\"
                                                    >full width
                                                </a>
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(infinite-scroll).html\"
                                                    >infinite scroll</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(3-grid).html\"
                                                    >3 grid</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(6-grid).html\"
                                                    >6 grid</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"category-page(list-view).html\"
                                                    >list view</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--SHOP-END-->

                                    <!--product-meu start-->
                                    <li class=\"mega\">
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-5\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-6\"
                                            aria-expanded=\"false\"
                                            >product
                                            <span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            class=\"mega-menu full-mega-menu\"
                                            id=\"sm-15998064596052466-6\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-5\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        sidebar
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(left-sidebar).html\"
                                                                                >left
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(right-sidebar).html\"
                                                                                >right
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(no-sidebar).html\"
                                                                                >non
                                                                                sidebar</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        bonus
                                                                        layout
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(bundle).html\"
                                                                                >bundle</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(image-swatch).html\"
                                                                                >image
                                                                                swatch</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(vertical-tab).html\"
                                                                                >vertical
                                                                                tab</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        product
                                                                        layout
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(4-image).html\"
                                                                                >4
                                                                                image
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(sticky).html\"
                                                                                >sticky</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(accordian).html\"
                                                                                >accordian</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        thumbnail
                                                                        image
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(left-image).html\"
                                                                                >left
                                                                                image</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(right-image).html\"
                                                                                >right
                                                                                image</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(image-outside).html\"
                                                                                >image
                                                                                outside</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        3 column
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-col-left).html\"
                                                                                >thumbnail
                                                                                left</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-col-right).html\"
                                                                                >thumbnail
                                                                                right</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"product-page(3-column).html\"
                                                                                >thubnail
                                                                                bottom</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        product
                                                                        element
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-productbox.html\"
                                                                                >product
                                                                                box</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-product-slider.html\"
                                                                                >product
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-no_slider.html\"
                                                                                >no
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class=\"row menu-banner\"
                                                    >
                                                        <div class=\"col-lg-6\">
                                                            <div>
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/menu-banner1.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                        <div class=\"col-lg-6\">
                                                            <div>
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/menu-banner2.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--product-meu end-->

                                    <!--mega-meu start-->
                                    <li class=\"mega\">
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-7\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-8\"
                                            aria-expanded=\"false\"
                                            >features<span
                                                class=\"sub-arrow\"
                                            ></span
                                        ></a>
                                        <ul
                                            class=\"mega-menu full-mega-menu ratio_landscape sm-nowrap\"
                                            id=\"sm-15998064596052466-8\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-7\"
                                            aria-expanded=\"false\"
                                            style=\"
                                                width: auto;
                                                min-width: 10em;
                                                display: none;
                                                max-width: 20em;
                                                top: auto;
                                                left: 0px;
                                                margin-left: -325px;
                                                margin-top: 0px;
                                            \"
                                        >
                                            <li>
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        portfolio
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-2-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-3-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                3</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-4-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                4</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"grid-6-col.html\"
                                                                                >portfolio
                                                                                grid
                                                                                6</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-2-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-3-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                3</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-4-grid.html\"
                                                                                >mesonary
                                                                                grid
                                                                                4</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"masonary-fullwidth.html\"
                                                                                >mesonary
                                                                                full
                                                                                width</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        add to
                                                                        cart
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-5.html\"
                                                                                >cart
                                                                                modal
                                                                                popup</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-6.html\"
                                                                                >qty.
                                                                                counter
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"index.html\"
                                                                                >cart
                                                                                top</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-2.html\"
                                                                                >cart
                                                                                bottom</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-3.html\"
                                                                                >cart
                                                                                left</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"layout-4.html\"
                                                                                >cart
                                                                                right</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        shortcodes
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-title.html\"
                                                                                >title</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-banner.html\"
                                                                                >collection
                                                                                banner</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-slider.html\"
                                                                                >home
                                                                                slider</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-category.html\"
                                                                                >category</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-service.html\"
                                                                                >service</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-image-ratio.html\"
                                                                                >image
                                                                                size
                                                                                ratio</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"element-tab.html\"
                                                                                >tab</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box\"
                                                        >
                                                            <div
                                                                class=\"link-section\"
                                                            >
                                                                <div
                                                                    class=\"menu-title\"
                                                                >
                                                                    <h5>
                                                                        email
                                                                        template
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-order-success.html\"
                                                                                >order
                                                                                success</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-order-success-tow.html\"
                                                                                >order
                                                                                success
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-template.html\"
                                                                                >email
                                                                                template</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"email-template-tow.html\"
                                                                                >email
                                                                                template
                                                                                2</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div
                                                                    class=\"menu-title menu-secon-title\"
                                                                >
                                                                    <h5>
                                                                        Easy to
                                                                        use
                                                                    </h5>
                                                                </div>
                                                                <div
                                                                    class=\"menu-content\"
                                                                >
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href=\"button.html\"
                                                                                >element
                                                                                button</a
                                                                            >
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href=\"instagram.html\"
                                                                                >element
                                                                                instagram</a
                                                                            >
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class=\"col mega-box product\"
                                                        >
                                                            <div
                                                                class=\"mega-img\"
                                                            >
                                                                <img
                                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/mega-banner.jpg\"
                                                                    alt=\"menu-banner\"
                                                                    class=\"img-fluid\"
                                                                />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <!--mega-meu end-->

                                    <!--pages-meu start-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-9\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-10\"
                                            aria-expanded=\"false\"
                                            >pages<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-10\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-9\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    href=\"#\"
                                                    class=\"has-submenu\"
                                                    id=\"sm-15998064596052466-11\"
                                                    aria-haspopup=\"true\"
                                                    aria-controls=\"sm-15998064596052466-12\"
                                                    aria-expanded=\"false\"
                                                    >account<span
                                                        class=\"sub-arrow\"
                                                    ></span
                                                ></a>
                                                <ul
                                                    id=\"sm-15998064596052466-12\"
                                                    role=\"group\"
                                                    aria-hidden=\"true\"
                                                    aria-labelledby=\"sm-15998064596052466-11\"
                                                    aria-expanded=\"false\"
                                                >
                                                    <li>
                                                        <a href=\"wishlist.html\"
                                                            >wishlist</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"cart.html\"
                                                            >cart</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"dashboard.html\"
                                                            >Dashboard</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"login.html\"
                                                            >login</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"register.html\"
                                                            >register</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"contact.html\"
                                                            >contact</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a
                                                            href=\"forget-pwd.html\"
                                                            >forget password</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"profile.html\"
                                                            >profile
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href=\"checkout.html\"
                                                            >checkout</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href=\"about-page.html\"
                                                    >about us</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"search.html\">search</a>
                                            </li>
                                            <li>
                                                <a href=\"typography.html\"
                                                    >typography
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"review.html\"
                                                    >review
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"order-success.html\"
                                                    >order success</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"order-history.html\"
                                                    >order history</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"#\"
                                                    class=\"has-submenu\"
                                                    id=\"sm-15998064596052466-13\"
                                                    aria-haspopup=\"true\"
                                                    aria-controls=\"sm-15998064596052466-14\"
                                                    aria-expanded=\"false\"
                                                    >compare<span
                                                        class=\"sub-arrow\"
                                                    ></span
                                                ></a>
                                                <ul
                                                    id=\"sm-15998064596052466-14\"
                                                    role=\"group\"
                                                    aria-hidden=\"true\"
                                                    aria-labelledby=\"sm-15998064596052466-13\"
                                                    aria-expanded=\"false\"
                                                >
                                                    <li>
                                                        <a href=\"compare.html\"
                                                            >compare</a
                                                        >
                                                    </li>
                                                    <li>
                                                        <a href=\"compare-2.html\"
                                                            >compare-2</a
                                                        >
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href=\"collection.html\"
                                                    >collection</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"look-book.html\"
                                                    >lookbook</a
                                                >
                                            </li>
                                            <li><a href=\"404.html\">404</a></li>
                                            <li>
                                                <a href=\"coming-soon.html\"
                                                    >coming soon
                                                </a>
                                            </li>
                                            <li><a href=\"faq.html\">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <!--product-end end-->

                                    <!--blog-meu start-->
                                    <li>
                                        <a
                                            href=\"#\"
                                            class=\"dark-menu-item has-submenu\"
                                            id=\"sm-15998064596052466-15\"
                                            aria-haspopup=\"true\"
                                            aria-controls=\"sm-15998064596052466-16\"
                                            aria-expanded=\"false\"
                                            >blog<span class=\"sub-arrow\"></span
                                        ></a>
                                        <ul
                                            id=\"sm-15998064596052466-16\"
                                            role=\"group\"
                                            aria-hidden=\"true\"
                                            aria-labelledby=\"sm-15998064596052466-15\"
                                            aria-expanded=\"false\"
                                        >
                                            <li>
                                                <a
                                                    href=\"blog(left-sidebar).html\"
                                                    >left sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href=\"blog(right-sidebar).html\"
                                                    >right sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"blog(no-sidebar).html\"
                                                    >no sidebar</a
                                                >
                                            </li>
                                            <li>
                                                <a href=\"blog-details.html\"
                                                    >blog details</a
                                                >
                                            </li>
                                        </ul>
                                    </li>
                                    <!--blog-meu end-->
                                </ul>
                            </nav>
                        </div>
                        <div class=\"icon-block\">
                            <ul>
                                <li
                                    class=\"mobile-user onhover-dropdown\"
                                    onclick=\"openAccount()\"
                                >
                                    <a href=\"#\"><i class=\"icon-user\"></i> </a>
                                </li>
                                <li
                                    class=\"mobile-wishlist\"
                                    onclick=\"openWishlist()\"
                                >
                                    <a
                                        ><i class=\"icon-heart\"></i>
                                        <div class=\"cart-item\">
                                            <div>
                                                0 item<span>wishlist</span>
                                            </div>
                                        </div></a
                                    >
                                </li>
                                <li class=\"mobile-search\">
                                    <a href=\"#\"><i class=\"icon-search\"></i></a>
                                    <div
                                        class=\"search-overlay\"
                                        style=\"display: none\"
                                    >
                                        <div>
                                            <span class=\"close-mobile-search\"
                                                >×</span
                                            >
                                            <div class=\"overlay-content\">
                                                <div class=\"container\">
                                                    <div class=\"row\">
                                                        <div class=\"col-xl-12\">
                                                            <form>
                                                                <div
                                                                    class=\"form-group\"
                                                                >
                                                                    <input
                                                                        type=\"text\"
                                                                        class=\"form-control\"
                                                                        id=\"exampleInputPassword1\"
                                                                        placeholder=\"Search a Product\"
                                                                    />
                                                                </div>
                                                                <button
                                                                    type=\"submit\"
                                                                    class=\"btn btn-primary\"
                                                                >
                                                                    <i
                                                                        class=\"fa fa-search\"
                                                                    ></i>
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li
                                    class=\"mobile-setting mobile-setting-hover\"
                                    onclick=\"openSetting()\"
                                >
                                    <a href=\"#\"
                                        ><i class=\"icon-settings\"></i
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"category-right\">
                        <div class=\"contact-block\">
                            <div>
                                <i class=\"fa fa-volume-control-phone\"></i>
                                <span>call us<span>123-456-76890</span></span>
                            </div>
                        </div>
                        <div class=\"btn-group\">
                            <div class=\"gift-block\" data-toggle=\"dropdown\">
                                <div class=\"grif-icon\">
                                    <i class=\"icon-gift\"></i>
                                </div>
                                <div class=\"gift-offer\">
                                    <p>gift box</p>
                                    <span>Festivel Offer</span>
                                </div>
                            </div>
                            <div class=\"dropdown-menu gift-dropdown\">
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/1.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Billion Days</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/currency.png\"
                                                class=\"cash\"
                                                alt=\"curancy\"
                                            />
                                            Flat Rs. 270 Rewards
                                        </p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/2.png\"
                                            alt=\"Generic placeholder image\"
                                            class=\"gift-bloc\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Fashion Discount</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/fire.png\"
                                                class=\"fire\"
                                                alt=\"fire\"
                                            />Extra 10% off (upto Rs. 10,000*)
                                        </p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/3.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">75% off Store</h5>
                                        <p>No coupon code is required.</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/6.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Upto 50% off</h5>
                                        <p>Buy popular phones under Rs.20.</p>
                                    </div>
                                </div>
                                <div class=\"media\">
                                    <div class=\"mr-3\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/5.png\"
                                            alt=\"Generic placeholder image\"
                                        />
                                    </div>
                                    <div class=\"media-body\">
                                        <h5 class=\"mt-0\">Beauty store</h5>
                                        <p>
                                            <img
                                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/icon/currency.png\"
                                                class=\"cash\"
                                                alt=\"curancy\"
                                            />
                                            Flat Rs. 270 Rewards
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/category-header2.htm", "");
    }
}
