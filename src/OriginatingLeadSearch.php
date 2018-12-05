<?php

namespace Nzolt\NetSuite;

class OriginatingLeadSearch extends SearchRecord
{

    /**
     * @var OriginatingLeadSearchBasic $basic
     */
    protected $basic = null;

    /**
     * @var CustomSearchJoin[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return OriginatingLeadSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param OriginatingLeadSearchBasic $basic
     * @return \Nzolt\NetSuite\OriginatingLeadSearch
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return CustomSearchJoin[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchJoin[] $customSearchJoin
     * @return \Nzolt\NetSuite\OriginatingLeadSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
