<?php

namespace Nzolt\NetSuite;

class InventoryCostRevaluationCostComponentList
{

    /**
     * @var InventoryCostRevaluationCostComponent[] $costComponent
     */
    protected $costComponent = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param boolean $replaceAll
     */
    public function __construct($replaceAll)
    {
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return InventoryCostRevaluationCostComponent[]
     */
    public function getCostComponent()
    {
      return $this->costComponent;
    }

    /**
     * @param InventoryCostRevaluationCostComponent[] $costComponent
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponentList
     */
    public function setCostComponent(array $costComponent = null)
    {
      $this->costComponent = $costComponent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\InventoryCostRevaluationCostComponentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
