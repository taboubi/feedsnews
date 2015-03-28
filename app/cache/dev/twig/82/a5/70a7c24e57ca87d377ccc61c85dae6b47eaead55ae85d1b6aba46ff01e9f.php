<?php

/* TunisieFeedsBundle:Default:detail.html.twig */
class __TwigTemplate_82a570a7c24e57ca87d377ccc61c85dae6b47eaead55ae85d1b6aba46ff01e9f extends Twig_Template
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

 <div class=\"container-fluid page-container\" style=\"padding-top:34px; position:relative\">
    <div class=\"row-fluid\">
    <div class=\"main-ct\">
        

<div class=\"row-fluid\">
    <ul itemscope itemtype=\"http://schema.org/Article\" class=\"pluginMain span12\">
    <li> 
        <h1 itemprop=\"name\"  style=\"float: right;width: 100%;color: #FFF !important;text-align: right;font-size: 30px;padding-right: 10px;\" class=\"title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</h1>    
        <div class=\"row-fluid\">
            <ul style=\"list-style: none outside none; color: #999999; font-size:13px;\" class=\"span12\">
               <li style=\"width:100%\">
             <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style \" addthis:url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
        echo "\" addthis:title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "\">
            <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
            <a class=\"addthis_button_facebook_share\" fb:share:layout=\"button_count\"></a>
            <a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
            </div>
            
            
            <!-- AddThis Button END -->
         </li>                  
            </ul>
        </div>
    </li>
    <li>
        <div class=\"row-fluid\" style=\"line-height:22px;\">
                <div class=\"span5\"><img itemprop=\"image\" class=\"img-polaroid\" src=\"";
        // line 35
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getImage", array(), "method") != null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getImage", array(), "method"), "html", null, true);
            echo " ";
        } else {
            echo "  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/images/urgent.jpg"), "html", null, true);
            echo " ";
        }
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "\"/></div>
                <div class=\"span7\">
            <div itemprop=\"articleBody\"  style=\"font-size: large; text-align: right;\">";
        // line 37
        echo $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "description", array());
        echo "</div>
            <div><br /></div>
            
        </div>
        <ul class=\"pluginLinks\" style=\"position: relative;right: -6px;float: right;bottom: -6px;\">
            <li><span itemprop=\"datePublished\" content=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "createdAt", array()), "Y-m-d"), "html", null, true);
        echo "\"  class=\"btn btn-info\" ><i  class=\"icon-calendar f14 grIcon\"></i> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "createdAt", array()), "j F, Y"), "html", null, true);
        echo "</span></li>
           
            <li> <a rel=\"tag\" class=\"btn btn-danger btn-lg\" href=\"";
        // line 44
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "feed", array()), "id", array()) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "feed", "factory" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "feed", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "feed", array()), "favicon", array()))), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("type" => "jarida", "factory" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "jarida", array()), "factory", array()), "favicon" => $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "jarida", array()), "favicon", array()))), "html", null, true);
            echo " ";
        }
        echo "\" role=\"button\"><span itemprop=\"author\" itemscope itemtype=\"http://schema.org/Person\">  <span itemprop=\"name\">";
        if (($this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getFeed", array(), "method"), "getSource", array(), "method") != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getFeed", array(), "method"), "getSource", array(), "method"), "html", null, true);
            echo " ";
        } else {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "getJarida", array(), "method"), "getSource", array(), "method"), "html", null, true);
            echo " ";
        }
        echo "</span></span> : مصدر<span class=\"glyphicon glyphicon-list-alt\"></span></a></li>
        </ul>
        </div>
        
    </li>
    <li>
        <div class=\"row-fluid\">
           
             <div class=\"addthis_toolbox addthis_default_style \" addthis:url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_detail_article", array("slug" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "slug", array()))), "html", null, true);
        echo "\" addthis:title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "title", array()), "html", null, true);
        echo "\">
            <a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a>
            <a class=\"addthis_button_facebook_share\" fb:share:layout=\"button_count\"></a>
            <a class=\"addthis_button_google_plusone\" g:plusone:size=\"medium\"></a>
            </div>
        </div>            
    </li>
    <li>
     <div class=\"ct-post-nav\">
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
     </div>
    </li>
</ul> 
</div>

    </div>
       <div class=\"sidebar-ct\">        
            <script async src=\"//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js\"></script>
\t\t<!-- right1 -->
\t\t<ins class=\"adsbygoogle\"
\t\t     style=\"display:inline-block;width:300px;height:250px\"
\t\t     data-ad-client=\"ca-pub-7963319750770607\"
\t\t     data-ad-slot=\"2879239170\"></ins>
\t\t<script>
\t\t(adsbygoogle = window.adsbygoogle || []).push({});
\t\t</script>
            
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
 </div>
 <footer class=\"trans\">
 
  <div class=\"container-fluid page-container\" style=\"border-top:1px solid #CCCCCC\">
\t<div class=\"row-fluid copyRight\">
      <div class=\"span8\">
       
      </div>            
     
\t</div>
\t</div> 
</footer>        
        
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

";
    }

    public function getTemplateName()
    {
        return "TunisieFeedsBundle:Default:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 52,  109 => 44,  102 => 42,  94 => 37,  80 => 35,  61 => 21,  53 => 16,  39 => 6,  36 => 5,  11 => 1,);
    }
}
