<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * SiteCategory_accounting
 */
class SiteCategory_accounting {

    /**
     * @access public
     * @var RecordRef
     */
    public $website;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var string
     */
    protected $categoryDescription;

    static $paramtypesmap = array(
    	"website" => "RecordRef",
    	"category" => "RecordRef",
    	"isDefault" => "boolean",
    	"categoryDescription" => "string",
    );

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return SiteCategory_accounting
     */
    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault() {
        return $this->isDefault;
    }


    /**
     * Set categoryDescription
     *
     * @param string $categoryDescription
     * @return SiteCategory_accounting
     */
    public function setCategoryDescription($categoryDescription) {
        $this->categoryDescription = $categoryDescription;
        return $this;
    }

    /**
     * Get categoryDescription
     *
     * @return string
     */
    public function getCategoryDescription() {
        return $this->categoryDescription;
    }

}