<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

/**
 * ClassTranslation
 */
class ClassTranslation {

    /**
     * @access public
     * @var string
     */
    protected $locale;

    /**
     * @access public
     * @var string
     */
    protected $language;

    /**
     * @access public
     * @var string
     */
    protected $name;

    static $paramtypesmap = array(
    	"locale" => "string",
    	"language" => "string",
    	"name" => "string",
    );

    /**
     * Set locale
     *
     * @param string $locale
     * @return ClassTranslation
     */
    public function setLocale($locale) {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale() {
        return $this->locale;
    }


    /**
     * Set language
     *
     * @param string $language
     * @return ClassTranslation
     */
    public function setLanguage($language) {
        $this->language = $language;
        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage() {
        return $this->language;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return ClassTranslation
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }

}