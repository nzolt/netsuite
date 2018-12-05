<?php

namespace Nzolt\NetSuite;

class CustomerCreditCardsList
{

    /**
     * @var CustomerCreditCards[] $creditCards
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
     * @return CustomerCreditCards[]
     */
    public function getCreditCards()
    {
      return $this->creditCards;
    }

    /**
     * @param CustomerCreditCards[] $creditCards
     * @return \Nzolt\NetSuite\CustomerCreditCardsList
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
     * @return \Nzolt\NetSuite\CustomerCreditCardsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
