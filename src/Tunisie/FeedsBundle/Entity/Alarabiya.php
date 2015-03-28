<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Alarabiya implements ParserFeedInterface
{
    protected $item ;
    protected $html;
    public function getImage(){
        
       
        preg_match_all('/<div class="videoWithPoster">(.*?)<\/div>/s', $this->html, $matches);  
        if(!isset($matches[1][0])){
           preg_match_all('/<div class="article_img">(.*?)<\/div>/s', $this->html, $matches); 
        }
         
        
        if(isset($matches[1][0])){
             $doc = new \DOMDocument();
            $doc->loadHTML($matches[1][0]);
            $imageTags = $doc->getElementsByTagName('img');

            foreach($imageTags as $tag) {   
                return $tag->getAttribute('src');
            }
        }
        return null ;
        
    }
     public function getDescription(){
        
       
        preg_match_all('/<div class="article-body">(.*?)<\/div>/s', $this->html, $matches); 
        if(!isset($matches[1][0])){
           
            return null;
        }

        return strip_tags($matches[1][0], '<p><br><div>') ;
        
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = $this->getHtml($this->item->getLink());
    }
    public function getHtml($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
        $html = curl_exec($ch);
        
       
        
        preg_match_all('/\'(.*?)\',/i', $html, $matches); 
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.1.2) Gecko/20090729 Firefox/3.5.2 GTB5');
       

        $cook = str_replace(' ','',str_replace(',','',str_replace('\'','', $matches[0][0]))); 
        $value = str_replace(' ','',str_replace(',','',str_replace('\'','', $matches[0][1]))); 
        curl_setopt($ch, CURLOPT_COOKIE, "$cook=$value");
        $html = curl_exec($ch);
       return $html;
    }
    
   
    
}
