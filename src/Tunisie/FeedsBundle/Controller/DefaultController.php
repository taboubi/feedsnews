<?php

namespace Tunisie\FeedsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
// these import the "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Tunisie\FeedsBundle\Entity\Jarida\AlHadath;

class DefaultController extends Controller {

    /**
     * @Route("/{page}", name="_homepage", defaults={"page" = "1"})
     * @Template()
     */
    public function indexAction($page) {

        $em = $this->get('doctrine')->getManager();

        $query = $em->createQueryBuilder()
                ->select('a')
                ->from('TunisieFeedsBundle:Article', 'a')
                ->innerJoin('a.feed', 'f')
                ->where('f.language = :language')
                ->setParameter('language', 'arabe')->orderBy('a.createdAt', 'DESC')
                ->getQuery();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $page/* page number */, 10/* limit per page */
        );

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
                ->setTitle('موقع إخباري تونسي شامل  على مدار الساعة')
                ->addMeta('name', 'news_keywords', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة')
                ->addMeta('name', 'keywords', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة')
                ->addMeta('name', 'description', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة ,تونس – أخبار تونس | كل اخبار تونس لحظة بلحظة‏ | أخبار السياسة')
                ->addMeta('property', 'og:title', 'موقع إخباري تونسي شامل  على مدار الساعة')
                ->addMeta('property', 'og:type', 'article')
        ;
        return array('pagination' => $pagination);


        /*      $facebookSdkA = $this->get("armetiz.facebook.myApplicationA");

          $facebookSdkA->setAccessToken('CAAAAFWvKao4BANs2EA0HmFE5RySPSX6REr6tlAbyzyjHOfzFN3A4DwsgBovHsPMfpAnnIzG8vvZCyBWGkZBlMwaxhoenbGZBAaLZAjoBHvQFLFFvOdtWiXyZCgZCJg6H4bXEEpYDqdCO2UipGzZBhksZBitNhZCybDWMe5vamEwA90qFkr1WBpWIzzMuQjuiBFhUZD');

          $user = $facebookSdkA->getUser();
          if($facebookSdkA->getUser()) {
          try {

          $user_profile = $facebookSdkA->api('/me');
          } catch(FacebookApiException $e) {
          $login_url = $facebook->getLoginUrl($params);
          error_log($e->getType());
          error_log($e->getMessage());
          }
          } else {
          $login_url = $facebook->getLoginUrl($params);

          }




          var_dump($user_profile);die;
          $attachment = array(
          'access_token' => 'CAAAAFWvKao4BAKZBgyEpTcYz4ArmP0oek2Oq3JmiZB4g0zT2SZCZBGsDqSNbUz0hZAdmEH30s2OpgNyETAK8absUGNDsyRGF4lbbN7vzLRxdnUMuzPLWQTe5bk0j4cWe0bcFSg2IWFi7CtCLzp6ZBcYUIFFJuWl9lWvEpcZATDaiBShPi4C7AOg',
          'link' => 'http://www.tunisieactu.net'
          );

          $status = $facebookSdkA->api("/197097710372785/feed", "POST", $attachment);
          var_dump($status);die;
          $status = $facebook->api("/$pageId/feed", "post", $attachment);
          /*
          $feeds = $this->get('doctrine')
          ->getRepository('TunisieFeedsBundle:Article')
          ->findAll();

          return array('items' => $feeds); */
    }

    /**
     * @Route("/fetch/token", name="_fetch_token")
     * @Template()
     */
    public function tokenAction($name) {
        $dialog_url = "https://www.facebook.com/dialog/oauth?client_id=92002740878&redirect_uri=" . urlencode($my_url) . "&state="
                . $_SESSION['state'] . "&scope=publish_stream,read_friendlists,email";
        return array();
    }

    /**
     * @Route("/header", name="_header")
     * @Template()
     */
    public function headerAction() {

        return array();
    }
    
     /**
     * @Route("/test/facebook", name="_test")
     * @Template()
     */
    public function testAction() {

        //set_time_limit(0);
        //$h = new AlHadath($this->get('doctrine'));
        
        //return array('items' => $h->getResults());
    }

    /**
     * @Route("/detail/{slug}", name="_detail_article")
     * @Template()
     */
    public function detailAction($slug) {
        $article = $this->get('doctrine')
                ->getRepository('TunisieFeedsBundle:Article')
                ->findBy(array('slug' => $slug));
        if (!isset($article[0])) {
            die('no article');
        }
        $article = $article[0];
        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
                ->setTitle($article->getTitle())
                ->addMeta('name', 'news_keywords', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة')
                ->addMeta('name', 'description', $article->getDescription())
                ->addMeta('property', 'og:title', $article->getTitle())
                ->addMeta('property', 'og:type', 'article')
                ->addMeta('property', 'og:image', ($article->getImage() != null) ? $article->getImage() : 'http://tunisieactu.net/bundles/tunisiefeeds/images/urgent.jpg')
                ->addMeta('property', 'og:url', $this->generateUrl('_detail_article', array(
                            'slug' => $article->getSlug()
                                ), true))
                ->addMeta('property', 'og:description', $article->getDescription());
        


        return array('article' => $article);
    }
    
    
    /**
     * @Route("/category/{type}/{factory}/{favicon}/{page}", name="_category_article", defaults={"page" = "1"})
     * @Template()
     */
    public function categoryAction($type, $factory, $favicon, $page) {
       $em = $this->get('doctrine')->getManager();

       $join = ($type == 'feed')? 'a.feed' : 'a.jarida';
        $query = $em->createQueryBuilder()
                ->select('a')
                ->from('TunisieFeedsBundle:Article', 'a')
                ->innerJoin($join, 'f')
                ->where('f.language = :language')
                ->andWhere('f.factory = :fav')
                ->setParameter('fav',$factory)
                ->setParameter('language', 'arabe')->orderBy('a.createdAt', 'DESC')
                ->getQuery();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $query, $page/* page number */, 10/* limit per page */
        );

        $seoPage = $this->container->get('sonata.seo.page');

        $seoPage
                ->setTitle('موقع إخباري تونسي شامل  على مدار الساعة'.' '.$favicon)
                ->addMeta('name', 'news_keywords', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة'.', '.$favicon)
                ->addMeta('name', 'keywords', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة'.', '.$favicon)
                ->addMeta('name', 'description', 'Journal, News Tunisie, actualités Tunisie, actualités tunisienne, Tunisie actualités , تونس  , اخبار تونس, على مدار الساعة  , أخبار تونس لحظة بلحظة ,تونس – أخبار تونس | كل اخبار تونس لحظة بلحظة‏ | أخبار السياسة')
                ->addMeta('property', 'og:title', 'موقع إخباري تونسي شامل  على مدار الساعة')
                ->addMeta('property', 'og:type', 'article')
        ;
        return array('pagination' => $pagination);
        

    }

    /**
     * @Route("/xml/format", name="_xml_article")
     * @Template()
     */
    public function xmlAction() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->get('request')->get('url'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
        $html = curl_exec($ch);



        preg_match_all('/\'(.*?)\',/i', $html, $matches);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->get('request')->get('url'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');


        $cook = str_replace(' ', '', str_replace(',', '', str_replace('\'', '', $matches[0][0])));
        $value = str_replace(' ', '', str_replace(',', '', str_replace('\'', '', $matches[0][1])));
        curl_setopt($ch, CURLOPT_COOKIE, "$cook=$value");
        $html = curl_exec($ch);
        return array('xml' => html_entity_decode($html));
    }

    /**
     * @Route("/fix/format", name="_fix_article")
     * @Template()
     */
    public function fixAction() {

        $url = $this->get('request')->get('url');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
        $html = curl_exec($ch);
        return array('xml' => html_entity_decode($html));
    }
    
    /**
     * @Route("/feed/rss.xml", name="_feed_rss")
     */
    public function feedAction()
    {
        $em = $this->get('doctrine')->getManager();
       $articles = $em->createQueryBuilder()
                ->select('a')
                ->from('TunisieFeedsBundle:Article', 'a')
                ->innerJoin('a.feed', 'f')
                ->where('f.language = :language')
                ->setParameter('language', 'arabe')->orderBy('a.createdAt', 'DESC')
                ->getQuery()->setMaxResults(10)->getResult();
       
       

        $feed = $this->get('eko_feed.feed.manager')->get('article');
        $feed->addFromArray($articles);

        $response =  new Response($feed->render('rss')); // or 'atom'
       return $response->sendContent();
    }
    
    
    /**
     * @Route("/sitemap/sitemap.{_format}", name="sample_sitemaps_sitemap", Requirements={"_format" = "xml"})
     * @Template("TunisieFeedsBundle:Default:sitemap.xml.twig")
     */
    public function sitemapAction() 
    {
        
        
        $urls = array();
        $hostname = $this->getRequest()->getHost();

        // add some urls homepage
        $urls[] = array('loc' => 'http://www.tunisieactu.net', 'changefreq' => 'hourly', 'priority' => '1.0');

        // multi-lang pages
       
        
       $em = $this->get('doctrine')->getManager();
       $articles = $em->createQueryBuilder()
                ->select('a')
                ->from('TunisieFeedsBundle:Article', 'a')
                ->innerJoin('a.feed', 'f')
                ->where('f.language = :language')
                ->setParameter('language', 'arabe')->orderBy('a.createdAt', 'DESC')
                ->getQuery()->setMaxResults(50)->getResult();
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/mosaiquefm/موزاييك' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/hakaekonline/حقائق%20أون%20لاين' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/alarabiya/العربية' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         //$urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/tunimedia/tunimedia' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/capradio/كاب%20أف%20أم' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/shemsFm/شمس%20أف' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/tunisnews/tunisnews' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/feed/tunimedia/tunimedia' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/jarida/aljarida/الجريدة' , 'changefreq' => 'hourly' , 'priority' => '0.5');
         $urls[] = array('loc' => 'http://www.tunisieactu.net/category/jarida/alHadath/المصدر' , 'changefreq' => 'hourly' , 'priority' => '0.5');
        foreach ($articles as $product) {
            $urls[] = array('loc' => $this->get('router')->generate('_detail_article', 
                    array('slug' => $product->getSlug()),true), 'priority' => '0.5');
        }

        return array('urls' => $urls, 'hostname' => '');
    }

}
