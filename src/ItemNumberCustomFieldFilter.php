<?php

namespace Nzolt\NetSuite;

class ItemNumberCustomFieldFilter
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
     * @var boolean $fldFilterNotNull
     */
    protected $fldFilterNotNull = null;

    /**
     * @var boolean $fldfilterNull
     */
    protected $fldfilterNull = null;

    /**
     * @var RecordRef $fldCompareField
     */
    protected $fldCompareField = null;

    
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
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
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
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
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
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
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
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
     */
    public function setFldFilterVal($fldFilterVal)
    {
      $this->fldFilterVal = $fldFilterVal;
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
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
     */
    public function setFldFilterNotNull($fldFilterNotNull)
    {
      $this->fldFilterNotNull = $fldFilterNotNull;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFldfilterNull()
    {
      return $this->fldfilterNull;
    }

    /**
     * @param boolean $fldfilterNull
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
     */
    public function setFldfilterNull($fldfilterNull)
    {
      $this->fldfilterNull = $fldfilterNull;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getFldCompareField()
    {
      return $this->fldCompareField;
    }

    /**
     * @param RecordRef $fldCompareField
     * @return \Nzolt\NetSuite\ItemNumberCustomFieldFilter
     */
    public function setFldCompareField($fldCompareField)
    {
      $this->fldCompareField = $fldCompareField;
      return $this;
    }

}
