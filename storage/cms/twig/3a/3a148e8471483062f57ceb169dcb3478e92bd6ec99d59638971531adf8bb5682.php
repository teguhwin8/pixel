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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/box-category.htm */
class __TwigTemplate_a0ac689df87aae4158916e16b804308c86779193f914b0ccac3dd2dc947a7277 extends \Twig\Template
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
        echo "<section class=\"box-category section-py-space\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col pl-0\">
                <div class=\"slide-10 no-arrow\">
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>under @99</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>free shipping</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>extra 10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>\$79 cashback</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>on sale</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>only \$49</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>under @150</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>save money</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/box-category.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"box-category section-py-space\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col pl-0\">
                <div class=\"slide-10 no-arrow\">
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>under @99</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>free shipping</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>extra 10% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>\$79 cashback</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>on sale</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>only \$49</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>under @150</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>save money</h4>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href=\"#\">
                            <div class=\"box-category-contain\">
                                <h4>80% off</h4>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/box-category.htm", "");
    }
}
