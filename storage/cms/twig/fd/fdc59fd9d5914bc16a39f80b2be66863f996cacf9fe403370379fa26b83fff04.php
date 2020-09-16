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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/my-account-bar.htm */
class __TwigTemplate_87f6863ac3ffa235097004f5c86c054d675316aea0877f6b8378dab5b97fe89b extends \Twig\Template
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
        echo "<div id=\"myAccount\" class=\"add_to_cart right account-bar\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeAccount()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my account</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeAccount()\">
                    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>
        <form class=\"theme-form\">
            <div class=\"form-group\">
                <label for=\"email\">Email</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    id=\"email\"
                    placeholder=\"Email\"
                    required=\"\"
                />
            </div>
            <div class=\"form-group\">
                <label for=\"review\">Password</label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    id=\"review\"
                    placeholder=\"Enter your password\"
                    required=\"\"
                />
            </div>
            <div class=\"form-group\">
                <a href=\"#\" class=\"btn btn-rounded btn-block\">Login</a>
            </div>
            <div>
                <h5 class=\"forget-class\">
                    <a href=\"forget-pwd.html\" class=\"d-block\"
                        >forget password?</a
                    >
                </h5>
                <h6 class=\"forget-class\">
                    <a href=\"register.html\" class=\"d-block\"
                        >new to store? Signup now</a
                    >
                </h6>
            </div>
        </form>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/my-account-bar.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"myAccount\" class=\"add_to_cart right account-bar\">
    <a href=\"javascript:void(0)\" class=\"overlay\" onclick=\"closeAccount()\"></a>
    <div class=\"cart-inner\">
        <div class=\"cart_top\">
            <h3>my account</h3>
            <div class=\"close-cart\">
                <a href=\"javascript:void(0)\" onclick=\"closeAccount()\">
                    <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
                </a>
            </div>
        </div>
        <form class=\"theme-form\">
            <div class=\"form-group\">
                <label for=\"email\">Email</label>
                <input
                    type=\"text\"
                    class=\"form-control\"
                    id=\"email\"
                    placeholder=\"Email\"
                    required=\"\"
                />
            </div>
            <div class=\"form-group\">
                <label for=\"review\">Password</label>
                <input
                    type=\"password\"
                    class=\"form-control\"
                    id=\"review\"
                    placeholder=\"Enter your password\"
                    required=\"\"
                />
            </div>
            <div class=\"form-group\">
                <a href=\"#\" class=\"btn btn-rounded btn-block\">Login</a>
            </div>
            <div>
                <h5 class=\"forget-class\">
                    <a href=\"forget-pwd.html\" class=\"d-block\"
                        >forget password?</a
                    >
                </h5>
                <h6 class=\"forget-class\">
                    <a href=\"register.html\" class=\"d-block\"
                        >new to store? Signup now</a
                    >
                </h6>
            </div>
        </form>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/my-account-bar.htm", "");
    }
}
