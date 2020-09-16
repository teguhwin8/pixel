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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/tab-product.htm */
class __TwigTemplate_d86befe00050c734cb9a5e8fa1590e8021df614bb0d80d6109414220ddabd10a extends \Twig\Template
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
        echo "<section class=\"section-pt-space\">
    <div class=\"tab-product-main\">
        <div class=\"tab-prodcut-contain\">
            <ul class=\"tabs tab-title\">
                <li class=\"current\"><a href=\"tab-1\">fashion</a></li>
                <li class=\"\"><a href=\"tab-2\">electronic</a></li>
                <li class=\"\"><a href=\"tab-3\">footware</a></li>
                <li class=\"\"><a href=\"tab-4\">sports</a></li>
                <li class=\"\"><a href=\"tab-5\">toys</a></li>
                <li class=\"\"><a href=\"tab-6\">books</a></li>
            </ul>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/tab-product.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section-pt-space\">
    <div class=\"tab-product-main\">
        <div class=\"tab-prodcut-contain\">
            <ul class=\"tabs tab-title\">
                <li class=\"current\"><a href=\"tab-1\">fashion</a></li>
                <li class=\"\"><a href=\"tab-2\">electronic</a></li>
                <li class=\"\"><a href=\"tab-3\">footware</a></li>
                <li class=\"\"><a href=\"tab-4\">sports</a></li>
                <li class=\"\"><a href=\"tab-5\">toys</a></li>
                <li class=\"\"><a href=\"tab-6\">books</a></li>
            </ul>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/tab-product.htm", "");
    }
}
