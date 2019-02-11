<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomListTranslationsList
 */
class CustomListTranslationsList {

    /**
     * @access public
     * @var CustomListTranslations[]
     */
    public $translations;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"translations" => "CustomListTranslations[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return CustomListTranslationsList
     */
    public function setReplaceAll($replaceAll) {
        $this->replaceAll = $replaceAll;
        return $this;
    }

    /**
     * Get replaceAll
     *
     * @return boolean
     */
    public function getReplaceAll() {
        return $this->replaceAll;
    }

}