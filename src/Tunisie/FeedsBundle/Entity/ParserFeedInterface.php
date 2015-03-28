<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// src/Acme/StoreBundle/Entity/Product.php
namespace Tunisie\FeedsBundle\Entity;



/**
 * @ORM\Entity
 * @ORM\Table(name="feed")
 */
Interface ParserFeedInterface
{
    
    public function getImage();
    public function getDescription();
    public function setItem($item);
    
}
