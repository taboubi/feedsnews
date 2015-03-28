<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Tunivisions implements ParserFeedInterface
{
    protected $item ;
    public function getImage(){
        
        $doc = new \DOMDocument();
        $doc->loadHTML((string)$this->item->getDescription());
        $imageTags = $doc->getElementsByTagName('img');

        foreach($imageTags as $tag) {
            return $tag->getAttribute('src');
        }
        
    }
     public function getDescription(){
        
        return strip_tags((string)$this->item ->getDescription(), '<p><br><div>') ;
        
    }
    
    public function setItem($item){
        $this->item = $item;
    }
    
}
