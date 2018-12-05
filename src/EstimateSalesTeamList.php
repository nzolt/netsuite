<?php

namespace Nzolt\NetSuite;

class EstimateSalesTeamList
{

    /**
     * @var EstimateSalesTeam[] $salesTeam
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
     * @return EstimateSalesTeam[]
     */
    public function getSalesTeam()
    {
      return $this->salesTeam;
    }

    /**
     * @param EstimateSalesTeam[] $salesTeam
     * @return \Nzolt\NetSuite\EstimateSalesTeamList
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
     * @return \Nzolt\NetSuite\EstimateSalesTeamList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
