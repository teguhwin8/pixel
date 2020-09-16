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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/add-to-cart-bar.htm */
class __TwigTemplate_f94f7b2180fea3d79fe4c0fc09781cb9a46ebad3bd3ae052c9fc9eb7d9179f7c extends \Twig\Template
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
        echo "<div id=\"cart_side\" class=\"add_to_cart top\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeCart()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my cart</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeCart()\">
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x \$ 299.00</span>
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x \$ 299.00</span>
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                        /></a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x \$ 299.00</span></h4>
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
                            href=\"cart.html\"
                            class=\"btn btn-normal btn-xs view-cart\"
                            >view cart</a
                        >
                        <a href=\"#\" class=\"btn btn-normal btn-xs checkout\"
                            >checkout</a
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/add-to-cart-bar.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"cart_side\" class=\"add_to_cart top\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeCart()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my cart</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeCart()\">
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x \$ 299.00</span>
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                            />
                        </a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4>
                                <span>1 x \$ 299.00</span>
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
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                        /></a>
                        <div class=\"media-body\">
                            <a href=\"#\">
                                <h4>item name</h4>
                            </a>
                            <h4><span>1 x \$ 299.00</span></h4>
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
                            href=\"cart.html\"
                            class=\"btn btn-normal btn-xs view-cart\"
                            >view cart</a
                        >
                        <a href=\"#\" class=\"btn btn-normal btn-xs checkout\"
                            >checkout</a
                        >
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/add-to-cart-bar.htm", "");
    }
}
