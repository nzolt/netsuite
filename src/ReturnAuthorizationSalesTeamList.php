<?php

namespace Nzolt\NetSuite;

class ReturnAuthorizationSalesTeamList
{

    /**
     * @var ReturnAuthorizationSalesTeam[] $salesTeam
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
     * @return ReturnAuthorizationSalesTeam[]
     */
    public function getSalesTeam()
    {
      return $this->salesTeam;
    }

    /**
     * @param ReturnAuthorizationSalesTeam[] $salesTeam
     * @return \Nzolt\NetSuite\ReturnAuthorizationSalesTeamList
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
     * @return \Nzolt\NetSuite\ReturnAuthorizationSalesTeamList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
