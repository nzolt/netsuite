<?php

namespace Nzolt\NetSuite;

class JobCreditCardsList
{

    /**
     * @var JobCreditCards[] $creditCards
     */
    protected $creditCards = null;

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
     * @return JobCreditCards[]
     */
    public function getCreditCards()
    {
      return $this->creditCards;
    }

    /**
     * @param JobCreditCards[] $creditCards
     * @return \Nzolt\NetSuite\JobCreditCardsList
     */
    public function setCreditCards(array $creditCards = null)
    {
      $this->creditCards = $creditCards;
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
     * @return \Nzolt\NetSuite\JobCreditCardsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
