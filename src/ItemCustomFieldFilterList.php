<?php

namespace Nzolt\NetSuite;

class ItemCustomFieldFilterList
{

    /**
     * @var ItemCustomFieldFilter[] $filter
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
     * @return ItemCustomFieldFilter[]
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param ItemCustomFieldFilter[] $filter
     * @return \Nzolt\NetSuite\ItemCustomFieldFilterList
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
     * @return \Nzolt\NetSuite\ItemCustomFieldFilterList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
