<?php

/* TunisieFeedsBundle:Default:index.html.twig */
class __TwigTemplate_59ca97e671bdcde25128cdc5daa18196515be77a4f49ec2fcc0858b98963c17c extends Twig_Template
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

     <div class=\"col-xs-12 col-md-9\" style=\"float: right;padding-left:0;padding-right:0\">
        <div class=\"col-xs-12\">
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "
                <div class=\"hidden-xs col-sm-1 top-margin\" style=\"float: right;clear: both;\">
                                    <p class=\"month\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getArabicMonth", array(), "method"), "html", null, true);
            echo "</p>
                                    <p class=\"day\">";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "createdAt", array()), "j"), "html", null, true);
            echo "</p>
                </div>
                <div class=\"col-xs-12 col-sm-11 white\">
                            <div class=\"row\">
                                    
                                    <div class=\"col-xs-12 col-sm-11\" style=\"float: right\">
                                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\" class=\"title\">
                                                    <h3  style=\"text-align: right;\">
                                                  ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "       
                                            </h3></a>
                                            </div>
                                    <div class=\"hidden-xs col-sm-1  pull-left\" >
                                        <a href=\"";
            // line 28
            if (($this->getAttribute($this->getAttribute($context["item"], "feed", array()), "id", array()) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "feed", "factory" => $this->getAttribute($this->getAttribute($context["item"], "feed", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute($context["item"], "feed", array()), "favicon", array()))), "html", null, true);
                echo " ";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "jarida", "factory" => $this->getAttribute($this->getAttribute($context["item"], "jarida", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute($context["item"], "jarida", array()), "favicon", array()))), "html", null, true);
                echo " ";
            }
            echo "\" ><span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["item"], "getFeed", array(), "method"), "getSource", array(), "method"), "html", null, true);
            echo "</span></a>
                                            </div>
                            </div>
                            <div class=\"row\">
                                    <div class=\"col-xs-12 col-sm-3 \" style=\"float: right\">
                                    <img title=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\" src=\"";
            if (($this->getAttribute($context["item"], "getImage", array(), "method") != null)) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "getImage", array(), "method"), "html", null, true);
                echo " ";
            } else {
                echo "  ";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/urgent.jpg"), "html", null, true);
                echo " ";
            }
            echo "\">
                                    </div>
                                    <div class=\"col-xs-12 col-sm-9\" style=\"float: right;text-align: right\">
                                        <div style=\"min-height: 80px;\">
                                        <p>
                                            ";
            // line 38
            echo twig_truncate_filter($this->env, $this->getAttribute($context["item"], "description", array()), 450, true, "...");
            echo "
                                        </p>
                                        </div>
                                            <a class=\"pull-left readme\" href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">إقرأ المزيد</a>
                                    </div>
                                    
                            </div>
                </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            
                
            

        </div>
        
<div class=\"col-xs-12\">
    <div class=\"span12 sliderContent\">
        <ul class=\"pluginList\">

";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "               <li> 

<div  style=\"padding:20px 10px 5px 15px;padding-bottom: 15px;\">

    <h3 class=\"title\" style=\"margin-top: -10px;padding: 0px 0 0px !important;font-size: 1.4em;line-height: 22px!important;text-align: right!important;width: 100%;float: right;\">
        <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</a>
    </h3>
    
    <div class=\"row-fluid\">    
         <div class=\"span3\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\">
                 <img  title=\"";
            // line 68
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
            // line 70
            echo twig_truncate_filter($this->env, $this->getAttribute($context["item"], "description", array()), 450, true, "...");
            echo "</p>
             <ul class=\"pluginLinks\" style=\"position: relative;right: -6px;float: right;bottom: -6px;\">
                 <li><span  class=\"btn btn-info\" ><i  class=\"icon-calendar f14 grIcon\"></i> ";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "createdAt", array()), "j F, Y"), "html", null, true);
            echo "</span></li>
                 <li><a rel=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute($context["item"], "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">إقرأ المزيد<span class=\"glyphicon glyphicon-list-alt\"></span></a></li>
              <li> <a rel=\"tag\" class=\"btn btn-danger btn-lg\" href=\"";
            // line 74
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
        // line 83
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
        // line 104
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
            
          
\t\t<!-- right3 -->
\t\t<ins class=\"adsbygoogle\"
\t\t     style=\"display:inline-block;width:300px;height:600px\"
\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t     data-ad-slot=\"5693104775\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>

\t\t<!-- right2 -->
\t\t<ins class=\"adsbygoogle\"
\t\t     style=\"display:inline-block;width:336px;height:280px\"
\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t     data-ad-slot=\"4355972376\"></ins>
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
        return array (  250 => 104,  227 => 83,  202 => 74,  196 => 73,  192 => 72,  187 => 70,  171 => 68,  167 => 67,  158 => 63,  151 => 58,  147 => 57,  135 => 47,  123 => 41,  117 => 38,  100 => 33,  82 => 28,  75 => 24,  70 => 22,  61 => 16,  57 => 15,  53 => 13,  49 => 12,  39 => 6,  36 => 5,  11 => 1,);
    }
}
