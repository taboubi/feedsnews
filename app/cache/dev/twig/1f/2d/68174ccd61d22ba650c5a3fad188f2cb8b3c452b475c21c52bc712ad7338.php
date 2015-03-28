<?php

/* TunisieFeedsBundle:Default:header.html.twig */
class __TwigTemplate_1f2d68174ccd61d22ba650c5a3fad188f2cb8b3c452b475c21c52bc712ad7338 extends Twig_Template
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
        echo "<div class=\"navbar navbar-inverse\" style=\"margin-bottom:0; border-bottom:1px solid #555555; \" id=\"head\">
    <div class=\"navbar-inner\" style=\"border-radius:0;height: 97px;padding:5px 5px 0 10px;\">
        <div class=\"page-container\">
            <div class=\"row-fluid\">
                <div class=\"left\"><a class=\"\"  href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\"><img width=\"120px\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/logo-tun.png"), "html", null, true);
        echo "\"  alt=\"tunisieactu\" /></a></div>                
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
                </div>   
                <div class=\"right\" style=\"padding-top: 12px;\"><img width=\"70px\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/logo.png"), "html", null, true);
        echo "\" class=\"img-circle\" alt=\"tunisieactu\" /></div>
            </div>            
        </div>
    </div>
</div>

<div class=\"navbar navbar-inverse\" style=\"margin-bottom: 0; background-color:#333;background-image:none; \" id=\"menujQ\">
    <div class=\"navbar-inner page-container\" style=\"border-radius:0; background-color:#333; background-image:none;\">               
        <a class=\"btn btn-navbar collapsed\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        </a>
        <div class=\"nav-collapse navbar-inverse-collapse collapse\" style=\"height: 0px;\">
        <ul class=\"nav\" id=\"mainMenu\">
            <li id=\"menuHome\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\" style=\"font-size:19px;\" title=\"Home\"><i class=\"icon-home\"></i></a></li>
           
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/shemsFm/شمس%20أف\">شمس أف</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/hakaekonline/حقائق%20أون%20لاين\">حقائق أون لاين</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/mosaiquefm/موزاييك\">موزاييك</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/alarabiya/العربية\">العربية</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/capradio/كاب%20أف%20أم\">كاب أف أم</a></li>
            
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/jarida/aljarida/الجريدة\">الجريدة</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/jarida/alHadath/المصدر\">المصدر</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/tunisnews/tunisnews\">tunisnews</a></li>
            <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/tunimedia/tunimedia\">tunimedia</a></li>
             <li ><a rel=\"tag\" href=\"http://www.tunisieactu.net/category/feed/tunisien/tunisien\">tunisien</a></li>
            </ul>
            <!--
<form action=\"http://jquery-plugins.net/search\" class=\"navbar-search pull-right\" id=\"formSearch\" method=\"get\">              <input class=\"search-query span2\" id=\"q\" name=\"q\" placeholder=\"بحث\" type=\"text\" x-webkit-speech /> <a style=\"position:relative; top:3px;left:-3px; color:#9E9D9D; font-size:14px; \" class=\"baseLink\" href=\"javascript:\$('#formSearch').submit();\"><i class=\"icon icon-search\"></i></a>                       
</form>     -->               
        </div>
                
    </div>
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
        return array (  62 => 34,  44 => 19,  25 => 5,  19 => 1,);
    }
}
