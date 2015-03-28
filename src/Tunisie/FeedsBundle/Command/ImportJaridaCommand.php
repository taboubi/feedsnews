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
class ImportJaridaCommand extends ContainerAwareCommand
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
            ->setName('import:jarida')
            ->setDescription('Hello World example command')
            ->addArgument('feed_id', InputArgument::OPTIONAL, 'feed id', 'feed');
        
    }

    /**
     * {@inheritdoc}
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
       
       
        $output->writeln('Hello <comment>commencer jarida </comment>!');
        $this->em = $this->getContainer()->get('doctrine');
        
        $token = $this->em
                ->getRepository('TunisieFeedsBundle:Token')
                ->find(1);

        
        $this->facebook = $this->getContainer()->get('armetiz.facebook.myApplicationA');
        $access_token = $token->getToken();
        $this->facebook->setAccessToken($access_token);
        $this->getPageToken();
        
        $this->manager = $this->em->getManager();
         $feeds = $this->em
        ->getRepository('TunisieFeedsBundle:Jarida')
        ->findBy(array('isActive' => true));

      
        // now fetch its (fresh) content
        

        
        foreach ($feeds as $feedItem){
            
             $parserName = "Tunisie\FeedsBundle\Entity\Jarida\\".ucfirst($feedItem->getFactory());
             $parser = new $parserName($this->em);
             $items = $parser->getResults() ; 
             if(count($items) > 0) {
             foreach ($items as $item){
                try {
   
                 $article = new Article();
                 $article->setTitle($item['title']);
                 
                 $article->setCreatedAt(new \DateTime());
                
                 $article->setDescription($item['description']);
                 $article->setImage($item['image']);
                
                 $output->writeln($feedItem->getFactory().' --- > last one' );
                
                 $article->setSlug($item['slug']);
                 $article->setJarida($feedItem);
                 $article->setUrl('');
                 $this->manager->persist($article);
                 $this->manager->flush();
                 $this->postOnfacebook($article->getSlug());
                }  catch (\Exception $e){
                    echo $e->getMessage();
                   continue;
                   
                }
             }
             }
             
             
              $output->writeln('--------------------- '.$feedItem->getFactory().'----------------------------------');
        }
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
