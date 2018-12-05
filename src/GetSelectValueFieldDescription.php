<?php

namespace Nzolt\NetSuite;

class GetSelectValueFieldDescription
{

    /**
     * @var RecordType $recordType
     */
    protected $recordType = null;

    /**
     * @var RecordRef $customRecordType
     */
    protected $customRecordType = null;

    /**
     * @var RecordRef $customTransactionType
     */
    protected $customTransactionType = null;

    /**
     * @var string $sublist
     */
    protected $sublist = null;

    /**
     * @var string $field
     */
    protected $field = null;

    /**
     * @var RecordRef $customForm
     */
    protected $customForm = null;

    /**
     * @var GetSelectValueFilter $filter
     */
    protected $filter = null;

    /**
     * @var GetSelectFilterByFieldValueList $filterByValueList
     */
    protected $filterByValueList = null;

    /**
     * @param string $field
     */
    public function __construct($field)
    {
      $this->field = $field;
    }

    /**
     * @return RecordType
     */
    public function getRecordType()
    {
      return $this->recordType;
    }

    /**
     * @param RecordType $recordType
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setRecordType($recordType)
    {
      $this->recordType = $recordType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomRecordType()
    {
      return $this->customRecordType;
    }

    /**
     * @param RecordRef $customRecordType
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setCustomRecordType($customRecordType)
    {
      $this->customRecordType = $customRecordType;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCustomTransactionType()
    {
      return $this->customTransactionType;
    }

    /**
     * @param RecordRef $customTransactionType
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setCustomTransactionType($customTransactionType)
    {
      $this->customTransactionType = $customTransactionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSublist()
    {
      return $this->sublist;
    }

    /**
     * @param string $sublist
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setSublist($sublist)
    {
      $this->sublist = $sublist;
      return $this;
    }

    /**
     * @return string
     */
    public function getField()
    {
      return $this->field;
    }

    /**
     * @param string $field
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setField($field)
    {
      $this->field = $field;
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
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setCustomForm($customForm)
    {
      $this->customForm = $customForm;
      return $this;
    }

    /**
     * @return GetSelectValueFilter
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param GetSelectValueFilter $filter
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setFilter($filter)
    {
      $this->filter = $filter;
      return $this;
    }

    /**
     * @return GetSelectFilterByFieldValueList
     */
    public function getFilterByValueList()
    {
      return $this->filterByValueList;
    }

    /**
     * @param GetSelectFilterByFieldValueList $filterByValueList
     * @return \Nzolt\NetSuite\GetSelectValueFieldDescription
     */
    public function setFilterByValueList($filterByValueList)
    {
      $this->filterByValueList = $filterByValueList;
      return $this;
    }

}
