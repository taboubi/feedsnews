<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


namespace Tunisie\FeedsBundle\Entity;



class Tunimedia implements ParserFeedInterface
{
    protected $item ;
    protected $html ; 
    public function getImage(){

         preg_match_all('/<img class="irc_mut"(.*?)src="(.*?)"(.*?)>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches);  

       if(isset($matches[2][0])){
           
             
             return $matches[2][0];
        }else{
             preg_match_all('/<div class="separator" style="clear: both; text-align: center;">(.*?)<\/div>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches); 
             if(isset($matches[1][0])){
                 $doc = new \DOMDocument();
                    $doc->loadHTML($matches[1][0]);
                    $imageTags = $doc->getElementsByTagName('img');

                    foreach($imageTags as $tag) {
                        return $tag->getAttribute('src');
                    }
            }else{
                preg_match_all('/<div dir="rtl" style="text-align: right;">(.*?)<\/div>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches); 
                 if(isset($matches[1][0])){
                     $doc = new \DOMDocument();
                    $doc->loadHTML($matches[1][0]);
                    $imageTags = $doc->getElementsByTagName('img');

                    foreach($imageTags as $tag) {
                        return $tag->getAttribute('src');
                    }
                    
                }
            }
        }
        
        return null ;
        
        
    }
     public function getDescription(){
         
        preg_match_all('/<div id="text_article">(.*?)<\/div>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches); 
        if(isset($matches[1][0])){
           
           return strip_tags($matches[1][0], '<p><br><div>') ;
        }else{
             preg_match_all('/<span data-measureme="1"><span class="">(.*?)<\/span><\/span>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches); 
            if(isset($matches[1][0])){
                 return strip_tags($matches[1][0], '<p><br><div>') ;
            }else{
                preg_match_all('/<div dir="rtl" style="text-align: right;">(.*?)<\/div>/i', preg_replace("/(\r\n|\n|\r)/", "", $this->html), $matches); 
                 if(isset($matches[1][0])){
                    return strip_tags($matches[1][0], '<p><br><div>') ;
                }
            }
            
        }
        return null;

       
    }
    
    public function setItem($item){
        $this->item = $item;
        $this->html = file_get_contents($this->item->getLink());
    }
    
}
