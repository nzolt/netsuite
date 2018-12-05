<?php

namespace Nzolt\NetSuite;

class InventoryDetail extends Record
{

    /**
     * @var InventoryAssignmentList $inventoryAssignmentList
     */
    protected $inventoryAssignmentList = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return InventoryAssignmentList
     */
    public function getInventoryAssignmentList()
    {
      return $this->inventoryAssignmentList;
    }

    /**
     * @param InventoryAssignmentList $inventoryAssignmentList
     * @return \Nzolt\NetSuite\InventoryDetail
     */
    public function setInventoryAssignmentList($inventoryAssignmentList)
    {
      $this->inventoryAssignmentList = $inventoryAssignmentList;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomForm()
    {
      return $this->customForm;
    }

    /**
     * @param RecordRef $customForm
     * @return \Nzolt\NetSuite\InventoryDetail
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

}
