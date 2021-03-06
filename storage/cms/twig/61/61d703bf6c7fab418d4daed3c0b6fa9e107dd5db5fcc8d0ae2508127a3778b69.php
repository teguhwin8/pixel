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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/header/layout-header2.htm */
class __TwigTemplate_76c104fc3f3de538f68eb850957a97b47103a9575b5e36b149b0db3d61445a44 extends \Twig\Template
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
        $filters = array("theme" => 53);
        $functions = array("url" => 51);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                ['url']
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
        echo "<style>
    .form-control {
        height: auto;
    }
</style>
<div class=\"layout-header2\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"main-menu-block\">
                <div class=\"sm-nav-block\">
                    <span class=\"sm-nav-btn\"><i class=\"fa fa-bars\"></i></span>
                    <ul class=\"nav-slide\">
                        <li>
                            <div class=\"nav-sm-back\">
                                back <i class=\"fa fa-angle-right pl-2\"></i>
                            </div>
                        </li>
                        <li><a href=\"#\">western ware</a></li>
                        <li><a href=\"#\">TV, Appliances</a></li>
                        <li><a href=\"#\">Pets Products</a></li>
                        <li><a href=\"#\">Car, Motorbike</a></li>
                        <li><a href=\"#\">Industrial Products</a></li>
                        <li><a href=\"#\">Beauty, Health Products</a></li>
                        <li><a href=\"#\">Grocery Products </a></li>
                        <li><a href=\"#\">Sports</a></li>
                        <li><a href=\"#\">Bags, Luggage</a></li>
                        <li><a href=\"#\">Movies, Music </a></li>
                        <li><a href=\"#\">Video Games</a></li>
                        <li><a href=\"#\">Toys, Baby Products</a></li>
                        <li class=\"mor-slide-open\" style=\"display: none\">
                            <ul>
                                <li><a href=\"#\">Bags, Luggage</a></li>
                                <li><a href=\"#\">Movies, Music </a></li>
                                <li><a href=\"#\">Video Games</a></li>
                                <li><a href=\"#\">Toys, Baby Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"mor-slide-click\">
                                mor category
                                <i class=\"fa fa-angle-down pro-down\"></i>
                                <i
                                    class=\"fa fa-angle-up pro-up\"
                                    style=\"display: none\"
                                ></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"logo-block\">
                    <a href=\"";
        // line 51
        echo url("/");
        echo "\"
                        ><img
                            src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\"
                            class=\"img-fluid\"
                            alt=\"logo\"
                    /></a>
                </div>
                <div class=\"input-block\">
                    <div class=\"input-box\">
                        <form class=\"big-deal-form\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"search\"
                                        ><i class=\"fa fa-search\"></i
                                    ></span>
                                </div>
                                <input
                                    type=\"text\"
                                    class=\"form-control\"
                                    placeholder=\"Search a Product\"
                                />
                                <div class=\"input-group-prepend\">
                                    <select>
                                        <option>All Category</option>
                                        <option>indurstrial</option>
                                        <option>sports</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"cart-block cart-hover-div\" onclick=\"openCart()\">
                    <div class=\"cart\">
                        <span class=\"cart-product\">0</span>
                        <ul>
                            <li class=\"mobile-cart\">
                                <a href=\"#\">
                                    <i class=\"icon-shopping-cart\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"cart-item\">
                        <h5>shopping</h5>
                        <h5>cart</h5>
                    </div>
                </div>
                <div class=\"menu-nav\">
                    <span class=\"toggle-nav\">
                        <i class=\"fa fa-bars\"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/layout-header2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 53,  114 => 51,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<style>
    .form-control {
        height: auto;
    }
</style>
<div class=\"layout-header2\">
    <div class=\"container\">
        <div class=\"col-md-12\">
            <div class=\"main-menu-block\">
                <div class=\"sm-nav-block\">
                    <span class=\"sm-nav-btn\"><i class=\"fa fa-bars\"></i></span>
                    <ul class=\"nav-slide\">
                        <li>
                            <div class=\"nav-sm-back\">
                                back <i class=\"fa fa-angle-right pl-2\"></i>
                            </div>
                        </li>
                        <li><a href=\"#\">western ware</a></li>
                        <li><a href=\"#\">TV, Appliances</a></li>
                        <li><a href=\"#\">Pets Products</a></li>
                        <li><a href=\"#\">Car, Motorbike</a></li>
                        <li><a href=\"#\">Industrial Products</a></li>
                        <li><a href=\"#\">Beauty, Health Products</a></li>
                        <li><a href=\"#\">Grocery Products </a></li>
                        <li><a href=\"#\">Sports</a></li>
                        <li><a href=\"#\">Bags, Luggage</a></li>
                        <li><a href=\"#\">Movies, Music </a></li>
                        <li><a href=\"#\">Video Games</a></li>
                        <li><a href=\"#\">Toys, Baby Products</a></li>
                        <li class=\"mor-slide-open\" style=\"display: none\">
                            <ul>
                                <li><a href=\"#\">Bags, Luggage</a></li>
                                <li><a href=\"#\">Movies, Music </a></li>
                                <li><a href=\"#\">Video Games</a></li>
                                <li><a href=\"#\">Toys, Baby Products</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class=\"mor-slide-click\">
                                mor category
                                <i class=\"fa fa-angle-down pro-down\"></i>
                                <i
                                    class=\"fa fa-angle-up pro-up\"
                                    style=\"display: none\"
                                ></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"logo-block\">
                    <a href=\"{{ url('/') }}\"
                        ><img
                            src=\"{{ 'assets/images/logo.png'|theme }}\"
                            class=\"img-fluid\"
                            alt=\"logo\"
                    /></a>
                </div>
                <div class=\"input-block\">
                    <div class=\"input-box\">
                        <form class=\"big-deal-form\">
                            <div class=\"input-group\">
                                <div class=\"input-group-prepend\">
                                    <span class=\"search\"
                                        ><i class=\"fa fa-search\"></i
                                    ></span>
                                </div>
                                <input
                                    type=\"text\"
                                    class=\"form-control\"
                                    placeholder=\"Search a Product\"
                                />
                                <div class=\"input-group-prepend\">
                                    <select>
                                        <option>All Category</option>
                                        <option>indurstrial</option>
                                        <option>sports</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"cart-block cart-hover-div\" onclick=\"openCart()\">
                    <div class=\"cart\">
                        <span class=\"cart-product\">0</span>
                        <ul>
                            <li class=\"mobile-cart\">
                                <a href=\"#\">
                                    <i class=\"icon-shopping-cart\"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"cart-item\">
                        <h5>shopping</h5>
                        <h5>cart</h5>
                    </div>
                </div>
                <div class=\"menu-nav\">
                    <span class=\"toggle-nav\">
                        <i class=\"fa fa-bars\"></i>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/layout-header2.htm", "");
    }
}
