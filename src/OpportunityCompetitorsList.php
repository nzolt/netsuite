<?php

namespace Nzolt\NetSuite;

class OpportunityCompetitorsList
{

    /**
     * @var OpportunityCompetitors[] $competitors
     */
    protected $competitors = null;

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
     * @return OpportunityCompetitors[]
     */
    public function getCompetitors()
    {
      return $this->competitors;
    }

    /**
     * @param OpportunityCompetitors[] $competitors
     * @return \Nzolt\NetSuite\OpportunityCompetitorsList
     */
    public function setCompetitors(array $competitors = null)
    {
      $this->competitors = $competitors;
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
     * @return \Nzolt\NetSuite\OpportunityCompetitorsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
