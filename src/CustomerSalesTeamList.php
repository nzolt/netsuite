<?php

namespace Nzolt\NetSuite;

class CustomerSalesTeamList
{

    /**
     * @var CustomerSalesTeam[] $salesTeam
     */
    protected $salesTeam = null;

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
     * @return CustomerSalesTeam[]
     */
    public function getSalesTeam()
    {
      return $this->salesTeam;
    }

    /**
     * @param CustomerSalesTeam[] $salesTeam
     * @return \Nzolt\NetSuite\CustomerSalesTeamList
     */
    public function setSalesTeam(array $salesTeam = null)
    {
      $this->salesTeam = $salesTeam;
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
     * @return \Nzolt\NetSuite\CustomerSalesTeamList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
