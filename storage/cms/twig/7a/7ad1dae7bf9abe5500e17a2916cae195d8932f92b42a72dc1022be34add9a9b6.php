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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/header/top-header.htm */
class __TwigTemplate_2a9f5e6fce2db1e3b29b71491d60d47712b535675ea9a3a97f4631b46b716cc0 extends \Twig\Template
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
        echo "<div class=\"top-header\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-xl-5 col-md-7 col-sm-6\">
                <div class=\"top-header-left\">
                    <div class=\"shpping-order\">
                        <h6>free shipping on order over \$99</h6>
                    </div>
                    <div class=\"app-link\">
                        <h6>Download aap</h6>
                        <ul>
                            <li>
                                <a><i class=\"fa fa-apple\"></i></a>
                            </li>
                            <li>
                                <a><i class=\"fa fa-android\"></i></a>
                            </li>
                            <li>
                                <a><i class=\"fa fa-windows\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7 col-md-5 col-sm-6\">
                <div class=\"top-header-right\">
                    <div class=\"top-menu-block\">
                        <ul>
                            <li><a href=\"#\">gift cards</a></li>
                            <li><a href=\"#\">Notifications</a></li>
                            <li><a href=\"#\">help &amp; contact</a></li>
                            <li><a href=\"#\">todays deal</a></li>
                            <li><a href=\"#\">track order</a></li>
                            <li><a href=\"#\">shipping </a></li>
                            <li><a href=\"#\">easy returns</a></li>
                        </ul>
                    </div>
                    <div class=\"language-block\">
                        <div class=\"language-dropdown\">
                            <span class=\"language-dropdown-click\">
                                english
                                <i
                                    class=\"fa fa-angle-down\"
                                    aria-hidden=\"true\"
                                ></i>
                            </span>
                            <ul
                                class=\"language-dropdown-open\"
                                style=\"display: none\"
                            >
                                <li><a href=\"#\">hindi</a></li>
                                <li><a href=\"#\">english</a></li>
                                <li><a href=\"#\">marathi</a></li>
                                <li><a href=\"#\">spanish</a></li>
                            </ul>
                        </div>
                        <div class=\"curroncy-dropdown\">
                            <span class=\"curroncy-dropdown-click\">
                                usd<i
                                    class=\"fa fa-angle-down\"
                                    aria-hidden=\"true\"
                                ></i>
                            </span>
                            <ul
                                class=\"curroncy-dropdown-open\"
                                style=\"display: none\"
                            >
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-inr\"></i>inr</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-usd\"></i>usd</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-eur\"></i>eur</a>
                                </li>
                            </ul>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/top-header.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-header\">
    <div class=\"custom-container\">
        <div class=\"row\">
            <div class=\"col-xl-5 col-md-7 col-sm-6\">
                <div class=\"top-header-left\">
                    <div class=\"shpping-order\">
                        <h6>free shipping on order over \$99</h6>
                    </div>
                    <div class=\"app-link\">
                        <h6>Download aap</h6>
                        <ul>
                            <li>
                                <a><i class=\"fa fa-apple\"></i></a>
                            </li>
                            <li>
                                <a><i class=\"fa fa-android\"></i></a>
                            </li>
                            <li>
                                <a><i class=\"fa fa-windows\"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-7 col-md-5 col-sm-6\">
                <div class=\"top-header-right\">
                    <div class=\"top-menu-block\">
                        <ul>
                            <li><a href=\"#\">gift cards</a></li>
                            <li><a href=\"#\">Notifications</a></li>
                            <li><a href=\"#\">help &amp; contact</a></li>
                            <li><a href=\"#\">todays deal</a></li>
                            <li><a href=\"#\">track order</a></li>
                            <li><a href=\"#\">shipping </a></li>
                            <li><a href=\"#\">easy returns</a></li>
                        </ul>
                    </div>
                    <div class=\"language-block\">
                        <div class=\"language-dropdown\">
                            <span class=\"language-dropdown-click\">
                                english
                                <i
                                    class=\"fa fa-angle-down\"
                                    aria-hidden=\"true\"
                                ></i>
                            </span>
                            <ul
                                class=\"language-dropdown-open\"
                                style=\"display: none\"
                            >
                                <li><a href=\"#\">hindi</a></li>
                                <li><a href=\"#\">english</a></li>
                                <li><a href=\"#\">marathi</a></li>
                                <li><a href=\"#\">spanish</a></li>
                            </ul>
                        </div>
                        <div class=\"curroncy-dropdown\">
                            <span class=\"curroncy-dropdown-click\">
                                usd<i
                                    class=\"fa fa-angle-down\"
                                    aria-hidden=\"true\"
                                ></i>
                            </span>
                            <ul
                                class=\"curroncy-dropdown-open\"
                                style=\"display: none\"
                            >
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-inr\"></i>inr</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-usd\"></i>usd</a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-eur\"></i>eur</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/header/top-header.htm", "");
    }
}
