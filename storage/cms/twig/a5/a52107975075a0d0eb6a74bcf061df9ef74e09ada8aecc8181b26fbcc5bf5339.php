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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/testimonial.htm */
class __TwigTemplate_88ac15da874119aa05d3f9df13524113a0428686c74c8cba3e7a3dcd8e3b0683 extends \Twig\Template
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
        echo "<section class=\"testimonial testimonial-inverse\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/1.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/2.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/3.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
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
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/testimonial.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"testimonial testimonial-inverse\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"slide-1 no-arrow\">
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/1.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/2.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class=\"testimonial-contain\">
                            <div class=\"media\">
                                <div class=\"testimonial-img\">
                                    <img
                                        src=\"http://localhost/pixel/themes/pixel-template/assets/images/testimonial/3.jpg\"
                                        class=\"img-fluid rounded-circle\"
                                        alt=\"testimonial\"
                                    />
                                </div>
                                <div class=\"media-body\">
                                    <h5>mark jecno</h5>
                                    <p>
                                        Contrary to popular belief, Lorem Ipsum
                                        is not simply random text. It has roots
                                        in a piece of classical Latin literature
                                        from 45 BC, making it over 2000 years
                                        old. Richard McClintock, a Latin
                                        professor at Hampden-Sydney College in
                                        Virginia.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/testimonial.htm", "");
    }
}
