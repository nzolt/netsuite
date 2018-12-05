<?php

namespace Nzolt\NetSuite;

class FairValuePriceSearchRow extends SearchRow
{

    /**
     * @var FairValuePriceSearchRowBasic $basic
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
     * @return FairValuePriceSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param FairValuePriceSearchRowBasic $basic
     * @return \Nzolt\NetSuite\FairValuePriceSearchRow
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
     * @return \Nzolt\NetSuite\FairValuePriceSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
