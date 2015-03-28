<?php

/* TunisieFeedsBundle:Default:index.html.twig */
class __TwigTemplate_e5154150556376706d3b4e28e7f5014f78abdb4bedf2c5d384ab834a172a1ba9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TunisieFeedsBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TunisieFeedsBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo " ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TunisieFeedsBundle:Default:header"));
        echo "


  
 <div class=\"container grey\">

     <div class=\"col-xs-12 col-md-9\" style=\"float: right;\">
        <div class=\"col-xs-12\">
                
        <div class=\"hidden-xs col-sm-1 top-margin\" style=\"float: right;\">
\t\t\t<p class=\"month\">Mar</p>
\t\t\t<p class=\"day\">25</p>
\t\t</div>
        <div class=\"col-xs-12 col-sm-11 white\">
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-1 col-sm-1 hidden-xs\">
        \t\t<img src=\"http://fedoramagazine.org/wp-content/uploads/2015/03/5things-bluebits-300x127.png\">
        \t\t</div>
        \t\t<div class=\"col-xs-11 col-sm-10\">
\t\t\t\t\t  <a href=\"http://fedoramagazine.org/5tftw-2015-03-25/\" class=\"title\"><h3>Fedora conferences this summer, writing release notes, brainstorming a better onramp, and a GSOC reminder</h3></a>
\t\t\t\t</div>
        \t\t<div class=\"hidden-xs col-sm-1 comments pull-right\">
\t\t\t\t\t<i class=\"fa fa-fw fa-comment comment-icon\"></i>0
\t\t\t\t</div>
        \t</div>
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-12 col-sm-11 col-sm-offset-1\">
        \t\t<p>Fedora is a big project, and it’s hard to keep up with everything. This series highlights interesting happenings in five different areas every week. It isn’t comprehensive news coverage &mdash; just quick summaries with links to each. Here are the... <a href=\"http://fedoramagazine.org/5tftw-2015-03-25/\" class=\"more-link\">Continue Reading →</a>...</p>
\t\t\t\t<a class=\"pull-right readme\" href=\"http://fedoramagazine.org/5tftw-2015-03-25/\">Read more ...</a>
        \t\t</div>
        \t</div>
\t\t</div>
        <div class=\"hidden-xs col-sm-1 top-margin\">
\t\t\t<p class=\"month\">Mar</p>
\t\t\t<p class=\"day\">25</p>
\t\t</div>
        <div class=\"col-xs-12 col-sm-11 white\">
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-1 col-sm-1 hidden-xs\">
        \t\t<img src=\"http://fedoramagazine.org/wp-content/uploads/2015/03/libreoffice-300x127.png\">
        \t\t</div>
        \t\t<div class=\"col-xs-11 col-sm-10\">
\t\t\t\t\t  <a href=\"http://fedoramagazine.org/libreoffice-online-announced-by-collabora/\" class=\"title\"><h3>LibreOffice online announced by Collabora</h3></a>
\t\t\t\t</div>
        \t\t<div class=\"hidden-xs col-sm-1 comments pull-right\">
\t\t\t\t\t<i class=\"fa fa-fw fa-comment comment-icon\"></i>0
\t\t\t\t</div>
        \t</div>
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-12 col-sm-11 col-sm-offset-1\">
        \t\t<p>Collabora are working on LibreOffice online, an Open Source alternative to Google Docs and Office 365....</p>
\t\t\t\t<a class=\"pull-right readme\" href=\"http://fedoramagazine.org/libreoffice-online-announced-by-collabora/\">Read more ...</a>
        \t\t</div>
        \t</div>
\t\t</div>
        <div class=\"hidden-xs col-sm-1 top-margin\">
\t\t\t<p class=\"month\">Mar</p>
\t\t\t<p class=\"day\">22</p>
\t\t</div>
        <div class=\"col-xs-12 col-sm-11 white\">
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-1 col-sm-1 hidden-xs\">
        \t\t<img src=\"http://fedoramagazine.org/wp-content/uploads/2015/03/gnucash-300x127.png\">
        \t\t</div>
        \t\t<div class=\"col-xs-11 col-sm-10\">
\t\t\t\t\t  <a href=\"http://fedoramagazine.org/managing-finances-gnucash/\" class=\"title\"><h3>Managing your finances with GNUCash</h3></a>
\t\t\t\t</div>
        \t\t<div class=\"hidden-xs col-sm-1 comments pull-right\">
\t\t\t\t\t<i class=\"fa fa-fw fa-comment comment-icon\"></i>7
\t\t\t\t</div>
        \t</div>
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-12 col-sm-11 col-sm-offset-1\">
        \t\t<p>Managing one's finances is an unavoidable chore in life. You will need to employ it sooner or later&nbsp;&mdash; the sooner you try it, the better. Luckily, there is&nbsp;a great open source tool available for all your budgeting needs &ndash; GNUCash.... <a href=\"http://fedoramagazine.org/managing-finances-gnucash/\" class=\"more-link\">Continue Reading →</a>...</p>
\t\t\t\t<a class=\"pull-right readme\" href=\"http://fedoramagazine.org/managing-finances-gnucash/\">Read more ...</a>
        \t\t</div>
        \t</div>
\t\t</div>
        <div class=\"hidden-xs col-sm-1 top-margin\">
\t\t\t<p class=\"month\">Mar</p>
\t\t\t<p class=\"day\">20</p>
\t\t</div>
        <div class=\"col-xs-12 col-sm-11 white\">
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-1 col-sm-1 hidden-xs\">
        \t\t<img src=\"http://fedoramagazine.org/wp-content/uploads/2015/03/emoji-300x127.png\">
        \t\t</div>
        \t\t<div class=\"col-xs-11 col-sm-10\">
\t\t\t\t\t  <a href=\"http://fedoramagazine.org/how-to-get-emoji-to-display-on-fedora/\" class=\"title\"><h3>How to get Emoji to display on Fedora</h3></a>
\t\t\t\t</div>
        \t\t<div class=\"hidden-xs col-sm-1 comments pull-right\">
\t\t\t\t\t<i class=\"fa fa-fw fa-comment comment-icon\"></i>9
\t\t\t\t</div>
        \t</div>
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-12 col-sm-11 col-sm-offset-1\">
        \t\t<p>Emoji, the cute Ideograms that are now part of Unicode are now used fairly widely in messaging, especially on mobile devices. However, if you receive a message from someone with an Emoji on it, or view a page online what... <a href=\"http://fedoramagazine.org/how-to-get-emoji-to-display-on-fedora/\" class=\"more-link\">Continue Reading →</a>...</p>
\t\t\t\t<a class=\"pull-right readme\" href=\"http://fedoramagazine.org/how-to-get-emoji-to-display-on-fedora/\">Read more ...</a>
        \t\t</div>
        \t</div>
\t\t</div>
        <div class=\"hidden-xs col-sm-1 top-margin\">
\t\t\t<p class=\"month\">Mar</p>
\t\t\t<p class=\"day\">19</p>
\t\t</div>
        <div class=\"col-xs-12 col-sm-11 white\">
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-1 col-sm-1 hidden-xs\">
        \t\t<img src=\"http://fedoramagazine.org/wp-content/uploads/2015/03/tatica-300x175.jpg\">
        \t\t</div>
        \t\t<div class=\"col-xs-11 col-sm-10\">
\t\t\t\t\t  <a href=\"http://fedoramagazine.org/maria-leandro-how-do-you-fedora/\" class=\"title\"><h3>Maria Leandro: How do you Fedora?</h3></a>
\t\t\t\t</div>
        \t\t<div class=\"hidden-xs col-sm-1 comments pull-right\">
\t\t\t\t\t<i class=\"fa fa-fw fa-comment comment-icon\"></i>11
\t\t\t\t</div>
        \t</div>
        \t<div class=\"row\">
        \t\t<div class=\"col-xs-12 col-sm-11 col-sm-offset-1\">
        \t\t<p>Maria Leandro discusses how she uses Fedora with Open Source graphics software for photography and graphic design....</p>
\t\t\t\t<a class=\"pull-right readme\" href=\"http://fedoramagazine.org/maria-leandro-how-do-you-fedora/\">Read more ...</a>
        \t\t</div>
        \t</div>
\t\t</div>

                </div>
        
<div class=\"col-xs-12\">
    <div class=\"span12 sliderContent\">
        <ul class=\"pluginList\">

";
        // line 137
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 138
            echo "               <li> 

<div  style=\"padding:20px 10px 5px 15px;padding-bottom: 15px;\">

    <h3 class=\"title\" style=\"margin-top: -10px;padding: 0px 0 0px !important;font-size: 1.4em;line-height: 22px!important;text-align: right!important;width: 100%;float: right;\">
        <a href=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a>
    </h3>
    
    <div class=\"row-fluid\">    
         <div class=\"span3\"><a href=\"";
            // line 147
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">
                 <img  title=\"";
            // line 148
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\" class=\"img-frame\" src=\"";
            if (($this->getAttribute($context["item"], "getImage", array(), "method") != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getImage", array(), "method"), "html", null, true);
                echo " ";
            } else {
                echo "  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/urgent.jpg"), "html", null, true);
                echo " ";
            }
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\"/></a></div>
         <div class=\"span9\" style=\"text-align: right\"> 
             <p>";
            // line 150
            echo twig_truncate_filter($this->env, $this->getAttribute($context["item"], "description", array()), 450, true, "...");
            echo "</p>
             <ul class=\"pluginLinks\" style=\"position: relative;right: -6px;float: right;bottom: -6px;\">
                 <li><span  class=\"btn btn-info\" ><i  class=\"icon-calendar f14 grIcon\"></i> ";
            // line 152
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "createdAt", array()), "j F, Y"), "html", null, true);
            echo "</span></li>
                 <li><a rel=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">إقرأ المزيد<span class=\"glyphicon glyphicon-list-alt\"></span></a></li>
              <li> <a rel=\"tag\" class=\"btn btn-danger btn-lg\" href=\"";
            // line 154
            if (($this->getAttribute($this->getAttribute($context["item"], "feed", array()), "id", array()) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "feed", "factory" => $this->getAttribute($this->getAttribute($context["item"], "feed", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute($context["item"], "feed", array()), "favicon", array()))), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "jarida", "factory" => $this->getAttribute($this->getAttribute($context["item"], "jarida", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute($context["item"], "jarida", array()), "favicon", array()))), "html", null, true);
                echo " ";
            }
            echo "\" role=\"button\"> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "getFeed", array(), "method"), "getSource", array(), "method"), "html", null, true);
            echo " : مصدر<span class=\"glyphicon glyphicon-list-alt\"></span></a></li>
            </ul>
                                    
         </div>
    </div> 

</div>
</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "             
<li class=\"adsense\">
  <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- annonce list -->
<ins class=\"adsbygoogle\"
     style=\"display:block\"
     data-ad-client=\"ca-pub-7963319750770607\"
     data-ad-slot=\"7169837978\"
     data-ad-format=\"auto\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</li>
               
        </ul>
    </div>
</div>
<div class=\"row-fluid\">
    <div class=\"span12\">
    
    <div class=\"navigation\">
    ";
        // line 184
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "
    </div>

    </div>
</div>
    </div>
    <div class=\"col-xs-12 col-md-3 hidden-xs\">        
            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
<!-- right1 -->
<ins class=\"adsbygoogle\"
     style=\"display:inline-block;width:300px;height:250px\"
     data-ad-client=\"ca-pub-7963319750770607\"
     data-ad-slot=\"2879239170\"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
            
          <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t<!-- right2 -->
\t\t<ins class=\"adsbygoogle\"
\t\t     style=\"display:inline-block;width:336px;height:280px\"
\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t     data-ad-slot=\"4355972376\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>
            
           <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t<!-- right3 -->
\t\t<ins class=\"adsbygoogle\"
\t\t     style=\"display:inline-block;width:300px;height:600px\"
\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t     data-ad-slot=\"5693104775\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>
    </div>

 </div>
 
<script type=\"text/javascript\">
            
            \$(function () {
                
                \$(\".ticker1\").modernTicker({
                    effect: \"scroll\",
                    scrollInterval: 20,
                    transitionTime: 500,
                    autoplay: true
                });
                
               
            });
            
        </script>
        
<!-- AddThis Smart Layers BEGIN -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=itaboubi\"></script>
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=itaboubi\"></script>
<script type=\"text/javascript\">
  addthis.layers({
    'theme' : 'light',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    }, 
    'follow' : {
      'services' : [
        {'service': 'facebook', 'id': 'pages/Tunisie-actualit%C3%A9/197097710372785'}
      ]
    },  
    'whatsnext' : {}  
  });
</script>
<div id=\"addthis_trendingcontent\"></div>
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=itaboubi\"></script>
<script type=\"text/javascript\">
addthis.box(\"#addthis_trendingcontent\", {
    feed_title : \"\",
    feed_type : \"clicked\",
    feed_period : \"day\",
    num_links : 5,
    height : \"auto\",
    width : \"auto\"});
</script>

<!-- AddThis Welcome BEGIN -->
<script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=itaboubi\"></script>
<script type='text/javascript'>
addthis.bar.initialize({'default':{
\t\"backgroundColor\": \"#000000\",
\t\"buttonColor\": \"#4e69a2\",
\t\"textColor\": \"#FFFFFF\",
\t\"buttonTextColor\": \"#FFFFFF\"
},rules:[
\t{
\t\t\"name\": \"Twitter\",
\t\t\"match\": {
\t\t\t\"referringService\": \"twitter\"
\t\t},
\t\t\"message\": \"If you find this page helpful:\",
\t\t\"action\": {
\t\t\t\"type\": \"button\",
\t\t\t\"text\": \"Tweet it!\",
\t\t\t\"verb\": \"share\",
\t\t\t\"service\": \"twitter\"
\t\t}
\t},
\t{
\t\t\"name\": \"Facebook\",
\t\t\"match\": {
\t\t\t\"referringService\": \"facebook\"
\t\t},
\t\t\"message\": \"Tell your friends about us:\",
\t\t\"action\": {
\t\t\t\"type\": \"button\",
\t\t\t\"text\": \"Partager\",
\t\t\t\"verb\": \"share\",
\t\t\t\"service\": \"facebook\"
\t\t}
\t},
\t{
\t\t\"name\": \"Google\",
\t\t\"match\": {
\t\t\t\"referrer\": \"google.com\"
\t\t},
\t\t\"message\": \"If you like this page, let Google know:\",
\t\t\"action\": {
\t\t\t\"type\": \"button\",
\t\t\t\"text\": \"+1\",
\t\t\t\"verb\": \"share\",
\t\t\t\"service\": \"google_plusone_share\"
\t\t}
\t}
]});
</script>
<!-- AddThis Welcome END -->
<!-- AddThis Trending Content END -->
<!-- AddThis Smart Layers END -->
<!-- AddThis Smart Layers END -->
<!-- AddThis Welcome END -->
";
    }

    public function getTemplateName()
    {
        return "TunisieFeedsBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 184,  254 => 163,  229 => 154,  223 => 153,  219 => 152,  214 => 150,  198 => 148,  194 => 147,  185 => 143,  178 => 138,  174 => 137,  39 => 6,  36 => 5,  11 => 1,);
    }
}
