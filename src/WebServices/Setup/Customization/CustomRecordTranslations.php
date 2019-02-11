<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * CustomRecordTranslations
 */
class CustomRecordTranslations {

    /**
     * @access public
     * @var Language
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
    protected $label;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"language" => "string",
    	"label" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return CustomRecordTranslations
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
     * Set language
     *
     * @param string $language
     * @return CustomRecordTranslations
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
     * Set label
     *
     * @param string $label
     * @return CustomRecordTranslations
     */
    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel() {
        return $this->label;
    }

}