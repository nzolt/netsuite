<?php

namespace Nzolt\NetSuite;

class SalesTeamList
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
     * @return \Nzolt\NetSuite\SalesTeamList
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
     * @return \Nzolt\NetSuite\SalesTeamList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
