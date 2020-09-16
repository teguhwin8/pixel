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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/newsletter.htm */
class __TwigTemplate_b81370cfd05adc58626dd0965f9e537f93128dda110891b9430e8300ddd8c155 extends \Twig\Template
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
        echo "<div
    class=\"modal fade bd-example-modal-lg theme-modal\"
    id=\"exampleModal\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <div class=\"news-latter\">
                    <div class=\"modal-bg\">
                        <div class=\"offer-content\">
                            <div>
                                <button
                                    type=\"button\"
                                    class=\"close\"
                                    data-dismiss=\"modal\"
                                    aria-label=\"Close\"
                                >
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                <h2>newsletter</h2>
                                <p>
                                    Subscribe to our website mailling list
                                    <br />
                                    and get a Offer, Just for you!
                                </p>
                                <form
                                    action=\"https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda\"
                                    class=\"auth-form needs-validation\"
                                    method=\"post\"
                                    id=\"mc-embedded-subscribe-form\"
                                    name=\"mc-embedded-subscribe-form\"
                                    target=\"_blank\"
                                >
                                    <div class=\"form-group mx-sm-3\">
                                        <input
                                            type=\"email\"
                                            class=\"form-control\"
                                            name=\"EMAIL\"
                                            id=\"mce-EMAIL\"
                                            placeholder=\"Enter your email\"
                                            required=\"required\"
                                        />
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-theme btn-normal btn-sm\"
                                            id=\"mc-submit\"
                                        >
                                            subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/newsletter.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div
    class=\"modal fade bd-example-modal-lg theme-modal\"
    id=\"exampleModal\"
    tabindex=\"-1\"
    role=\"dialog\"
    aria-hidden=\"true\"
>
    <div class=\"modal-dialog modal-lg modal-dialog-centered\" role=\"document\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <div class=\"news-latter\">
                    <div class=\"modal-bg\">
                        <div class=\"offer-content\">
                            <div>
                                <button
                                    type=\"button\"
                                    class=\"close\"
                                    data-dismiss=\"modal\"
                                    aria-label=\"Close\"
                                >
                                    <span aria-hidden=\"true\">×</span>
                                </button>
                                <h2>newsletter</h2>
                                <p>
                                    Subscribe to our website mailling list
                                    <br />
                                    and get a Offer, Just for you!
                                </p>
                                <form
                                    action=\"https://pixelstrap.us19.list-manage.com/subscribe/post?u=5a128856334b598b395f1fc9b&amp;id=082f74cbda\"
                                    class=\"auth-form needs-validation\"
                                    method=\"post\"
                                    id=\"mc-embedded-subscribe-form\"
                                    name=\"mc-embedded-subscribe-form\"
                                    target=\"_blank\"
                                >
                                    <div class=\"form-group mx-sm-3\">
                                        <input
                                            type=\"email\"
                                            class=\"form-control\"
                                            name=\"EMAIL\"
                                            id=\"mce-EMAIL\"
                                            placeholder=\"Enter your email\"
                                            required=\"required\"
                                        />
                                        <button
                                            type=\"submit\"
                                            class=\"btn btn-theme btn-normal btn-sm\"
                                            id=\"mc-submit\"
                                        >
                                            subscribe
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/newsletter.htm", "");
    }
}
