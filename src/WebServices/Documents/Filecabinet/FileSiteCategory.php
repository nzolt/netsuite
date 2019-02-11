<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Documents\Filecabinet;

/**
 * FileSiteCategory
 */
class FileSiteCategory {

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var RecordRef
     */
    public $category;

    /**
     * @access public
     * @var string
     */
    protected $categoryDescription;

    /**
     * @access public
     * @var RecordRef
     */
    public $website;

    static $paramtypesmap = array(
    	"isDefault" => "boolean",
    	"category" => "RecordRef",
    	"categoryDescription" => "string",
    	"website" => "RecordRef",
    );

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return FileSiteCategory
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
     * @return FileSiteCategory
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