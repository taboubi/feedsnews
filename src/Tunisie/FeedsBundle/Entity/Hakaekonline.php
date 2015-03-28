<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Hakaekonline implements ParserFeedInterface
{
    protected $item ;
    protected $html ; 
    public function getImage(){
        
        
        preg_match_all('/<div id="articles_print" class="border_articles_body border_articles">(.*?)<span class="title_home_desc size_16">/s', $this->html, $matches);  
        if(isset($matches[1][0])){
             $doc = new \DOMDocument();
            $doc->loadHTML($matches[1][0]);
            $imageTags = $doc->getElementsByTagName('img');

            foreach($imageTags as $tag) {
                if($tag->hasAttribute('title')){
                return 'http://www.hakaekonline.com/'.$tag->getAttribute('src');
                }
            }
        }
        
    }
     public function getDescription(){
        
        preg_match_all('/<div id="text_article">(.*?)<\/div>/s', $this->html, $matches);
        return strip_tags($matches[1][0], '<p><br>');
        
                
        
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = file_get_contents($this->item->getLink());
    }
    
}
