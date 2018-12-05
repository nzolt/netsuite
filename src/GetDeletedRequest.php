<?php

namespace Nzolt\NetSuite;

class GetDeletedRequest
{

    /**
     * @var GetDeletedFilter $getDeletedFilter
     */
    protected $getDeletedFilter = null;

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @param GetDeletedFilter $getDeletedFilter
     * @param int $pageIndex
     */
    public function __construct($getDeletedFilter, $pageIndex)
    {
      $this->getDeletedFilter = $getDeletedFilter;
      $this->pageIndex = $pageIndex;
    }

    /**
     * @return GetDeletedFilter
     */
    public function getGetDeletedFilter()
    {
      return $this->getDeletedFilter;
    }

    /**
     * @param GetDeletedFilter $getDeletedFilter
     * @return \Nzolt\NetSuite\GetDeletedRequest
     */
    public function setGetDeletedFilter($getDeletedFilter)
    {
      $this->getDeletedFilter = $getDeletedFilter;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageIndex()
    {
      return $this->pageIndex;
    }

    /**
     * @param int $pageIndex
     * @return \Nzolt\NetSuite\GetDeletedRequest
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

}
