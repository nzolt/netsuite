<?php

namespace Nzolt\NetSuite;

class ItemCustomFieldFilter
{

    /**
     * @var RecordRef $fldFilter
     */
    protected $fldFilter = null;

    /**
     * @var boolean $fldFilterChecked
     */
    protected $fldFilterChecked = null;

    /**
     * @var CustomizationFilterCompareType $fldFilterCompareType
     */
    protected $fldFilterCompareType = null;

    /**
     * @var string $fldFilterVal
     */
    protected $fldFilterVal = null;

    /**
     * @var FldFilterSelList $fldFilterSelList
     */
    protected $fldFilterSelList = null;

    /**
     * @var boolean $fldFilterNotNull
     */
    protected $fldFilterNotNull = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getFldFilter()
    {
      return $this->fldFilter;
    }

    /**
     * @param RecordRef $fldFilter
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilter($fldFilter)
    {
      $this->fldFilter = $fldFilter;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFldFilterChecked()
    {
      return $this->fldFilterChecked;
    }

    /**
     * @param boolean $fldFilterChecked
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilterChecked($fldFilterChecked)
    {
      $this->fldFilterChecked = $fldFilterChecked;
      return $this;
    }

    /**
     * @return CustomizationFilterCompareType
     */
    public function getFldFilterCompareType()
    {
      return $this->fldFilterCompareType;
    }

    /**
     * @param CustomizationFilterCompareType $fldFilterCompareType
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilterCompareType($fldFilterCompareType)
    {
      $this->fldFilterCompareType = $fldFilterCompareType;
      return $this;
    }

    /**
     * @return string
     */
    public function getFldFilterVal()
    {
      return $this->fldFilterVal;
    }

    /**
     * @param string $fldFilterVal
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilterVal($fldFilterVal)
    {
      $this->fldFilterVal = $fldFilterVal;
      return $this;
    }

    /**
     * @return FldFilterSelList
     */
    public function getFldFilterSelList()
    {
      return $this->fldFilterSelList;
    }

    /**
     * @param FldFilterSelList $fldFilterSelList
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilterSelList($fldFilterSelList)
    {
      $this->fldFilterSelList = $fldFilterSelList;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFldFilterNotNull()
    {
      return $this->fldFilterNotNull;
    }

    /**
     * @param boolean $fldFilterNotNull
     * @return \Nzolt\NetSuite\ItemCustomFieldFilter
     */
    public function setFldFilterNotNull($fldFilterNotNull)
    {
      $this->fldFilterNotNull = $fldFilterNotNull;
      return $this;
    }

}
