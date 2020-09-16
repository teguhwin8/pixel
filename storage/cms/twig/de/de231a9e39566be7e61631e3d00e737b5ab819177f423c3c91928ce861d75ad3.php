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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/add-to-wishlist-bar.htm */
class __TwigTemplate_dc912f3b60ea1d08200976a188e907c027b249fbdddaa8fd2f93863987107eef extends \Twig\Template
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
        echo "<div id=\"wishlist_side\" class=\"add_to_cart right\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeWishlist()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my wishlist</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeWishlist()\">
                    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>
        <div class=\"cart_media\">
            <ul class=\"cart_product\">
                <li>
                    <div class=\"media\">
                        <a href=\"#\">
                            <img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>\$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a href=\"#\">
                            <img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>\$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a href=\"#\"
                            ><img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                        /></a>
                        <div class=\"media-body\">
                            <a href=\"#\"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>\$ 299.00</span></h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"cart_total\">
                <li>
                    <div class=\"total\">
                        <h5>subtotal : <span>\$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class=\"buttons\">
                        <a
                            href=\"wishlist.html\"
                            class=\"btn btn-normal btn-block view-cart\"
                            >view wislist</a
                        >
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/add-to-wishlist-bar.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"wishlist_side\" class=\"add_to_cart right\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeWishlist()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my wishlist</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeWishlist()\">
                    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>
        <div class=\"cart_media\">
            <ul class=\"cart_product\">
                <li>
                    <div class=\"media\">
                        <a href=\"#\">
                            <img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>\$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a href=\"#\">
                            <img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/2.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4>
                                <span>\$ 299.00</span>
                            </h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
                <li>
                    <div class=\"media\">
                        <a href=\"#\"
                            ><img
                                alt=\"\"
                                class=\"mr-3\"
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/media-banner/3.jpg\"
                        /></a>
                        <div class=\"media-body\">
                            <a href=\"#\"><h4>item name</h4></a>
                            <h4>
                                <span>sm</span>
                                <span>, blue</span>
                            </h4>
                            <h4><span>\$ 299.00</span></h4>
                        </div>
                    </div>
                    <div class=\"close-circle\">
                        <a href=\"#\">
                            <i class=\"ti-trash\" aria-hidden=\"true\"></i>
                        </a>
                    </div>
                </li>
            </ul>
            <ul class=\"cart_total\">
                <li>
                    <div class=\"total\">
                        <h5>subtotal : <span>\$299.00</span></h5>
                    </div>
                </li>
                <li>
                    <div class=\"buttons\">
                        <a
                            href=\"wishlist.html\"
                            class=\"btn btn-normal btn-block view-cart\"
                            >view wislist</a
                        >
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/add-to-wishlist-bar.htm", "");
    }
}
