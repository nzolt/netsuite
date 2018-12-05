<?php

namespace Nzolt\NetSuite;

class CustomRecordCustomFieldFilterList
{

    /**
     * @var CustomRecordCustomFieldFilter[] $filter
     */
    protected $filter = null;

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
     * @return CustomRecordCustomFieldFilter[]
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param CustomRecordCustomFieldFilter[] $filter
     * @return \Nzolt\NetSuite\CustomRecordCustomFieldFilterList
     */
    public function setFilter(array $filter = null)
    {
      $this->filter = $filter;
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
     * @return \Nzolt\NetSuite\CustomRecordCustomFieldFilterList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
