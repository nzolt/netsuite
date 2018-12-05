<?php

namespace Nzolt\NetSuite;

class InventoryAssignmentList
{

    /**
     * @var InventoryAssignment[] $inventoryAssignment
     */
    protected $inventoryAssignment = null;

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
     * @return InventoryAssignment[]
     */
    public function getInventoryAssignment()
    {
      return $this->inventoryAssignment;
    }

    /**
     * @param InventoryAssignment[] $inventoryAssignment
     * @return \Nzolt\NetSuite\InventoryAssignmentList
     */
    public function setInventoryAssignment(array $inventoryAssignment = null)
    {
      $this->inventoryAssignment = $inventoryAssignment;
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
     * @return \Nzolt\NetSuite\InventoryAssignmentList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
