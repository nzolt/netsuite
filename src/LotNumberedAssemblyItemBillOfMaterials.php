<?php

namespace Nzolt\NetSuite;

class LotNumberedAssemblyItemBillOfMaterials
{

    /**
     * @var RecordRef $billOfMaterials
     */
    protected $billOfMaterials = null;

    /**
     * @var string $currentRevision
     */
    protected $currentRevision = null;

    /**
     * @var boolean $masterDefault
     */
    protected $masterDefault = null;

    /**
     * @var RecordRefList $defaultForLocationList
     */
    protected $defaultForLocationList = null;

    /**
     * @var string $inactive
     */
    protected $inactive = null;

    /**
     * @var string $memo
     */
    protected $memo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getBillOfMaterials()
    {
      return $this->billOfMaterials;
    }

    /**
     * @param RecordRef $billOfMaterials
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setBillOfMaterials($billOfMaterials)
    {
      $this->billOfMaterials = $billOfMaterials;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrentRevision()
    {
      return $this->currentRevision;
    }

    /**
     * @param string $currentRevision
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setCurrentRevision($currentRevision)
    {
      $this->currentRevision = $currentRevision;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getMasterDefault()
    {
      return $this->masterDefault;
    }

    /**
     * @param boolean $masterDefault
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setMasterDefault($masterDefault)
    {
      $this->masterDefault = $masterDefault;
      return $this;
    }

    /**
     * @return RecordRefList
     */
    public function getDefaultForLocationList()
    {
      return $this->defaultForLocationList;
    }

    /**
     * @param RecordRefList $defaultForLocationList
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setDefaultForLocationList($defaultForLocationList)
    {
      $this->defaultForLocationList = $defaultForLocationList;
      return $this;
    }

    /**
     * @return string
     */
    public function getInactive()
    {
      return $this->inactive;
    }

    /**
     * @param string $inactive
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setInactive($inactive)
    {
      $this->inactive = $inactive;
      return $this;
    }

    /**
     * @return string
     */
    public function getMemo()
    {
      return $this->memo;
    }

    /**
     * @param string $memo
     * @return \Nzolt\NetSuite\LotNumberedAssemblyItemBillOfMaterials
     */
    public function setMemo($memo)
    {
      $this->memo = $memo;
      return $this;
    }

}
