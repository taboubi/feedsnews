<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tunisie\FeedsBundle\Listener;
 
class SluggableListener extends \Gedmo\Sluggable\SluggableListener{
    
    public function __construct(){
        $this->setTransliterator(array('\Tunisie\FeedsBundle\Utils\Transliterator', 'transliterate'));
    }
}