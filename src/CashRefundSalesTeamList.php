<?php

namespace Nzolt\NetSuite;

class CashRefundSalesTeamList
{

    /**
     * @var CashRefundSalesTeam[] $salesTeam
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
     * @return CashRefundSalesTeam[]
     */
    public function getSalesTeam()
    {
      return $this->salesTeam;
    }

    /**
     * @param CashRefundSalesTeam[] $salesTeam
     * @return \Nzolt\NetSuite\CashRefundSalesTeamList
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
     * @return \Nzolt\NetSuite\CashRefundSalesTeamList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
