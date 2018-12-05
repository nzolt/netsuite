<?php

namespace Nzolt\NetSuite;

class CrmCustomFieldFilterList
{

    /**
     * @var CrmCustomFieldFilter[] $filter
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
     * @return CrmCustomFieldFilter[]
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param CrmCustomFieldFilter[] $filter
     * @return \Nzolt\NetSuite\CrmCustomFieldFilterList
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
     * @return \Nzolt\NetSuite\CrmCustomFieldFilterList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
