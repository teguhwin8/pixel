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

/* C:\xampp2\htdocs\pixel/themes/pixel-template/partials/product/product-detail.htm */
class __TwigTemplate_8bc61ba8c3ba91fd749bb9ab94baea328273b0724adaa9c4b1d62bcfacb4535b extends \Twig\Template
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
        $tags = array("put" => 500);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['put'],
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
        echo "<div class=\"col-lg-9 col-sm-12 col-xs-12\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"filter-main-btn mb-2\">
                    <span class=\"filter-btn\"
                        ><i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                        filter</span
                    >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"product-slick\">
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-0\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-1\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-2\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/004.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-3\"
                        />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 p-0\">
                        <div class=\"slider-nav\">
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-0\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-1\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-2\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/004.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-3\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7 rtl-text\">
                <div class=\"product-right\">
                    <h2>Women Pink Shirt</h2>
                    <h4><del>\$459.00</del><span>55% off</span></h4>
                    <h3>\$32.96</h3>
                    <ul class=\"color-variant\">
                        <li class=\"bg-light0\"></li>
                        <li class=\"bg-light1\"></li>
                        <li class=\"bg-light2\"></li>
                    </ul>
                    <div class=\"product-description border-product\">
                        <h6 class=\"product-title size-text\">
                            select size
                            <span
                                ><a
                                    href=\"#\"
                                    data-toggle=\"modal\"
                                    data-target=\"#sizemodal\"
                                    >size chart</a
                                ></span
                            >
                        </h6>
                        <div
                            class=\"modal fade\"
                            id=\"sizemodal\"
                            tabindex=\"-1\"
                            role=\"dialog\"
                            aria-labelledby=\"exampleModalLabel\"
                            aria-hidden=\"true\"
                        >
                            <div
                                class=\"modal-dialog modal-dialog-centered\"
                                role=\"document\"
                            >
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5
                                            class=\"modal-title\"
                                            id=\"exampleModalLabel\"
                                        >
                                            Sheer Straight Kurta
                                        </h5>
                                        <button
                                            type=\"button\"
                                            class=\"close\"
                                            data-dismiss=\"modal\"
                                            aria-label=\"Close\"
                                        >
                                            <span aria-hidden=\"true\"
                                                >&times;</span
                                            >
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/size-chart.jpg\"
                                            alt=\"\"
                                            class=\"img-fluid\"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"size-box\">
                            <ul>
                                <li class=\"active\"><a href=\"#\">s</a></li>
                                <li><a href=\"#\">m</a></li>
                                <li><a href=\"#\">l</a></li>
                                <li><a href=\"#\">xl</a></li>
                            </ul>
                        </div>
                        <h6 class=\"product-title\">quantity</h6>
                        <div class=\"qty-box\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\"
                                    ><button
                                        type=\"button\"
                                        class=\"btn quantity-left-minus\"
                                        data-type=\"minus\"
                                        data-field=\"\"
                                    >
                                        <i class=\"ti-angle-left\"></i>
                                    </button>
                                </span>
                                <input
                                    type=\"text\"
                                    name=\"quantity\"
                                    class=\"form-control input-number\"
                                    value=\"1\"
                                />
                                <span class=\"input-group-prepend\"
                                    ><button
                                        type=\"button\"
                                        class=\"btn quantity-right-plus\"
                                        data-type=\"plus\"
                                        data-field=\"\"
                                    >
                                        <i class=\"ti-angle-right\"></i></button
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"product-buttons\">
                        <a
                            href=\"#\"
                            data-toggle=\"modal\"
                            data-target=\"#addtocart\"
                            class=\"btn btn-normal\"
                            >add to cart</a
                        >
                        <a href=\"#\" class=\"btn btn-normal\">buy now</a>
                    </div>
                    <div class=\"border-product\">
                        <h6 class=\"product-title\">product details</h6>
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam
                            rem aperiam eaque ipsa, quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta
                            sunt, explicabo. Nemo enim ipsam voluptatem,
                        </p>
                    </div>
                    <div class=\"border-product\">
                        <div class=\"product-icon\">
                            <ul class=\"product-social\">
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-facebook\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-google-plus\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-twitter\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-instagram\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                                </li>
                            </ul>
                            <form class=\"d-inline-block\">
                                <button class=\"wishlist-btn\">
                                    <i class=\"fa fa-heart\"></i
                                    ><span class=\"title-font\"
                                        >Add To WishList</span
                                    >
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class=\"border-product pb-0\">
                        <h6 class=\"product-title\">Time Reminder</h6>
                        <div class=\"timer\">
                            <p id=\"demo\">
                                <span
                                    >25 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Days</span> </span
                                ><span
                                    >22 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Hrs</span> </span
                                ><span
                                    >13 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Min</span> </span
                                ><span
                                    >57 <span class=\"timer-cal\">Sec</span></span
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"tab-product tab-exes creative-card creative-inner\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12\">
                <ul
                    class=\"nav nav-tabs nav-material\"
                    id=\"top-tab\"
                    role=\"tablist\"
                >
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link active\"
                            id=\"top-home-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-home\"
                            role=\"tab\"
                            aria-selected=\"true\"
                            ><i class=\"icofont icofont-ui-home\"></i
                            >Description</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"profile-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-profile\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-man-in-glasses\"></i
                            >Details</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"contact-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-contact\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-contacts\"></i>Video</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"review-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-review\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-contacts\"></i>Write
                            Review</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                </ul>
                <div class=\"tab-content nav-material\" id=\"top-tabContent\">
                    <div
                        class=\"tab-pane fade show active\"
                        id=\"top-home\"
                        role=\"tabpanel\"
                        aria-labelledby=\"top-home-tab\"
                    >
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing
                            software like Aldus PageMaker including versions of
                            Lorem Ipsum. Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also
                            the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the
                            1960s with the release of Letraset sheets containing
                            Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-profile\"
                        role=\"tabpanel\"
                        aria-labelledby=\"profile-top-tab\"
                    >
                        <p class=\"pl-0\">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing
                            software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                        </p>
                        <div class=\"single-product-tables\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Febric</td>
                                        <td>Chiffon</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Red</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Crepe printed</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Length</td>
                                        <td>50 Inches</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>S, M, L .XXL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-contact\"
                        role=\"tabpanel\"
                        aria-labelledby=\"contact-top-tab\"
                    >
                        <div class=\"mt-3 text-center\">
                            <iframe
                                width=\"560\"
                                height=\"315\"
                                src=\"https://www.youtube.com/embed/BUWzX78Ye_8\"
                                allow=\"autoplay; encrypted-media\"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-review\"
                        role=\"tabpanel\"
                        aria-labelledby=\"review-top-tab\"
                    >
                        <form class=\"theme-form\">
                            <div class=\"form-row\">
                                <div class=\"col-md-12\">
                                    <div class=\"media\">
                                        <label>Rating</label>
                                        <div class=\"media-body ml-3\">
                                            <div class=\"rating three-star\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"name\">Name</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"name\"
                                        placeholder=\"Enter Your name\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"email\">Email</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"email\"
                                        placeholder=\"Email\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"review\">Review Title</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"review\"
                                        placeholder=\"Enter your Review Subjects\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"review\">Review Title</label>
                                    <textarea
                                        class=\"form-control\"
                                        placeholder=\"Wrire Your Testimonial Here\"
                                        id=\"exampleFormControlTextarea1\"
                                        rows=\"6\"
                                    ></textarea>
                                </div>
                                <div class=\"col-md-12\">
                                    <button
                                        class=\"btn btn-normal\"
                                        type=\"submit\"
                                    >
                                        Submit YOur Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

";
        // line 500
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 501
        echo "<script src=\"http://localhost/pixel/themes/pixel-template/assets/js/jquery.elevatezoom.js\"></script>
";
        // line 500
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/product/product-detail.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 500,  565 => 501,  563 => 500,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-lg-9 col-sm-12 col-xs-12\">
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-xl-12\">
                <div class=\"filter-main-btn mb-2\">
                    <span class=\"filter-btn\"
                        ><i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                        filter</span
                    >
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-5\">
                <div class=\"product-slick\">
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-0\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-1\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-2\"
                        />
                    </div>
                    <div>
                        <img
                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/004.jpg\"
                            alt=\"\"
                            class=\"img-fluid image_zoom_cls-3\"
                        />
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-12 p-0\">
                        <div class=\"slider-nav\">
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/001.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-0\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/002.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-1\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/003.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-2\"
                                />
                            </div>
                            <div>
                                <img
                                    src=\"http://localhost/pixel/themes/pixel-template/assets/images/product-sidebar/004.jpg\"
                                    alt=\"\"
                                    class=\"img-fluid image_zoom_cls-3\"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7 rtl-text\">
                <div class=\"product-right\">
                    <h2>Women Pink Shirt</h2>
                    <h4><del>\$459.00</del><span>55% off</span></h4>
                    <h3>\$32.96</h3>
                    <ul class=\"color-variant\">
                        <li class=\"bg-light0\"></li>
                        <li class=\"bg-light1\"></li>
                        <li class=\"bg-light2\"></li>
                    </ul>
                    <div class=\"product-description border-product\">
                        <h6 class=\"product-title size-text\">
                            select size
                            <span
                                ><a
                                    href=\"#\"
                                    data-toggle=\"modal\"
                                    data-target=\"#sizemodal\"
                                    >size chart</a
                                ></span
                            >
                        </h6>
                        <div
                            class=\"modal fade\"
                            id=\"sizemodal\"
                            tabindex=\"-1\"
                            role=\"dialog\"
                            aria-labelledby=\"exampleModalLabel\"
                            aria-hidden=\"true\"
                        >
                            <div
                                class=\"modal-dialog modal-dialog-centered\"
                                role=\"document\"
                            >
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <h5
                                            class=\"modal-title\"
                                            id=\"exampleModalLabel\"
                                        >
                                            Sheer Straight Kurta
                                        </h5>
                                        <button
                                            type=\"button\"
                                            class=\"close\"
                                            data-dismiss=\"modal\"
                                            aria-label=\"Close\"
                                        >
                                            <span aria-hidden=\"true\"
                                                >&times;</span
                                            >
                                        </button>
                                    </div>
                                    <div class=\"modal-body\">
                                        <img
                                            src=\"http://localhost/pixel/themes/pixel-template/assets/images/size-chart.jpg\"
                                            alt=\"\"
                                            class=\"img-fluid\"
                                        />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"size-box\">
                            <ul>
                                <li class=\"active\"><a href=\"#\">s</a></li>
                                <li><a href=\"#\">m</a></li>
                                <li><a href=\"#\">l</a></li>
                                <li><a href=\"#\">xl</a></li>
                            </ul>
                        </div>
                        <h6 class=\"product-title\">quantity</h6>
                        <div class=\"qty-box\">
                            <div class=\"input-group\">
                                <span class=\"input-group-prepend\"
                                    ><button
                                        type=\"button\"
                                        class=\"btn quantity-left-minus\"
                                        data-type=\"minus\"
                                        data-field=\"\"
                                    >
                                        <i class=\"ti-angle-left\"></i>
                                    </button>
                                </span>
                                <input
                                    type=\"text\"
                                    name=\"quantity\"
                                    class=\"form-control input-number\"
                                    value=\"1\"
                                />
                                <span class=\"input-group-prepend\"
                                    ><button
                                        type=\"button\"
                                        class=\"btn quantity-right-plus\"
                                        data-type=\"plus\"
                                        data-field=\"\"
                                    >
                                        <i class=\"ti-angle-right\"></i></button
                                ></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"product-buttons\">
                        <a
                            href=\"#\"
                            data-toggle=\"modal\"
                            data-target=\"#addtocart\"
                            class=\"btn btn-normal\"
                            >add to cart</a
                        >
                        <a href=\"#\" class=\"btn btn-normal\">buy now</a>
                    </div>
                    <div class=\"border-product\">
                        <h6 class=\"product-title\">product details</h6>
                        <p>
                            Sed ut perspiciatis, unde omnis iste natus error sit
                            voluptatem accusantium doloremque laudantium, totam
                            rem aperiam eaque ipsa, quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta
                            sunt, explicabo. Nemo enim ipsam voluptatem,
                        </p>
                    </div>
                    <div class=\"border-product\">
                        <div class=\"product-icon\">
                            <ul class=\"product-social\">
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-facebook\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-google-plus\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-twitter\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"
                                        ><i class=\"fa fa-instagram\"></i
                                    ></a>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-rss\"></i></a>
                                </li>
                            </ul>
                            <form class=\"d-inline-block\">
                                <button class=\"wishlist-btn\">
                                    <i class=\"fa fa-heart\"></i
                                    ><span class=\"title-font\"
                                        >Add To WishList</span
                                    >
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class=\"border-product pb-0\">
                        <h6 class=\"product-title\">Time Reminder</h6>
                        <div class=\"timer\">
                            <p id=\"demo\">
                                <span
                                    >25 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Days</span> </span
                                ><span
                                    >22 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Hrs</span> </span
                                ><span
                                    >13 <span class=\"padding-l\">:</span>
                                    <span class=\"timer-cal\">Min</span> </span
                                ><span
                                    >57 <span class=\"timer-cal\">Sec</span></span
                                >
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class=\"tab-product tab-exes creative-card creative-inner\">
        <div class=\"row\">
            <div class=\"col-sm-12 col-lg-12\">
                <ul
                    class=\"nav nav-tabs nav-material\"
                    id=\"top-tab\"
                    role=\"tablist\"
                >
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link active\"
                            id=\"top-home-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-home\"
                            role=\"tab\"
                            aria-selected=\"true\"
                            ><i class=\"icofont icofont-ui-home\"></i
                            >Description</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"profile-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-profile\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-man-in-glasses\"></i
                            >Details</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"contact-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-contact\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-contacts\"></i>Video</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                    <li class=\"nav-item\">
                        <a
                            class=\"nav-link\"
                            id=\"review-top-tab\"
                            data-toggle=\"tab\"
                            href=\"#top-review\"
                            role=\"tab\"
                            aria-selected=\"false\"
                            ><i class=\"icofont icofont-contacts\"></i>Write
                            Review</a
                        >
                        <div class=\"material-border\"></div>
                    </li>
                </ul>
                <div class=\"tab-content nav-material\" id=\"top-tabContent\">
                    <div
                        class=\"tab-pane fade show active\"
                        id=\"top-home\"
                        role=\"tabpanel\"
                        aria-labelledby=\"top-home-tab\"
                    >
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing
                            software like Aldus PageMaker including versions of
                            Lorem Ipsum. Lorem Ipsum is simply dummy text of the
                            printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since
                            the 1500s, when an unknown printer took a galley of
                            type and scrambled it to make a type specimen book.
                            It has survived not only five centuries, but also
                            the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the
                            1960s with the release of Letraset sheets containing
                            Lorem Ipsum passages, and more recently with desktop
                            publishing software like Aldus PageMaker including
                            versions of Lorem Ipsum.
                        </p>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-profile\"
                        role=\"tabpanel\"
                        aria-labelledby=\"profile-top-tab\"
                    >
                        <p class=\"pl-0\">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been the
                            industry's standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and
                            scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap
                            into electronic typesetting, remaining essentially
                            unchanged. It was popularised in the 1960s with the
                            release of Letraset sheets containing Lorem Ipsum
                            passages, and more recently with desktop publishing
                            software like Aldus PageMaker including versions of
                            Lorem Ipsum.
                        </p>
                        <div class=\"single-product-tables\">
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Febric</td>
                                        <td>Chiffon</td>
                                    </tr>
                                    <tr>
                                        <td>Color</td>
                                        <td>Red</td>
                                    </tr>
                                    <tr>
                                        <td>Material</td>
                                        <td>Crepe printed</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Length</td>
                                        <td>50 Inches</td>
                                    </tr>
                                    <tr>
                                        <td>Size</td>
                                        <td>S, M, L .XXL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-contact\"
                        role=\"tabpanel\"
                        aria-labelledby=\"contact-top-tab\"
                    >
                        <div class=\"mt-3 text-center\">
                            <iframe
                                width=\"560\"
                                height=\"315\"
                                src=\"https://www.youtube.com/embed/BUWzX78Ye_8\"
                                allow=\"autoplay; encrypted-media\"
                                allowfullscreen
                            ></iframe>
                        </div>
                    </div>
                    <div
                        class=\"tab-pane fade\"
                        id=\"top-review\"
                        role=\"tabpanel\"
                        aria-labelledby=\"review-top-tab\"
                    >
                        <form class=\"theme-form\">
                            <div class=\"form-row\">
                                <div class=\"col-md-12\">
                                    <div class=\"media\">
                                        <label>Rating</label>
                                        <div class=\"media-body ml-3\">
                                            <div class=\"rating three-star\">
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"name\">Name</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"name\"
                                        placeholder=\"Enter Your name\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-6\">
                                    <label for=\"email\">Email</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"email\"
                                        placeholder=\"Email\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"review\">Review Title</label>
                                    <input
                                        type=\"text\"
                                        class=\"form-control\"
                                        id=\"review\"
                                        placeholder=\"Enter your Review Subjects\"
                                        required
                                    />
                                </div>
                                <div class=\"col-md-12\">
                                    <label for=\"review\">Review Title</label>
                                    <textarea
                                        class=\"form-control\"
                                        placeholder=\"Wrire Your Testimonial Here\"
                                        id=\"exampleFormControlTextarea1\"
                                        rows=\"6\"
                                    ></textarea>
                                </div>
                                <div class=\"col-md-12\">
                                    <button
                                        class=\"btn btn-normal\"
                                        type=\"submit\"
                                    >
                                        Submit YOur Review
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

{% put scripts %}
<script src=\"http://localhost/pixel/themes/pixel-template/assets/js/jquery.elevatezoom.js\"></script>
{% endput %}", "C:\\xampp2\\htdocs\\pixel/themes/pixel-template/partials/product/product-detail.htm", "");
    }
}
