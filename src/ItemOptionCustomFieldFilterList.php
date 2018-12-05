<?php

namespace Nzolt\NetSuite;

class ItemOptionCustomFieldFilterList
{

    /**
     * @var ItemOptionCustomFieldFilter[] $filter
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
     * @return ItemOptionCustomFieldFilter[]
     */
    public function getFilter()
    {
      return $this->filter;
    }

    /**
     * @param ItemOptionCustomFieldFilter[] $filter
     * @return \Nzolt\NetSuite\ItemOptionCustomFieldFilterList
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
     * @return \Nzolt\NetSuite\ItemOptionCustomFieldFilterList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
