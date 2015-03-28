<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Alchourouk implements ParserFeedInterface
{
    protected $item ;
    protected $html ; 
    public function getImage(){
        
       $doc = new \DOMDocument();
        $doc->loadHTML((string)$this->item->getDescription());
        $imageTags = $doc->getElementsByTagName('img');

        foreach($imageTags as $tag) {
            return $tag->getAttribute('src');
        }
    }
     public function getDescription(){
        
          preg_match_all('/<div class="conteneur_restearticle" id="txt">(.*?)<div class="auteur">/s', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches);   
        
       if(isset($matches[1][0])){
           
            return 
            strip_tags($matches[1][0], '<p>') ;
        }
        return null ; 
        
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = file_get_contents($this->item->getLink());
    }
    
}
