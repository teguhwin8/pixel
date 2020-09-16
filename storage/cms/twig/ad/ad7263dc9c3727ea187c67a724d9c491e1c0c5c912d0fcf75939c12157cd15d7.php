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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/quick-view-modal.htm */
class __TwigTemplate_73c04441e2b0ff930f45ce46eb21e61fffb1a05bb177ef6ce7251c143fe7d63f extends \Twig\Template
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
        echo "<div
    class=\"modal fade bd-example-modal-lg theme-modal\"
    id=\"quick-view\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content quick-view-modal\">
            <div class=\"modal-body\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"modal\"
                    aria-label=\"Close\"
                >
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-xs-12\">
                        <div class=\"quick-view-img\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                alt=\"\"
                                class=\"img-fluid\"
                            />
                        </div>
                    </div>
                    <div class=\"col-lg-6 rtl-text\">
                        <div class=\"product-right\">
                            <h2>Women Pink Shirt</h2>
                            <h3>\$32.96</h3>
                            <ul class=\"color-variant\">
                                <li class=\"bg-light0\"></li>
                                <li class=\"bg-light1\"></li>
                                <li class=\"bg-light2\"></li>
                            </ul>
                            <div class=\"border-product\">
                                <h6 class=\"product-title\">product details</h6>
                                <p>
                                    Sed ut perspiciatis, unde omnis iste natus
                                    error sit voluptatem accusantium doloremque
                                    laudantium
                                </p>
                            </div>
                            <div class=\"product-description border-product\">
                                <div class=\"size-box\">
                                    <ul>
                                        <li class=\"active\">
                                            <a href=\"#\">s</a>
                                        </li>
                                        <li><a href=\"#\">m</a></li>
                                        <li><a href=\"#\">l</a></li>
                                        <li><a href=\"#\">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class=\"product-title\">quantity</h6>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\"
                                            ><button
                                                type=\"button\"
                                                class=\"btn quantity-left-minus\"
                                                data-type=\"minus\"
                                                data-field=\"\"
                                            >
                                                <i class=\"ti-angle-left\"></i>
                                            </button>
                                        </span>
                                        <input
                                            type=\"text\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                        <span class=\"input-group-prepend\"
                                            ><button
                                                type=\"button\"
                                                class=\"btn quantity-right-plus\"
                                                data-type=\"plus\"
                                                data-field=\"\"
                                            >
                                                <i
                                                    class=\"ti-angle-right\"
                                                ></i></button
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product-buttons\">
                                <a href=\"#\" class=\"btn btn-normal\"
                                    >add to cart</a
                                >
                                <a href=\"#\" class=\"btn btn-normal\"
                                    >view detail</a
                                >
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/quick-view-modal.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"modal fade bd-example-modal-lg theme-modal\"
    id=\"quick-view\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content quick-view-modal\">
            <div class=\"modal-body\">
                <button
                    type=\"button\"
                    class=\"close\"
                    data-dismiss=\"modal\"
                    aria-label=\"Close\"
                >
                    <span aria-hidden=\"true\">&times;</span>
                </button>
                <div class=\"row\">
                    <div class=\"col-lg-6 col-xs-12\">
                        <div class=\"quick-view-img\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/product/a1.jpg\"
                                alt=\"\"
                                class=\"img-fluid\"
                            />
                        </div>
                    </div>
                    <div class=\"col-lg-6 rtl-text\">
                        <div class=\"product-right\">
                            <h2>Women Pink Shirt</h2>
                            <h3>\$32.96</h3>
                            <ul class=\"color-variant\">
                                <li class=\"bg-light0\"></li>
                                <li class=\"bg-light1\"></li>
                                <li class=\"bg-light2\"></li>
                            </ul>
                            <div class=\"border-product\">
                                <h6 class=\"product-title\">product details</h6>
                                <p>
                                    Sed ut perspiciatis, unde omnis iste natus
                                    error sit voluptatem accusantium doloremque
                                    laudantium
                                </p>
                            </div>
                            <div class=\"product-description border-product\">
                                <div class=\"size-box\">
                                    <ul>
                                        <li class=\"active\">
                                            <a href=\"#\">s</a>
                                        </li>
                                        <li><a href=\"#\">m</a></li>
                                        <li><a href=\"#\">l</a></li>
                                        <li><a href=\"#\">xl</a></li>
                                    </ul>
                                </div>
                                <h6 class=\"product-title\">quantity</h6>
                                <div class=\"qty-box\">
                                    <div class=\"input-group\">
                                        <span class=\"input-group-prepend\"
                                            ><button
                                                type=\"button\"
                                                class=\"btn quantity-left-minus\"
                                                data-type=\"minus\"
                                                data-field=\"\"
                                            >
                                                <i class=\"ti-angle-left\"></i>
                                            </button>
                                        </span>
                                        <input
                                            type=\"text\"
                                            name=\"quantity\"
                                            class=\"form-control input-number\"
                                            value=\"1\"
                                        />
                                        <span class=\"input-group-prepend\"
                                            ><button
                                                type=\"button\"
                                                class=\"btn quantity-right-plus\"
                                                data-type=\"plus\"
                                                data-field=\"\"
                                            >
                                                <i
                                                    class=\"ti-angle-right\"
                                                ></i></button
                                        ></span>
                                    </div>
                                </div>
                            </div>
                            <div class=\"product-buttons\">
                                <a href=\"#\" class=\"btn btn-normal\"
                                    >add to cart</a
                                >
                                <a href=\"#\" class=\"btn btn-normal\"
                                    >view detail</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/quick-view-modal.htm", "");
    }
}
