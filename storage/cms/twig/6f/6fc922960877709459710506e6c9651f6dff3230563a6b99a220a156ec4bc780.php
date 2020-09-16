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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/cart.htm */
class __TwigTemplate_dd03efb2af6d5387533ca3bcf902e10080d03cbdb0232d179c7545e405419a15 extends \Twig\Template
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
        echo "<section class=\"cart-section section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table class=\"table cart-table table-responsive-xs\">
                    <thead>
                        <tr class=\"table-head\">
                            <th scope=\"col\">image</th>
                            <th scope=\"col\">product name</th>
                            <th scope=\"col\">price</th>
                            <th scope=\"col\">quantity</th>
                            <th scope=\"col\">action</th>
                            <th scope=\"col\">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/1.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"text\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/4.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"number\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/3.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"number\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class=\"table cart-table table-responsive-md\">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2>\$6935.00</h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class=\"row cart-buttons\">
            <div class=\"col-12\">
                <a href=\"#\" class=\"btn btn-normal\">continue shopping</a>
                <a href=\"#\" class=\"btn btn-normal ml-3\">check out</a>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/cart.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"cart-section section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-sm-12\">
                <table class=\"table cart-table table-responsive-xs\">
                    <thead>
                        <tr class=\"table-head\">
                            <th scope=\"col\">image</th>
                            <th scope=\"col\">product name</th>
                            <th scope=\"col\">price</th>
                            <th scope=\"col\">quantity</th>
                            <th scope=\"col\">action</th>
                            <th scope=\"col\">total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/1.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"text\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/4.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"number\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td>
                                <a href=\"#\"
                                    ><img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-3/product/3.jpg\"
                                        alt=\"cart\"
                                        class=\" \"
                                /></a>
                            </td>
                            <td>
                                <a href=\"#\">cotton shirt</a>
                                <div class=\"mobile-cart-content row\">
                                    <div class=\"col-xs-3\">
                                        <div class=\"qty-box\">
                                            <div class=\"input-group\">
                                                <input
                                                    type=\"number\"
                                                    name=\"quantity\"
                                                    class=\"form-control input-number\"
                                                    value=\"1\"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">\$63.00</h2>
                                    </div>
                                    <div class=\"col-xs-3\">
                                        <h2 class=\"td-color\">
                                            <a href=\"#\" class=\"icon\"
                                                ><i class=\"ti-close\"></i
                                            ></a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>\$63.00</h2>
                            </td>
                            <td>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <input
                                            type=\"number\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                    </div>
                                </div>
                            </td>
                            <td>
                                <a href=\"#\" class=\"icon\"
                                    ><i class=\"ti-close\"></i
                                ></a>
                            </td>
                            <td>
                                <h2 class=\"td-color\">\$4539.00</h2>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class=\"table cart-table table-responsive-md\">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h2>\$6935.00</h2>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class=\"row cart-buttons\">
            <div class=\"col-12\">
                <a href=\"#\" class=\"btn btn-normal\">continue shopping</a>
                <a href=\"#\" class=\"btn btn-normal ml-3\">check out</a>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/cart.htm", "");
    }
}
