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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/layouts/default.htm */
class __TwigTemplate_9c2e53522675c8d384aa5642aec3cb583570b55ad51c42fc0c6c44a3884be61e extends \Twig\Template
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
        $tags = array("partial" => 27, "page" => 31, "scripts" => 47);
        $filters = array("theme" => 12, "escape" => 21);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'page', 'scripts'],
                ['theme', 'escape'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
        />
        <link href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick.css");
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/slick-theme.css");
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"/>            
        <link rel=\"stylesheet\" href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/color2.css");
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/themify.css");
        echo "\" media=\"screen\" id=\"color\" />



        <title>";
        // line 21
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "title", [], "any", false, false, true, 21), 21, $this->source), "html", null, true);
        echo " - Pixel Computer</title>
    </head>
    <body>
        
        <header>
            <div class=\"mobile-fix-option\"></div>
            ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/top-header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        echo " 
            ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/layout-header2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/category-header2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "        </header>
        ";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 32
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("goto-top"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 34
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("add-to-cart-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("my-account-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 36
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("add-to-wishlist-bar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 37
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("notification-product"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 38
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("quick-view-modal"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
        <script src=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/menu.js");
        echo "\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js\"></script>
        <script src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap-notify.min.js");
        echo "\"></script>
        <script src=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/modal.js");
        echo "\"></script>
        <script src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/script.js");
        echo "?v=06\"></script>
        ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 48
        echo "    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 48,  185 => 47,  181 => 46,  177 => 45,  173 => 44,  168 => 42,  163 => 39,  158 => 38,  153 => 37,  148 => 36,  143 => 35,  138 => 34,  133 => 33,  128 => 32,  126 => 31,  123 => 30,  118 => 29,  114 => 28,  108 => 27,  99 => 21,  92 => 17,  88 => 16,  83 => 14,  79 => 13,  75 => 12,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta
            name=\"viewport\"
            content=\"width=device-width, initial-scale=1, shrink-to-fit=no\"
        />
        <link href=\"https://fonts.googleapis.com/css?family=PT+Sans:400,700&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css?family=Raleway&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\"/>
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick.css'|theme }}\" />
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/slick-theme.css'|theme }}\" />
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.css'|theme }}\" />
        <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\"/>            
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/color2.css'|theme }}\" />
        <link rel=\"stylesheet\" href=\"{{ 'assets/css/themify.css'|theme }}\" media=\"screen\" id=\"color\" />



        <title>{{ this.page.title }} - Pixel Computer</title>
    </head>
    <body>
        
        <header>
            <div class=\"mobile-fix-option\"></div>
            {% partial 'header/top-header' %} 
            {% partial 'header/layout-header2' %}
            {% partial 'header/category-header2' %}
        </header>
        {% page %}
        {% partial 'footer' %}
        {% partial 'goto-top' %}
        {% partial 'add-to-cart-bar' %}
        {% partial 'my-account-bar' %}
        {% partial 'add-to-wishlist-bar' %}
        {% partial 'notification-product' %}
        {% partial 'quick-view-modal' %}
        <script src=\"https://code.jquery.com/jquery-3.5.1.min.js\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js\"></script>
        <script src=\"{{ 'assets/js/menu.js'|theme }}\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.js\"></script>
        <script src=\"{{ 'assets/js/bootstrap-notify.min.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/modal.js'|theme }}\"></script>
        <script src=\"{{ 'assets/js/script.js'|theme }}?v=06\"></script>
        {% scripts %}
    </body>
</html>", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/layouts/default.htm", "");
    }
}
