<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Core\RecordRefList;
use Nzolt\NetSuite\WebServices\Platform\Core\CustomFieldList;

/**
 * Department
 */
class Department extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $includeChildren;

    /**
     * @access public
     * @var RecordRef
     */
    public $parent;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var ClassTranslationList
     */
    protected $classTranslationList;

    /**
     * @access public
     * @var RecordRefList
     */
    protected $subsidiaryList;

    /**
     * @access public
     * @var CustomFieldList
     */
    protected $customFieldList;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"includeChildren" => "boolean",
    	"parent" => "RecordRef",
    	"isInactive" => "boolean",
    	"classTranslationList" => "ClassTranslationList",
    	"subsidiaryList" => "RecordRefList",
    	"customFieldList" => "CustomFieldList",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return Department
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


    /**
     * Set includeChildren
     *
     * @param boolean $includeChildren
     * @return Department
     */
    public function setIncludeChildren($includeChildren) {
        $this->includeChildren = $includeChildren;
        return $this;
    }

    /**
     * Get includeChildren
     *
     * @return boolean
     */
    public function getIncludeChildren() {
        return $this->includeChildren;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return Department
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set classTranslationList
     *
     * @param ClassTranslationList $classTranslationList
     * @return Department
     */
    public function setClassTranslationList(ClassTranslationList $classTranslationList) {
        $this->classTranslationList = $classTranslationList;
        return $this;
    }

    /**
     * Get classTranslationList
     *
     * @return ClassTranslationList
     */
    public function getClassTranslationList() {
        return $this->classTranslationList;
    }


    /**
     * Set subsidiaryList
     *
     * @param RecordRefList $subsidiaryList
     * @return Department
     */
    public function setSubsidiaryList(RecordRefList $subsidiaryList) {
        $this->subsidiaryList = $subsidiaryList;
        return $this;
    }

    /**
     * Get subsidiaryList
     *
     * @return RecordRefList
     */
    public function getSubsidiaryList() {
        return $this->subsidiaryList;
    }


    /**
     * Set customFieldList
     *
     * @param CustomFieldList $customFieldList
     * @return Department
     */
    public function setCustomFieldList(CustomFieldList $customFieldList) {
        $this->customFieldList = $customFieldList;
        return $this;
    }

    /**
     * Get customFieldList
     *
     * @return CustomFieldList
     */
    public function getCustomFieldList() {
        return $this->customFieldList;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return Department
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return Department
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}