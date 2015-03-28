<?php

namespace Tunisie\FeedsBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Tunisie\FeedsBundle\Entity\ShemsFm;
use Tunisie\FeedsBundle\Entity\Hakaekonline;
use Tunisie\FeedsBundle\Entity\Article;

/**
 * Hello World command for demo purposes.
 *
 * You could also extend from Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand
 * to get access to the container via $this->getContainer().
 *
 * @author Tobias Schultze <http://tobion.de>
 */
class ImportFeedsCommand extends ContainerAwareCommand
{
    
    protected $em;
    protected $manager;
    protected $facebook;
    protected $facebookToken;
    /**
     * {@inheritdoc}
     */
    protected function configure()
    {
        $this
            ->setName('import:feeds')
            ->setDescription('Hello World example command')
            ->addArgument('feed_id', InputArgument::OPTIONAL, 'feed id', 'feed');
        
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
       
       
        $output->writeln('Hello <comment>commencer l import</comment>!');
        $this->em = $this->getContainer()->get('doctrine');
        
        $token = $this->em
                ->getRepository('TunisieFeedsBundle:Token')
                ->find(1);

        
        /*$this->facebook = $this->getContainer()->get('armetiz.facebook.myApplicationA');
        $access_token = $token->getToken();
        $this->facebook->setAccessToken($access_token);
        $this->getPageToken();*/
        
        $this->manager = $this->em->getManager();
         $feeds = $this->em
        ->getRepository('TunisieFeedsBundle:Feed')
        ->findBy(array('isActive' => true));
         
         $reader = $this->getContainer()->get('debril.reader');
      
        // now fetch its (fresh) content
        

        
        foreach ($feeds as $feedItem){
            $output->writeln('feed id : <comment>'.$feedItem->getId().'</comment>!');
            $url = ($feedItem->getSource() == 'alarabiya')? $this->getXmlContent($feedItem->getUrl()) : $feedItem->getUrl();
            $url = ($feedItem->getSource() == 'attounissia')? $this->getfixContent($feedItem->getUrl()) : $url;
            $feed = $reader->getFeedContent($url,($feedItem->getLastUpdate())? $feedItem->getLastUpdate() : null);
            $items = $feed->getItems();
             $output->writeln('nb article parsed : <comment>'.count($items).'</comment>!');
             $parserName = "Tunisie\FeedsBundle\Entity\\".ucfirst($feedItem->getFactory());
             $parser = new $parserName();
             $dateSet = false ; 
             foreach ($items as $item){
                try {
                 $parser->setItem($item);
                 $article = new Article();
                 $article->setTitle((string)$item->getTitle());
                 $articleFound = $this->em
                                ->getRepository('TunisieFeedsBundle:Article')
                                ->findOneBy(array('slug' => $article->url_slug((string)$item->getTitle(), array('transliterate' => true), $feedItem->getLanguage())));

                 if($articleFound){
                     
                     continue ;
                 }
                 $article->setCreatedAt($item->getUpdated());
                 if(!$parser->getDescription()){
                     continue;
                 }
                 $article->setDescription($parser->getDescription());
                 $article->setImage($parser->getImage());
                 if(!$dateSet){
                     $dateSet = $item->getUpdated();
                 }
                  $output->writeln($feedItem->getFactory().' --- >' .$item->getUpdated()->format('Y-m-d'));
                
                 $article->setSlug($article->url_slug((string)$item->getTitle(), array('transliterate' => true), $feedItem->getLanguage()));
                 $article->setFeed($feedItem);
                 $article->setUrl($item->getLink());
                 $this->manager->persist($article);
                 $this->manager->flush();
                 //$this->postOnfacebook($article->getSlug());
                }  catch (\Exception $e){
                    echo $e->getMessage();
                   continue;
                   
                }
             }
             
             if($dateSet){
                 $feedItem->setLastUpdate($dateSet); 
                 $this->manager->persist($feedItem);
                 $this->manager->flush();
             }
             
              $output->writeln('-------------------------------------------------------');
        }
    }
    
    
    public function getXmlContent($url){
        
        
        
        return 'http://symfony.tunisieactu.net/xml/format?url='.  urlencode($url); 
    }
    
     public function getfixContent($url){
        
        
        
        return 'http://symfony.tunisieactu.net/fix/format?url='.  urlencode($url); 
    }
    
    protected function postOnfacebook($slug){
        
         // sets our access token as the access token when we call something using the SDK, which we are going to do now.

        $args = array(
            'access_token'  => $this->facebookToken,
            'link' => "http://www.tunisieactu.net/detail/".$slug,

            );

       
       $post = $this->facebook->api("/197097710372785/feed","post",$args);
    }
    
    protected function getPageToken(){
        $params = array('scope'=>'user_likes,publish_actions,email,publish_stream,manage_pages');
    
        $user = $this->facebook->getUser();
        if($this->facebook->getUser()) {
        try {

            $user_profile = $this->facebook->api('/me');
          } catch(\FacebookApiException $e) {
                            $login_url = $this->facebook->getLoginUrl($params);
                            error_log($e->getType());
                            error_log($e->getMessage());
          }   
        } else {
            $login_url = $this->facebook->getLoginUrl($params);

        }    

        $page_id = "197097710372785";

        $result = $this->facebook->api("/me/accounts");

        foreach($result["data"] as $page) {
            if($page["id"] == $page_id) {
            $this->facebookToken = $page["access_token"];
            //echo '<br>';
            //echo "2. ".$page_access_token;
            break;
                }
            }
        
    }
    

    
}
