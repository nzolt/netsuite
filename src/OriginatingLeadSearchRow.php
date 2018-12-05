<?php

namespace Nzolt\NetSuite;

class OriginatingLeadSearchRow extends SearchRow
{

    /**
     * @var OriginatingLeadSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OriginatingLeadSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OriginatingLeadSearchRowBasic $basic
     * @return \Nzolt\NetSuite\OriginatingLeadSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\OriginatingLeadSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
