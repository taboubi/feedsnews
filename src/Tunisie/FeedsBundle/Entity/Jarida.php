<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// src/Acme/StoreBundle/Entity/Product.php
namespace Tunisie\FeedsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="jarida")
 */
class Jarida
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    
     /**
     * @ORM\Column(type="string", length=300)
     */
    protected $source;
    
    /**
     * @ORM\Column(type="string", length=300)
     */
    protected $language;
    
    
    /**
     * @ORM\Column(type="string", length=300)
     */
    protected $favicon;
    
    
    /**
     * @ORM\Column(name="last_update", type="datetime", length=300, nullable=true)
     */
    protected $lastUpdate;



    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    protected $isActive;
    
    /**
     * @ORM\Column(type="string", length=300)
     */
    protected $factory;
    
    /**
     * @ORM\OneToMany(targetEntity="Article", mappedBy="feed")
     */
    protected $articles;
    
    
     /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="feeds")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    protected $categorie;

    
    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

   

    /**
     * Set source
     *
     * @param string $source
     * @return Feed
     */
    public function setSource($source)
    {
        $this->source = $source;
    
        return $this;
    }

    /**
     * Get source
     *
     * @return string 
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set language
     *
     * @param string $language
     * @return Feed
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    
        return $this;
    }

    /**
     * Get language
     *
     * @return string 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set favicon
     *
     * @param string $favicon
     * @return Feed
     */
    public function setFavicon($favicon)
    {
        $this->favicon = $favicon;
    
        return $this;
    }

    /**
     * Get favicon
     *
     * @return string 
     */
    public function getFavicon()
    {
        return $this->favicon;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Feed
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;
    
        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Feed
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Add articles
     *
     * @param \Tunisie\FeedsBundle\Entity\Article $articles
     * @return Feed
     */
    public function addArticle(\Tunisie\FeedsBundle\Entity\Article $articles)
    {
        $this->articles[] = $articles;
    
        return $this;
    }

    /**
     * Remove articles
     *
     * @param \Tunisie\FeedsBundle\Entity\Article $articles
     */
    public function removeArticle(\Tunisie\FeedsBundle\Entity\Article $articles)
    {
        $this->articles->removeElement($articles);
    }

    /**
     * Get articles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getArticles()
    {
        return $this->articles;
    }

    /**
     * Set factory
     *
     * @param string $factory
     * @return Feed
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;
    
        return $this;
    }

    /**
     * Get factory
     *
     * @return string 
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * Set categorie
     *
     * @param \Tunisie\FeedsBundle\Entity\Categorie $categorie
     * @return Feed
     */
    public function setCategorie(\Tunisie\FeedsBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;
    
        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Tunisie\FeedsBundle\Entity\Categorie 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
