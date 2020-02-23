<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/sales_zymphonies_theme/templates/layout/page.html.twig */
class __TwigTemplate_11430e94c510d2a0a0d64c3607714cb79cf682a7c7ef21710ba3b96808abf0fd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 62, "for" => 133];
        $filters = ["escape" => 70, "raw" => 134, "date" => 449];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for'],
                ['escape', 'raw', 'date'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

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
        // line 60
        echo "

";
        // line 62
        if (($this->getAttribute(($context["page"] ?? null), "contact_email", []) || $this->getAttribute(($context["page"] ?? null), "top_menu", []))) {
            // line 63
            echo "  <div class=\"top-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Contact Phone & Email -->
        <div class=\"col-sm-6\">
          ";
            // line 69
            if ($this->getAttribute(($context["page"] ?? null), "contact_email", [])) {
                // line 70
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "contact_email", [])), "html", null, true);
                echo "
          ";
            }
            // line 72
            echo "        </div>
        <!-- End: Contact Phone & Email -->

        <!-- Start: Top menu -->
        <div class=\"col-sm-6\">
          ";
            // line 77
            if ($this->getAttribute(($context["page"] ?? null), "top_menu", [])) {
                // line 78
                echo "            ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "top_menu", [])), "html", null, true);
                echo "
          ";
            }
            // line 80
            echo "        </div>
        <!-- End: Top menu -->

      </div>
    </div>
  </div>
";
        }
        // line 87
        echo "
<header class=\"main-header\">
  <nav class=\"navbar topnav navbar-default\" role=\"navigation\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Header -->
        <div class=\"navbar-header col-md-2\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#main-navigation\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 101
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 102
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
          ";
        }
        // line 104
        echo "        </div>
        <!-- End: Header -->

        <!-- Start: Main menu -->
        <div class=\"col-md-8\">
          ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 110
            echo "            ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "
          ";
        }
        // line 112
        echo "        </div>
        <!-- End: Main menu -->

        <!-- Start: Search -->
        <div class=\"col-md-2\">
            ";
        // line 117
        if ($this->getAttribute(($context["page"] ?? null), "search", [])) {
            // line 118
            echo "              ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "search", [])), "html", null, true);
            echo "
            ";
        }
        // line 119
        echo "        
        </div>
        <!-- End: Search -->

        </div>
      </div>
    </nav>
</header>


<!-- Start: Slider -->
  ";
        // line 130
        if ((($context["is_front"] ?? null) && ($context["show_slideshow"] ?? null))) {
            // line 131
            echo "    <div class=\"flexslider\">
      <ul class=\"slides\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["slider_content"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["slider_contents"]) {
                // line 134
                echo "          ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed($context["slider_contents"]));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slider_contents'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 136
            echo "      </ul>
    </div>
  ";
        }
        // line 139
        echo "<!-- End: Slider -->


<!-- Start: Testimonials -->
  ";
        // line 143
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "testimonials", []))) {
            // line 144
            echo "    <div class=\"testimonials-wrap\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 148
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "testimonials", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 154
        echo "<!--End: Testimonials -->


<!-- Start: Home page message -->
  ";
        // line 158
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "homepagemessage", []))) {
            // line 159
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 162
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "homepagemessage", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 167
        echo "<!--End: Home page message -->


<!-- Start: Highlight region -->
  ";
        // line 171
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 172
            echo "    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
            // line 175
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
        </div>
      </div>
    </div>
  ";
        }
        // line 180
        echo "<!-- End: Highlight region -->


<!-- Start Top Widgets -->
";
        // line 184
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "topwidget_first", []) || $this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) || $this->getAttribute(($context["page"] ?? null), "topwidget_third", [])))) {
            // line 185
            echo "  <div class=\"topwidget\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Top widget first -->          
        ";
            // line 190
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])) {
                // line 191
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 192
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 194
            echo "          
        <!-- End: Top widget first --> 

        <!-- Start: Top widget second -->          
        ";
            // line 198
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])) {
                // line 199
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 200
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 202
            echo "          
        <!-- End: Top widget second --> 
        
        <!-- Start: Top widget third -->         
        ";
            // line 206
            if ($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])) {
                // line 207
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["topwidget_third_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 208
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "topwidget_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 210
            echo "          
        <!-- End: Top widget third --> 

      </div>
    </div>
  </div>
";
        }
        // line 217
        echo "<!-- End: Top Widgets -->


<!-- Start: Page title -->
";
        // line 221
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 222
            echo "  <div id=\"page-title\">
    <div id=\"page-title-inner\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            ";
            // line 227
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 234
        echo "<!-- End: Page title -- >


<!-- Start: Content Layout -->
<div id=\"wrapper\">  
  <div class=\"container\">
    
    <!-- Start: Content top -->
      ";
        // line 242
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 243
            echo "        <div class=\"row\">
          ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
        </div>
      ";
        }
        // line 247
        echo "    <!-- End: Content top -->
    
    <!-- Start: Breadcrumb -->
    ";
        // line 250
        if ( !($context["is_front"] ?? null)) {
            // line 251
            echo "      <div class=\"row\">
        <div class=\"col-md-12\">";
            // line 252
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "</div>
      </div>
    ";
        }
        // line 255
        echo "    <!-- End: Breadcrumb -->

    <div class=\"row layout\">

      <!--- Start: Left SideBar -->
      ";
        // line 260
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 261
            echo "        <div class=\"sidebar\" >
          <div class = ";
            // line 262
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
            echo " >
            ";
            // line 263
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 267
        echo "      <!-- End Left SideBar -->

      <!--- Start Content -->
      ";
        // line 270
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 271
            echo "        <div class=\"content_layout\">
          <div class=";
            // line 272
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 273
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 277
        echo "      <!-- End: Content -->

      <!-- Start: Right SideBar -->
      ";
        // line 280
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 281
            echo "        <div class=\"sidebar\">
          <div class=";
            // line 282
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
            echo ">
            ";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
          </div>
        </div>
      ";
        }
        // line 287
        echo "      <!-- End: Right SideBar -->
      
    </div>
    <!--End: Content -->

  </div>
</div>
<!-- End: Content Layout -->


<!-- Start: Address -->
  ";
        // line 298
        if ((($context["is_front"] ?? null) && $this->getAttribute(($context["page"] ?? null), "address", []))) {
            // line 299
            echo "    <div class=\"address-wrap\">
      ";
            // line 300
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "address", [])), "html", null, true);
            echo "
    </div>
  ";
        }
        // line 303
        echo "<!--End: Address -->


<!-- Start: Bottom Widgets-->
";
        // line 307
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "bottom_third", [])))) {
            // line 308
            echo "  <div class=\"bottom-widgets\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Bottom First -->          
        ";
            // line 313
            if ($this->getAttribute(($context["page"] ?? null), "bottom_first", [])) {
                // line 314
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 315
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 317
            echo "          
        <!-- End: Bottom First -->

        <!-- Start: Bottom Second -->
        ";
            // line 321
            if ($this->getAttribute(($context["page"] ?? null), "bottom_second", [])) {
                // line 322
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 323
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 325
            echo "          
        <!-- End: Bottom Second -->

        <!-- Start: Bottom third -->          
        ";
            // line 329
            if ($this->getAttribute(($context["page"] ?? null), "bottom_third", [])) {
                // line 330
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 331
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 333
            echo "          
        <!-- End: Bottom Third -->

        <!-- Start: Bottom Forth -->
        ";
            // line 337
            if ($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])) {
                // line 338
                echo "        <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["bottom_class"] ?? null)), "html", null, true);
                echo ">
          ";
                // line 339
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "bottom_forth", [])), "html", null, true);
                echo "
        </div>
        ";
            }
            // line 342
            echo "        <!-- End: Bottom Forth -->

      </div>
    </div>
  </div>
";
        }
        // line 348
        echo "<!-- End: Bottom Widgets-->


<!-- Start: Footer -->
";
        // line 352
        if ((($context["is_front"] ?? null) && (($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])))) {
            // line 353
            echo "  <div class=\"footerwidget\">
    <div class=\"container\">      
      <div class=\"row\">

        <!-- Start: Footer First -->
        ";
            // line 358
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 359
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 360
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 363
            echo "        <!-- End: Footer First -->

        <!-- Start :Footer Second -->
        ";
            // line 366
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 367
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 368
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 371
            echo "        <!-- End: Footer Second -->

        <!-- Start: Footer third -->
        ";
            // line 374
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 375
                echo "          <div class = ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_class"] ?? null)), "html", null, true);
                echo ">
            ";
                // line 376
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 379
            echo "        <!-- End: Footer Third -->

      </div>
    </div>
  </div>
";
        }
        // line 385
        echo "<!--End: Footer -->


<!-- Start: Google map -->
";
        // line 389
        if ($this->getAttribute(($context["page"] ?? null), "google_map", [])) {
            // line 390
            echo "  <div class=\"google_map\">
    ";
            // line 391
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "google_map", [])), "html", null, true);
            echo "
  </div>
";
        }
        // line 394
        echo "<!-- End: Google map -->


<!-- Start: Footer Menu -->
";
        // line 398
        if ($this->getAttribute(($context["page"] ?? null), "footer_menu", [])) {
            // line 399
            echo "  <div class=\"footer-menu\">
    <div class=\"container\">
      <div class=\"row\">

        <!-- Start: Footer Menu -->
        <div class=\"col-sm-6\">
          ";
            // line 405
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_menu", [])), "html", null, true);
            echo "
        </div>
        <!-- End: Footer Menu -->

        <!-- Start: Social media links -->
        ";
            // line 410
            if (($context["show_social_icon"] ?? null)) {
                // line 411
                echo "          <div class=\"col-sm-6\">
            <div class=\"social-media\">
              ";
                // line 413
                if (($context["facebook_url"] ?? null)) {
                    // line 414
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["facebook_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"facebook\" target=\"_blank\" ><i class=\"fa fa-facebook\"></i></a>
              ";
                }
                // line 416
                echo "              ";
                if (($context["google_plus_url"] ?? null)) {
                    // line 417
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["google_plus_url"] ?? null)), "html", null, true);
                    echo "\"  class=\"google-plus\" target=\"_blank\" ><i class=\"fa fa-google-plus\"></i></a>
              ";
                }
                // line 419
                echo "              ";
                if (($context["twitter_url"] ?? null)) {
                    // line 420
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["twitter_url"] ?? null)), "html", null, true);
                    echo "\" class=\"twitter\" target=\"_blank\" ><i class=\"fa fa-twitter\"></i></a>
              ";
                }
                // line 422
                echo "              ";
                if (($context["linkedin_url"] ?? null)) {
                    // line 423
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["linkedin_url"] ?? null)), "html", null, true);
                    echo "\" class=\"linkedin\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
              ";
                }
                // line 425
                echo "              ";
                if (($context["pinterest_url"] ?? null)) {
                    // line 426
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pinterest_url"] ?? null)), "html", null, true);
                    echo "\" class=\"pinterest\" target=\"_blank\" ><i class=\"fa fa-pinterest\"></i></a>
              ";
                }
                // line 428
                echo "              ";
                if (($context["rss_url"] ?? null)) {
                    // line 429
                    echo "                <a href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rss_url"] ?? null)), "html", null, true);
                    echo "\" class=\"rss\" target=\"_blank\" ><i class=\"fa fa-rss\"></i></a>
              ";
                }
                // line 431
                echo "            </div>
          </div>
        ";
            }
            // line 434
            echo "        <!-- End: Social media links -->

      </div>
    </div>
  </div>
";
        }
        // line 440
        echo "<!-- End: Footer Menu -->


<div class=\"copyright\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Start: Copyright -->
      <div class=\"col-sm-6\">
        <p>Copyright © ";
        // line 449
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo ". All rights reserved.</p>
      </div>
      <!-- End: Copyright -->

      <!-- Start: Credit link -->
      ";
        // line 454
        if (($context["show_credit_link"] ?? null)) {
            // line 455
            echo "        <div class=\"col-sm-6\">
          <p class=\"credit-link\">Developed By <a href=\"http://shaktik.info\" target=\"_blank\">Shaktik</a></p>
        </div>
      ";
        }
        // line 459
        echo "      <!-- End: Credit link -->
      
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/sales_zymphonies_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  788 => 459,  782 => 455,  780 => 454,  772 => 449,  761 => 440,  753 => 434,  748 => 431,  742 => 429,  739 => 428,  733 => 426,  730 => 425,  724 => 423,  721 => 422,  715 => 420,  712 => 419,  706 => 417,  703 => 416,  697 => 414,  695 => 413,  691 => 411,  689 => 410,  681 => 405,  673 => 399,  671 => 398,  665 => 394,  659 => 391,  656 => 390,  654 => 389,  648 => 385,  640 => 379,  634 => 376,  629 => 375,  627 => 374,  622 => 371,  616 => 368,  611 => 367,  609 => 366,  604 => 363,  598 => 360,  593 => 359,  591 => 358,  584 => 353,  582 => 352,  576 => 348,  568 => 342,  562 => 339,  557 => 338,  555 => 337,  549 => 333,  543 => 331,  538 => 330,  536 => 329,  530 => 325,  524 => 323,  519 => 322,  517 => 321,  511 => 317,  505 => 315,  500 => 314,  498 => 313,  491 => 308,  489 => 307,  483 => 303,  477 => 300,  474 => 299,  472 => 298,  459 => 287,  452 => 283,  448 => 282,  445 => 281,  443 => 280,  438 => 277,  431 => 273,  427 => 272,  424 => 271,  422 => 270,  417 => 267,  410 => 263,  406 => 262,  403 => 261,  401 => 260,  394 => 255,  388 => 252,  385 => 251,  383 => 250,  378 => 247,  372 => 244,  369 => 243,  367 => 242,  357 => 234,  347 => 227,  340 => 222,  338 => 221,  332 => 217,  323 => 210,  317 => 208,  312 => 207,  310 => 206,  304 => 202,  298 => 200,  293 => 199,  291 => 198,  285 => 194,  279 => 192,  274 => 191,  272 => 190,  265 => 185,  263 => 184,  257 => 180,  249 => 175,  244 => 172,  242 => 171,  236 => 167,  228 => 162,  223 => 159,  221 => 158,  215 => 154,  206 => 148,  200 => 144,  198 => 143,  192 => 139,  187 => 136,  178 => 134,  174 => 133,  170 => 131,  168 => 130,  155 => 119,  149 => 118,  147 => 117,  140 => 112,  134 => 110,  132 => 109,  125 => 104,  119 => 102,  117 => 101,  101 => 87,  92 => 80,  86 => 78,  84 => 77,  77 => 72,  71 => 70,  69 => 69,  61 => 63,  59 => 62,  55 => 60,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/sales_zymphonies_theme/templates/layout/page.html.twig", "/var/www/html/sunsona/themes/sales_zymphonies_theme/templates/layout/page.html.twig");
    }
}
