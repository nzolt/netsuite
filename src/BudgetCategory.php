<?php

namespace Nzolt\NetSuite;

class BudgetCategory extends Record
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $budgetType
     */
    protected $budgetType = null;

    /**
     * @var boolean $isInactive
     */
    protected $isInactive = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @param string $internalId
     */
    public function __construct($internalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\BudgetCategory
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBudgetType()
    {
      return $this->budgetType;
    }

    /**
     * @param boolean $budgetType
     * @return \Nzolt\NetSuite\BudgetCategory
     */
    public function setBudgetType($budgetType)
    {
      $this->budgetType = $budgetType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsInactive()
    {
      return $this->isInactive;
    }

    /**
     * @param boolean $isInactive
     * @return \Nzolt\NetSuite\BudgetCategory
     */
    public function setIsInactive($isInactive)
    {
      $this->isInactive = $isInactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\BudgetCategory
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

}
