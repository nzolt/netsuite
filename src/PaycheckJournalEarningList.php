<?php

namespace Nzolt\NetSuite;

class PaycheckJournalEarningList
{

    /**
     * @var PaycheckJournalEarning[] $paycheckJournalEarning
     */
    protected $paycheckJournalEarning = null;

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
     * @return PaycheckJournalEarning[]
     */
    public function getPaycheckJournalEarning()
    {
      return $this->paycheckJournalEarning;
    }

    /**
     * @param PaycheckJournalEarning[] $paycheckJournalEarning
     * @return \Nzolt\NetSuite\PaycheckJournalEarningList
     */
    public function setPaycheckJournalEarning(array $paycheckJournalEarning = null)
    {
      $this->paycheckJournalEarning = $paycheckJournalEarning;
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
     * @return \Nzolt\NetSuite\PaycheckJournalEarningList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
