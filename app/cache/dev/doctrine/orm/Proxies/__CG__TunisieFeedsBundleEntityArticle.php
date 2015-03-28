<?php

namespace Proxies\__CG__\Tunisie\FeedsBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Article extends \Tunisie\FeedsBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'title', 'image', 'url', 'description', 'createdAt', 'feed', 'jarida', '' . "\0" . 'Tunisie\\FeedsBundle\\Entity\\Article' . "\0" . 'slug');
        }

        return array('__isInitialized__', 'id', 'title', 'image', 'url', 'description', 'createdAt', 'feed', 'jarida', '' . "\0" . 'Tunisie\\FeedsBundle\\Entity\\Article' . "\0" . 'slug');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Article $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setFeed(\Tunisie\FeedsBundle\Entity\Feed $feed = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFeed', array($feed));

        return parent::setFeed($feed);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeed', array());

        return parent::getFeed();
    }

    /**
     * {@inheritDoc}
     */
    public function setJarida(\Tunisie\FeedsBundle\Entity\Jarida $feed = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJarida', array($feed));

        return parent::setJarida($feed);
    }

    /**
     * {@inheritDoc}
     */
    public function getJarida()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJarida', array());

        return parent::getJarida();
    }

    /**
     * {@inheritDoc}
     */
    public function setUrl($url)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUrl', array($url));

        return parent::setUrl($url);
    }

    /**
     * {@inheritDoc}
     */
    public function getUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUrl', array());

        return parent::getUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', array());

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($text)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', array($text));

        return parent::setSlug($text);
    }

    /**
     * {@inheritDoc}
     */
    public function url_slug($str, $options = array (
), $language = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'url_slug', array($str, $options, $language));

        return parent::url_slug($str, $options, $language);
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemTitle', array());

        return parent::getFeedItemTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemDescription', array());

        return parent::getFeedItemDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemPubDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemPubDate', array());

        return parent::getFeedItemPubDate();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemRouteName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemRouteName', array());

        return parent::getFeedItemRouteName();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemRouteParameters()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemRouteParameters', array());

        return parent::getFeedItemRouteParameters();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemLink', array());

        return parent::getFeedItemLink();
    }

    /**
     * {@inheritDoc}
     */
    public function getFeedItemUrlAnchor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFeedItemUrlAnchor', array());

        return parent::getFeedItemUrlAnchor();
    }

    /**
     * {@inheritDoc}
     */
    public function truncate($text, $numb, $etc = '...')
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'truncate', array($text, $numb, $etc));

        return parent::truncate($text, $numb, $etc);
    }

}
