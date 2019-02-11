<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * CustomListTranslations
 */
class CustomListTranslations {

    /**
     * @access public
     * @var Language
     */
    protected $locale;

    /**
     * @access public
     * @var string
     */
    protected $localeDescription;

    /**
     * @access public
     * @var string
     */
    protected $name;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"localeDescription" => "string",
    	"name" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return CustomListTranslations
     */
    public function setLocale(Language $locale) {
        $this->locale = $locale;
        return $this;
    }

    /**
     * Get locale
     *
     * @return Language
     */
    public function getLocale() {
        return $this->locale;
    }


    /**
     * Set localeDescription
     *
     * @param string $localeDescription
     * @return CustomListTranslations
     */
    public function setLocaleDescription($localeDescription) {
        $this->localeDescription = $localeDescription;
        return $this;
    }

    /**
     * Get localeDescription
     *
     * @return string
     */
    public function getLocaleDescription() {
        return $this->localeDescription;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return CustomListTranslations
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