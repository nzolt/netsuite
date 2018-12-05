<?php

namespace Nzolt\NetSuite;

class TransactionBodyCustomFieldFilterList
{

    /**
     * @var TransactionBodyCustomFieldFilter[] $filter
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
     * @return TransactionBodyCustomFieldFilter[]
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param TransactionBodyCustomFieldFilter[] $filter
     * @return \Nzolt\NetSuite\TransactionBodyCustomFieldFilterList
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
     * @return \Nzolt\NetSuite\TransactionBodyCustomFieldFilterList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
