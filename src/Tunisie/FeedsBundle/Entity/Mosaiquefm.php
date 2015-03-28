<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Mosaiquefm implements ParserFeedInterface
{
    protected $item ;
    protected $html ; 
    public function getImage(){
        
        
        preg_match_all('/<img  id="imagecontent"(.*?)src="(.*?)"(.*?)>/i', $this->html, $matches);  
        
        
        return 'http://www.mosaiquefm.net'.$matches[2][0];
        
    }
     public function getDescription(){
        
        
        return strip_tags((string)$this->item ->getDescription(), '<p><br>');
        
                
        
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = file_get_contents($this->item->getLink());
    }
    
}
