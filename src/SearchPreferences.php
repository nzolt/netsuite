<?php

namespace Nzolt\NetSuite;

class SearchPreferences
{

    /**
     * @var boolean $bodyFieldsOnly
     */
    protected $bodyFieldsOnly = null;

    /**
     * @var boolean $returnSearchColumns
     */
    protected $returnSearchColumns = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getBodyFieldsOnly()
    {
      return $this->bodyFieldsOnly;
    }

    /**
     * @param boolean $bodyFieldsOnly
     * @return \Nzolt\NetSuite\SearchPreferences
     */
    public function setBodyFieldsOnly($bodyFieldsOnly)
    {
      $this->bodyFieldsOnly = $bodyFieldsOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReturnSearchColumns()
    {
      return $this->returnSearchColumns;
    }

    /**
     * @param boolean $returnSearchColumns
     * @return \Nzolt\NetSuite\SearchPreferences
     */
    public function setReturnSearchColumns($returnSearchColumns)
    {
      $this->returnSearchColumns = $returnSearchColumns;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \Nzolt\NetSuite\SearchPreferences
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
