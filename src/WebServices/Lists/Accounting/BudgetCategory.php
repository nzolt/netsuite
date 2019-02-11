<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * BudgetCategory
 */
class BudgetCategory extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $budgetType;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"budgetType" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return BudgetCategory
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
     * Set budgetType
     *
     * @param boolean $budgetType
     * @return BudgetCategory
     */
    public function setBudgetType($budgetType) {
        $this->budgetType = $budgetType;
        return $this;
    }

    /**
     * Get budgetType
     *
     * @return boolean
     */
    public function getBudgetType() {
        return $this->budgetType;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return BudgetCategory
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
     * Set internalId
     *
     * @param string $internalId
     * @return BudgetCategory
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

}