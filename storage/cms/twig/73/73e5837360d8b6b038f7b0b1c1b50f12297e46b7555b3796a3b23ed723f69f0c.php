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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/notification-product.htm */
class __TwigTemplate_8115274fb7ec3153e6df981e386306c609e7ea163f6037e77e18d26f9a18b95d extends \Twig\Template
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
        echo "<div class=\"product-notification\" id=\"dismiss\">
    <span onclick=\"dismiss();\" class=\"close\" aria-hidden=\"true\">×</span>
    <div class=\"media\">
        <img
            class=\"mr-2\"
            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
            alt=\"Generic placeholder image\"
        />
        <div class=\"media-body\">
            <h5 class=\"mt-0 mb-1\">Latest trending</h5>
            Cras sit amet nibh libero, in gravida nulla.
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/notification-product.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"product-notification\" id=\"dismiss\">
    <span onclick=\"dismiss();\" class=\"close\" aria-hidden=\"true\">×</span>
    <div class=\"media\">
        <img
            class=\"mr-2\"
            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/product/5.jpg\"
            alt=\"Generic placeholder image\"
        />
        <div class=\"media-body\">
            <h5 class=\"mt-0 mb-1\">Latest trending</h5>
            Cras sit amet nibh libero, in gravida nulla.
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/notification-product.htm", "");
    }
}
