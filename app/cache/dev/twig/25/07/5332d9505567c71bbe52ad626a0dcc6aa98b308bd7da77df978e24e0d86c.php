<?php

/* TunisieFeedsBundle:Default:header.html.twig */
class __TwigTemplate_25075332d9505567c71bbe52ad626a0dcc6aa98b308bd7da77df978e24e0d86c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav role=\"navigation\" class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button data-target=\"#bs-example-navbar-collapse-1\" data-toggle=\"collapse\" class=\"navbar-toggle collapsed\" type=\"button\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\" class=\"navbar-brand\">
                    <img width=\"120px\" src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/logo-tun.png"), "html", null, true);
        echo "\"  alt=\"tunisieactu\" />
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id=\"bs-example-navbar-collapse-1\" class=\"navbar-collapse collapse\" aria-expanded=\"false\" style=\"height: 1px;\">
                <ul class=\"nav navbar-nav\">
                   <li id=\"menuHome\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\" style=\"font-size:19px;\" title=\"Home\"><i class=\"icon-home\"></i></a></li>
           
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/shemsFm/شمس%20أف\">شمس أف</a></li>
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/hakaekonline/حقائق%20أون%20لاين\">حقائق أون لاين</a></li>
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/mosaiquefm/موزاييك\">موزاييك</a></li>
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/alarabiya/العربية\">العربية</a></li>
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/capradio/كاب%20أف%20أم\">كاب أف أم</a></li>

                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/jarida/aljarida/الجريدة\">الجريدة</a></li>
                    <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/jarida/alHadath/المصدر\">المصدر</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div id=\"adsTop\" class=\"nav-collapse\">
                    <div id=\"bsap_1284433\" class=\"bsarocks bsap_617a5997e85f500dd668cb6b9a8bf3a4\"></div>\t\t\t\t
                    <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t\t<!-- header -->
\t\t\t<ins class=\"adsbygoogle\"
\t\t\t     style=\"display:inline-block;width:728px;height:90px\"
\t\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t\t     data-ad-slot=\"3018839973\"></ins>
\t\t\t<script>
\t\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t\t</script>
                    <div class=\"clear\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "TunisieFeedsBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  35 => 12,  31 => 11,  19 => 1,);
    }
}
