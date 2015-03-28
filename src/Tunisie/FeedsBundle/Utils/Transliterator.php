<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Tunisie\FeedsBundle\Utils ;
 
class Transliterator {
    public static function transliterate($text, $separator, $object){
        return \Gedmo\Sluggable\Util\Urlizer::urlize($text, $separator);
    }
}