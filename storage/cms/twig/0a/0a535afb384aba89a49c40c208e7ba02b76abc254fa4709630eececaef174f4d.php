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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/instagram.htm */
class __TwigTemplate_52bb32122b8f44905586f0f59c4990de00e7b0ffe24404a9a5d42da9a28e3677 extends \Twig\Template
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
        echo "<section class=\"instagram\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col p-0\">
                <div class=\"insta-contant1 no-arrow\">
                    <div class=\"slide-7\">
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/7.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/8.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"insta-sub-contant1\">
                        <div class=\"insta-title\">
                            <h4><span>#</span>INSTAGRAM</h4>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/instagram.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"instagram\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col p-0\">
                <div class=\"insta-contant1 no-arrow\">
                    <div class=\"slide-7\">
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/1.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/2.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/3.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/4.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/5.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/6.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/7.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class=\"instagram-box\">
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/insta/8.jpg\"
                                    class=\"img-fluid\"
                                    alt=\"insta\"
                                />
                                <div class=\"insta-cover\">
                                    <i class=\"fa fa-instagram\"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"insta-sub-contant1\">
                        <div class=\"insta-title\">
                            <h4><span>#</span>INSTAGRAM</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/instagram.htm", "");
    }
}
