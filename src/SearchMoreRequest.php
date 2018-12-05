<?php

namespace Nzolt\NetSuite;

class SearchMoreRequest
{

    /**
     * @var int $pageIndex
     */
    protected $pageIndex = null;

    /**
     * @param int $pageIndex
     */
    public function __construct($pageIndex)
    {
      $this->pageIndex = $pageIndex;
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
     * @return \Nzolt\NetSuite\SearchMoreRequest
     */
    public function setPageIndex($pageIndex)
    {
      $this->pageIndex = $pageIndex;
      return $this;
    }

}
