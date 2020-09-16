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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/rounded-category.htm */
class __TwigTemplate_d4fe97579e096ed0d2c55debc83c575533a667d3d494082b29227d4a27721f98 extends \Twig\Template
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
        echo "<section class=\"rounded-category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"slide-6 no-arrow\">
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/1.png\"
                                        alt=\"category  \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">flower</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/2.png\"
                                        alt=\"category \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Furniture</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/3.png\"
                                        alt=\"category \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Bag</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/4.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Tools</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/5.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Grocery</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/6.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">camera</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/7.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">cardigans</div>
                                </div>
                            </a>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/rounded-category.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"rounded-category\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"slide-6 no-arrow\">
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/1.png\"
                                        alt=\"category  \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">flower</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/2.png\"
                                        alt=\"category \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Furniture</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/3.png\"
                                        alt=\"category \"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Bag</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/4.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Tools</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/5.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">Grocery</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/6.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">camera</div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class=\"category-contain\">
                            <a href=\"#\">
                                <div class=\"img-wrapper\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/layout-1/rounded-cat/7.png\"
                                        alt=\"category\"
                                        class=\"img-fluid\"
                                    />
                                </div>
                                <div>
                                    <div class=\"btn-rounded\">cardigans</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/rounded-category.htm", "");
    }
}
