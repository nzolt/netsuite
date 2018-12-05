<?php

namespace Nzolt\NetSuite;

class OpportunityCompetitors
{

    /**
     * @var RecordRef $competitor
     */
    protected $competitor = null;

    /**
     * @var string $url
     */
    protected $url = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var string $strategy
     */
    protected $strategy = null;

    /**
     * @var boolean $winner
     */
    protected $winner = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getCompetitor()
    {
      return $this->competitor;
    }

    /**
     * @param RecordRef $competitor
     * @return \Nzolt\NetSuite\OpportunityCompetitors
     */
    public function setCompetitor($competitor)
    {
      $this->competitor = $competitor;
      return $this;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return \Nzolt\NetSuite\OpportunityCompetitors
     */
    public function setUrl($url)
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Nzolt\NetSuite\OpportunityCompetitors
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return string
     */
    public function getStrategy()
    {
      return $this->strategy;
    }

    /**
     * @param string $strategy
     * @return \Nzolt\NetSuite\OpportunityCompetitors
     */
    public function setStrategy($strategy)
    {
      $this->strategy = $strategy;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWinner()
    {
      return $this->winner;
    }

    /**
     * @param boolean $winner
     * @return \Nzolt\NetSuite\OpportunityCompetitors
     */
    public function setWinner($winner)
    {
      $this->winner = $winner;
      return $this;
    }

}
