<?php

/* TunisieFeedsBundle::layout.html.twig */
class __TwigTemplate_99cda333d6f252b6f865ba587c1fda87c410b581b1950af8538f344a0c5993cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!-- Microdata markup added by Google Structured Data Markup Helper. -->
<html dir=\"ltr\" lang=\"ar-AR\" xmlns:fb=\"http://ogp.me/ns/fb#\" />
    <head>
        <meta charset=\"UTF-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE9; IE=EmulateIE8; IE=EmulateIE7\" />
         ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderTitle(), "html", null, true);
        echo "
        ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderMetadatas(), "html", null, true);
        echo "
        ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderLinkCanonical(), "html", null, true);
        echo "
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('sonata_seo')->renderLangAlternates(), "html", null, true);
        echo "

        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 29
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.png"), "html", null, true);
        echo "\" />
        <link rel=\"alternate\" type=\"application/rss+xml\"  href=\"http://www.tunisieactu.net/feed/rss.xml\" title=\"My Blog's RSS Feed\">
    </head>
    <body style=\"background-color: #58595b\">
         ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 34
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 35
        echo "\t\t<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48852331-1', 'tunisieactu.net');
  ga('send', 'pageview');


</script>
<script type=\"text/javascript\" >

  \$( document ).ready(function() {

  \$('.btn-navbar').on('click',function(){

    if(\$('.nav-collapse').css('height') == '0px' ){
        \$('.nav-collapse').css('height','auto');
    }else {
        \$('.nav-collapse').css('height','0px');
    }
});  
});
    
</script>
    </body>
</html>";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 14
        echo "             <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/css/fontgoogle.css"), "html", null, true);
        echo "\" type=\"text/css\" />
             <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\" />
             <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" />
             <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/css/modern-ticker.css"), "html", null, true);
        echo "\" type=\"text/css\" />
              <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/css/theme.css"), "html", null, true);
        echo "\" type=\"text/css\" />





             <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/js/jquery-1.9.0.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
             <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tunisiefeeds/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
             
             
        ";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TunisieFeedsBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 34,  135 => 33,  127 => 25,  123 => 24,  114 => 18,  110 => 17,  106 => 16,  102 => 15,  97 => 14,  94 => 13,  63 => 35,  60 => 34,  58 => 33,  50 => 29,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  22 => 1,);
    }
}
