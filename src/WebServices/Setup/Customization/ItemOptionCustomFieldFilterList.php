<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * ItemOptionCustomFieldFilterList
 */
class ItemOptionCustomFieldFilterList {

    /**
     * @access public
     * @var ItemOptionCustomFieldFilter[]
     */
    public $filter;

    /**
     * @access public
     * @var boolean
     */
    protected $replaceAll;

    static $paramtypesmap = array(
    	"filter" => "ItemOptionCustomFieldFilter[]",
    	"replaceAll" => "boolean",
    );

    /**
     * Set replaceAll
     *
     * @param boolean $replaceAll
     * @return ItemOptionCustomFieldFilterList
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