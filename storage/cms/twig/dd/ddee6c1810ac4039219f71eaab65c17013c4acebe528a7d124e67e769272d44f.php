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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/collection-banner-3.htm */
class __TwigTemplate_db67d897323e8ceefb77361870384d5a79811b934e72fc19a629263f0600f842 extends \Twig\Template
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
        echo "<section class=\"collection-banner section-py-space\">
    <div class=\"container-fluid\">
        <div class=\"row collection2\">
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/4.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>Leather</h3>
                            <h4>new bag</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/5.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>nike</h3>
                            <h4>breeze</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/6.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>Printing 3D</h3>
                            <h4>USB moon</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner-3.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"collection-banner section-py-space\">
    <div class=\"container-fluid\">
        <div class=\"row collection2\">
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/4.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>Leather</h3>
                            <h4>new bag</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/5.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>nike</h3>
                            <h4>breeze</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"collection-banner-main banner-1 p-left\">
                    <div class=\"collection-img\">
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-2/collection-banner/6.jpg\"
                            class=\"img-fluid bg-img\"
                            alt=\"banner\"
                        />
                    </div>
                    <div class=\"collection-banner-contain\">
                        <div>
                            <h3>Printing 3D</h3>
                            <h4>USB moon</h4>
                            <div class=\"shop\">
                                <a> shop now </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/collection-banner-3.htm", "");
    }
}
