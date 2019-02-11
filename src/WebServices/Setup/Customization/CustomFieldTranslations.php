<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Common\Types\Language;

/**
 * CustomFieldTranslations
 */
class CustomFieldTranslations {

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
    protected $label;

    /**
     * @access public
     * @var string
     */
    protected $help;

    static $paramtypesmap = array(
    	"locale" => "Language",
    	"localeDescription" => "string",
    	"label" => "string",
    	"help" => "string",
    );

    /**
     * Set locale
     *
     * @param Language $locale
     * @return CustomFieldTranslations
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
     * @return CustomFieldTranslations
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
     * Set label
     *
     * @param string $label
     * @return CustomFieldTranslations
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


    /**
     * Set help
     *
     * @param string $help
     * @return CustomFieldTranslations
     */
    public function setHelp($help) {
        $this->help = $help;
        return $this;
    }

    /**
     * Get help
     *
     * @return string
     */
    public function getHelp() {
        return $this->help;
    }

}