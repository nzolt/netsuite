<?php

namespace Nzolt\NetSuite;

class FairValuePriceSearch extends SearchRecord
{

    /**
     * @var FairValuePriceSearchBasic $basic
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
     * @return FairValuePriceSearchBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param FairValuePriceSearchBasic $basic
     * @return \Nzolt\NetSuite\FairValuePriceSearch
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
     * @return \Nzolt\NetSuite\FairValuePriceSearch
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
