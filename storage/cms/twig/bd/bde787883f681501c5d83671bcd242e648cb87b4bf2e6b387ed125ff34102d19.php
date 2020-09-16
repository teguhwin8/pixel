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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/footer.htm */
class __TwigTemplate_e2337c19f91ca1f6ba14bf56bb087e9cbd1722ddd36e65e88e8d8219bb7a2578 extends \Twig\Template
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
        echo "<footer class=\"footer-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"footer-main-contian\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-12\">
                            <div class=\"footer-left\">
                                <div class=\"footer-logo\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/logo/logo.png\"
                                        class=\"img-fluid\"
                                        alt=\"logo\"
                                    />
                                </div>
                                <div class=\"footer-detail\">
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock,
                                    </p>
                                    <ul class=\"paymant-bottom\">
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/1.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/2.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/3.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/4.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/5.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8 col-md-12\">
                            <div class=\"footer-right\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"subscribe-section\">
                                            <div class=\"row\">
                                                <div class=\"col-md-5\">
                                                    <div
                                                        class=\"subscribe-block\"
                                                    >
                                                        <div
                                                            class=\"subscrib-contant\"
                                                        >
                                                            <h4>
                                                                subscribe to
                                                                newsletter
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-7\">
                                                    <div
                                                        class=\"subscribe-block\"
                                                    >
                                                        <div
                                                            class=\"subscrib-contant\"
                                                        >
                                                            <div
                                                                class=\"input-group\"
                                                            >
                                                                <div
                                                                    class=\"input-group-prepend\"
                                                                >
                                                                    <span
                                                                        class=\"input-group-text\"
                                                                        ><i
                                                                            class=\"fa fa-envelope-o\"
                                                                        ></i
                                                                    ></span>
                                                                </div>
                                                                <input
                                                                    type=\"text\"
                                                                    class=\"form-control\"
                                                                    placeholder=\"your email\"
                                                                />
                                                                <div
                                                                    class=\"input-group-prepend\"
                                                                >
                                                                    <span
                                                                        class=\"input-group-text telly\"
                                                                        ><i
                                                                            class=\"fa fa-telegram\"
                                                                        ></i
                                                                    ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <div class=\"account-right\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <div class=\"footer-box\">
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>my account</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >about
                                                                        us</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >contact
                                                                        us</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >terms &
                                                                        conditions</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >returns
                                                                        &
                                                                        exchanges</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >shipping
                                                                        &
                                                                        delivery</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <div class=\"footer-box\">
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>quick link</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >store
                                                                        location</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        my
                                                                        account</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        orders
                                                                        tracking</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        size
                                                                        guide</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >FAQ
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-5\">
                                                    <div
                                                        class=\"footer-box footer-contact-box\"
                                                    >
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>contact us</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul
                                                                class=\"contact-list\"
                                                            >
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-map-marker\"
                                                                    ></i
                                                                    ><span
                                                                        >big
                                                                        deal
                                                                        store
                                                                        demo
                                                                        store
                                                                        <br />
                                                                        <span>
                                                                            india-3654123</span
                                                                        ></span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-phone\"
                                                                    ></i
                                                                    ><span
                                                                        >call
                                                                        us:
                                                                        123-456-7898</span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-envelope-o\"
                                                                    ></i
                                                                    ><span
                                                                        >email
                                                                        us:
                                                                        support@bigdeal.com</span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-fax\"
                                                                    ></i
                                                                    ><span
                                                                        >fax
                                                                        123456</span
                                                                    >
                                                                </li>
                                                            </ul>
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
    <div class=\"app-link-block bg-transparent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"app-link-bloc-contain app-link-bloc-contain-1\">
                    <div class=\"app-item-group\">
                        <div class=\"app-item\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/app/1.png\"
                                class=\"img-fluid\"
                                alt=\"app-banner\"
                            />
                        </div>
                        <div class=\"app-item\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/app/2.png\"
                                class=\"img-fluid\"
                                alt=\"app-banner\"
                            />
                        </div>
                    </div>
                    <div class=\"app-item-group\">
                        <div class=\"sosiyal-block\">
                            <h6>follow us</h6>
                            <ul class=\"sosiyal\">
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-facebook\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-google-plus\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-twitter\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-instagram\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"sub-footer-contain\">
                        <p>
                            <span>2018 - 19 </span>copy right by themeforest
                            powered by pixel strap
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"footer-2\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-12\">
                <div class=\"footer-main-contian\">
                    <div class=\"row\">
                        <div class=\"col-lg-4 col-md-12\">
                            <div class=\"footer-left\">
                                <div class=\"footer-logo\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/logo/logo.png\"
                                        class=\"img-fluid\"
                                        alt=\"logo\"
                                    />
                                </div>
                                <div class=\"footer-detail\">
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock,
                                    </p>
                                    <ul class=\"paymant-bottom\">
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/1.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/2.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/3.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/4.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                        <li>
                                            <a href=\"#\"
                                                ><img
                                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/pay/5.png\"
                                                    class=\"img-fluid\"
                                                    alt=\"pay\"
                                            /></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-8 col-md-12\">
                            <div class=\"footer-right\">
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <div class=\"subscribe-section\">
                                            <div class=\"row\">
                                                <div class=\"col-md-5\">
                                                    <div
                                                        class=\"subscribe-block\"
                                                    >
                                                        <div
                                                            class=\"subscrib-contant\"
                                                        >
                                                            <h4>
                                                                subscribe to
                                                                newsletter
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-7\">
                                                    <div
                                                        class=\"subscribe-block\"
                                                    >
                                                        <div
                                                            class=\"subscrib-contant\"
                                                        >
                                                            <div
                                                                class=\"input-group\"
                                                            >
                                                                <div
                                                                    class=\"input-group-prepend\"
                                                                >
                                                                    <span
                                                                        class=\"input-group-text\"
                                                                        ><i
                                                                            class=\"fa fa-envelope-o\"
                                                                        ></i
                                                                    ></span>
                                                                </div>
                                                                <input
                                                                    type=\"text\"
                                                                    class=\"form-control\"
                                                                    placeholder=\"your email\"
                                                                />
                                                                <div
                                                                    class=\"input-group-prepend\"
                                                                >
                                                                    <span
                                                                        class=\"input-group-text telly\"
                                                                        ><i
                                                                            class=\"fa fa-telegram\"
                                                                        ></i
                                                                    ></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-md-12\">
                                        <div class=\"account-right\">
                                            <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <div class=\"footer-box\">
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>my account</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >about
                                                                        us</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >contact
                                                                        us</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >terms &
                                                                        conditions</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >returns
                                                                        &
                                                                        exchanges</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >shipping
                                                                        &
                                                                        delivery</a
                                                                    >
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-3\">
                                                    <div class=\"footer-box\">
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>quick link</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >store
                                                                        location</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        my
                                                                        account</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        orders
                                                                        tracking</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\">
                                                                        size
                                                                        guide</a
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <a href=\"#\"
                                                                        >FAQ
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=\"col-md-5\">
                                                    <div
                                                        class=\"footer-box footer-contact-box\"
                                                    >
                                                        <div
                                                            class=\"footer-title\"
                                                        >
                                                            <h5>contact us</h5>
                                                        </div>
                                                        <div
                                                            class=\"footer-contant\"
                                                        >
                                                            <ul
                                                                class=\"contact-list\"
                                                            >
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-map-marker\"
                                                                    ></i
                                                                    ><span
                                                                        >big
                                                                        deal
                                                                        store
                                                                        demo
                                                                        store
                                                                        <br />
                                                                        <span>
                                                                            india-3654123</span
                                                                        ></span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-phone\"
                                                                    ></i
                                                                    ><span
                                                                        >call
                                                                        us:
                                                                        123-456-7898</span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-envelope-o\"
                                                                    ></i
                                                                    ><span
                                                                        >email
                                                                        us:
                                                                        support@bigdeal.com</span
                                                                    >
                                                                </li>
                                                                <li>
                                                                    <i
                                                                        class=\"fa fa-fax\"
                                                                    ></i
                                                                    ><span
                                                                        >fax
                                                                        123456</span
                                                                    >
                                                                </li>
                                                            </ul>
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
    <div class=\"app-link-block bg-transparent\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"app-link-bloc-contain app-link-bloc-contain-1\">
                    <div class=\"app-item-group\">
                        <div class=\"app-item\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/app/1.png\"
                                class=\"img-fluid\"
                                alt=\"app-banner\"
                            />
                        </div>
                        <div class=\"app-item\">
                            <img
                                src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/app/2.png\"
                                class=\"img-fluid\"
                                alt=\"app-banner\"
                            />
                        </div>
                    </div>
                    <div class=\"app-item-group\">
                        <div class=\"sosiyal-block\">
                            <h6>follow us</h6>
                            <ul class=\"sosiyal\">
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-facebook\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-google-plus\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-twitter\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-instagram\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"sub-footer\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"sub-footer-contain\">
                        <p>
                            <span>2018 - 19 </span>copy right by themeforest
                            powered by pixel strap
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/footer.htm", "");
    }
}
