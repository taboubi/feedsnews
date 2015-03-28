<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Jawharafm implements ParserFeedInterface
{
    protected $item ;
    protected $html ; 
    public function getImage(){
        
       preg_match_all('/<div  class="img_dtlact">(.*?)<\/div>/s', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches);    
        if(isset($matches[1][0])){
         $doc = new \DOMDocument();
         $doc->loadHTML($matches[1][0]);
         $imageTags = $doc->getElementsByTagName('img');

         foreach($imageTags as $tag) {
             return 'http://www.jawharafm.net'.$tag->getAttribute('src');
         }
        } 
    }
     public function getDescription(){
        
          preg_match_all('/<div class="article_text">(.*?)<\/div>/s', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches);   
        
       if(isset($matches[1][0])){
           
            return 
            strip_tags($matches[1][0], '<p><br><div>') ;
        }
        return null ; 
        
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = file_get_contents($this->item->getLink());
    }
    
}
