<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * LanguageValue
 */
class LanguageValue {

    /**
     * @access public
     * @var Language
     */
    protected $locale;

    /**
     * @access public
     * @var string
     */
    protected $value;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"value" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return LanguageValue
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
     * Set value
     *
     * @param string $value
     * @return LanguageValue
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue() {
        return $this->value;
    }

}