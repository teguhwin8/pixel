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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/checkout.htm */
class __TwigTemplate_d4b3861d59feb6e27e6fa1e5d84ea33b39f0eaebbc6717896be2947dcd97268d extends \Twig\Template
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
        echo "<section class=\"section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"checkout-page contact-page\">
            <div class=\"checkout-form\">
                <form>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                            <div class=\"checkout-title\">
                                <h3>Billing Details</h3>
                            </div>
                            <div class=\"theme-form\">
                                <div class=\"row check-out\">
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label>First Name</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label>Last Name</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\">Phone</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Email Address</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Country</label
                                        >
                                        <select>
                                            <option>India</option>
                                            <option>South Africa</option>
                                            <option>United State</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Address</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"Street address\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Town/City</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >State / County</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Postal Code</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-lg-12 col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <input
                                            type=\"checkbox\"
                                            name=\"shipping-option\"
                                            id=\"account-option\"
                                        />
                                        &ensp;
                                        <label for=\"account-option\"
                                            >Create An Account?</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                            <div
                                class=\"checkout-details theme-form section-big-mt-space\"
                            >
                                <div class=\"order-box\">
                                    <div class=\"title-box\">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class=\"qty\">
                                        <li>
                                            Pink Slim Shirt × 1
                                            <span>\$25.10</span>
                                        </li>
                                        <li>
                                            SLim Fit Jeans × 1
                                            <span>\$555.00</span>
                                        </li>
                                    </ul>
                                    <ul class=\"sub-total\">
                                        <li>
                                            Subtotal
                                            <span class=\"count\">\$380.10</span>
                                        </li>
                                        <li>
                                            Shipping
                                            <div class=\"shipping\">
                                                <div class=\"shopping-option\">
                                                    <input
                                                        type=\"checkbox\"
                                                        name=\"free-shipping\"
                                                        id=\"free-shipping\"
                                                    />
                                                    <label for=\"free-shipping\"
                                                        >Free Shipping</label
                                                    >
                                                </div>
                                                <div class=\"shopping-option\">
                                                    <input
                                                        type=\"checkbox\"
                                                        name=\"local-pickup\"
                                                        id=\"local-pickup\"
                                                    />
                                                    <label for=\"local-pickup\"
                                                        >Local Pickup</label
                                                    >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class=\"total\">
                                        <li>
                                            Total
                                            <span class=\"count\">\$620.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"payment-box\">
                                    <div class=\"upper-box\">
                                        <div class=\"payment-options\">
                                            <ul>
                                                <li>
                                                    <div class=\"radio-option\">
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-1\"
                                                            checked=\"checked\"
                                                        />
                                                        <label for=\"payment-1\"
                                                            >Check Payments<span
                                                                class=\"small-text\"
                                                                >Please send a
                                                                check to Store
                                                                Name, Store
                                                                Street, Store
                                                                Town, Store
                                                                State / County,
                                                                Store
                                                                Postcode.</span
                                                            ></label
                                                        >
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"radio-option\">
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-2\"
                                                        />
                                                        <label for=\"payment-2\"
                                                            >Cash On
                                                            Delivery<span
                                                                class=\"small-text\"
                                                                >Please send a
                                                                check to Store
                                                                Name, Store
                                                                Street, Store
                                                                Town, Store
                                                                State / County,
                                                                Store
                                                                Postcode.</span
                                                            ></label
                                                        >
                                                    </div>
                                                </li>
                                                <li>
                                                    <div
                                                        class=\"radio-option paypal\"
                                                    >
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-3\"
                                                        />
                                                        <label for=\"payment-3\"
                                                            >PayPal<span
                                                                class=\"image\"
                                                                ><img
                                                                    src=\"#\"
                                                                    alt=\"\" /></span
                                                        ></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn-normal btn\"
                                            >Place Order</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/checkout.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-big-py-space bg-light\">
    <div class=\"custom-container\">
        <div class=\"checkout-page contact-page\">
            <div class=\"checkout-form\">
                <form>
                    <div class=\"row\">
                        <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                            <div class=\"checkout-title\">
                                <h3>Billing Details</h3>
                            </div>
                            <div class=\"theme-form\">
                                <div class=\"row check-out\">
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label>First Name</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label>Last Name</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\">Phone</label>
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-6 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Email Address</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Country</label
                                        >
                                        <select>
                                            <option>India</option>
                                            <option>South Africa</option>
                                            <option>United State</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Address</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"Street address\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Town/City</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >State / County</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-md-12 col-sm-6 col-xs-12\"
                                    >
                                        <label class=\"field-label\"
                                            >Postal Code</label
                                        >
                                        <input
                                            type=\"text\"
                                            name=\"field-name\"
                                            value=\"\"
                                            placeholder=\"\"
                                        />
                                    </div>
                                    <div
                                        class=\"form-group col-lg-12 col-md-12 col-sm-12 col-xs-12\"
                                    >
                                        <input
                                            type=\"checkbox\"
                                            name=\"shipping-option\"
                                            id=\"account-option\"
                                        />
                                        &ensp;
                                        <label for=\"account-option\"
                                            >Create An Account?</label
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-6 col-sm-12 col-xs-12\">
                            <div
                                class=\"checkout-details theme-form section-big-mt-space\"
                            >
                                <div class=\"order-box\">
                                    <div class=\"title-box\">
                                        <div>Product <span>Total</span></div>
                                    </div>
                                    <ul class=\"qty\">
                                        <li>
                                            Pink Slim Shirt × 1
                                            <span>\$25.10</span>
                                        </li>
                                        <li>
                                            SLim Fit Jeans × 1
                                            <span>\$555.00</span>
                                        </li>
                                    </ul>
                                    <ul class=\"sub-total\">
                                        <li>
                                            Subtotal
                                            <span class=\"count\">\$380.10</span>
                                        </li>
                                        <li>
                                            Shipping
                                            <div class=\"shipping\">
                                                <div class=\"shopping-option\">
                                                    <input
                                                        type=\"checkbox\"
                                                        name=\"free-shipping\"
                                                        id=\"free-shipping\"
                                                    />
                                                    <label for=\"free-shipping\"
                                                        >Free Shipping</label
                                                    >
                                                </div>
                                                <div class=\"shopping-option\">
                                                    <input
                                                        type=\"checkbox\"
                                                        name=\"local-pickup\"
                                                        id=\"local-pickup\"
                                                    />
                                                    <label for=\"local-pickup\"
                                                        >Local Pickup</label
                                                    >
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <ul class=\"total\">
                                        <li>
                                            Total
                                            <span class=\"count\">\$620.00</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class=\"payment-box\">
                                    <div class=\"upper-box\">
                                        <div class=\"payment-options\">
                                            <ul>
                                                <li>
                                                    <div class=\"radio-option\">
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-1\"
                                                            checked=\"checked\"
                                                        />
                                                        <label for=\"payment-1\"
                                                            >Check Payments<span
                                                                class=\"small-text\"
                                                                >Please send a
                                                                check to Store
                                                                Name, Store
                                                                Street, Store
                                                                Town, Store
                                                                State / County,
                                                                Store
                                                                Postcode.</span
                                                            ></label
                                                        >
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class=\"radio-option\">
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-2\"
                                                        />
                                                        <label for=\"payment-2\"
                                                            >Cash On
                                                            Delivery<span
                                                                class=\"small-text\"
                                                                >Please send a
                                                                check to Store
                                                                Name, Store
                                                                Street, Store
                                                                Town, Store
                                                                State / County,
                                                                Store
                                                                Postcode.</span
                                                            ></label
                                                        >
                                                    </div>
                                                </li>
                                                <li>
                                                    <div
                                                        class=\"radio-option paypal\"
                                                    >
                                                        <input
                                                            type=\"radio\"
                                                            name=\"payment-group\"
                                                            id=\"payment-3\"
                                                        />
                                                        <label for=\"payment-3\"
                                                            >PayPal<span
                                                                class=\"image\"
                                                                ><img
                                                                    src=\"#\"
                                                                    alt=\"\" /></span
                                                        ></label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a href=\"#\" class=\"btn-normal btn\"
                                            >Place Order</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/checkout.htm", "");
    }
}
