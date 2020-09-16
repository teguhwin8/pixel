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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/whislist.htm */
class __TwigTemplate_7898176ae8d9492f9fb88af181f19ccfd6fb6f69c8b57387debe16793a26dcd9 extends \Twig\Template
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
        echo "<section class=\"wishlist-section section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table class=\"table cart-table table-responsive-xs\">
                    <thead>
                        <tr class=\"table-head\">
                            <th scope=\"col\">image</th>
                            <th scope=\"col\">product name</th>
                            <th scope=\"col\">price</th>
                            <th scope=\"col\">availability</th>
                            <th scope=\"col\">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/2.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row wishlist-buttons\">
            <div class=\"col-12\">
                <a href=\"#\" class=\"btn btn-normal\">continue shopping</a>
                <a href=\"#\" class=\"btn btn-normal\">check out</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/whislist.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"wishlist-section section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table class=\"table cart-table table-responsive-xs\">
                    <thead>
                        <tr class=\"table-head\">
                            <th scope=\"col\">image</th>
                            <th scope=\"col\">product name</th>
                            <th scope=\"col\">price</th>
                            <th scope=\"col\">availability</th>
                            <th scope=\"col\">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/1.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/2.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/3.jpg\"
                                        alt=\"product\"
                                        class=\"img-fluid\"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <p>in stock</p>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon mr-1\"
                                                ><i class=\"ti-close\"></i> </a
                                            ><a href=\"#\" class=\"cart\"
                                                ><i class=\"ti-shopping-cart\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <p>in stock</p>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon mr-3\"
                                    ><i class=\"ti-close\"></i> </a
                                ><a href=\"#\" class=\"cart\"
                                    ><i class=\"ti-shopping-cart\"></i
                                ></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class=\"row wishlist-buttons\">
            <div class=\"col-12\">
                <a href=\"#\" class=\"btn btn-normal\">continue shopping</a>
                <a href=\"#\" class=\"btn btn-normal\">check out</a>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/whislist.htm", "");
    }
}
