<?php

namespace Nzolt\NetSuite;

class PaycheckJournalDeductionList
{

    /**
     * @var PaycheckJournalDeduction[] $paycheckJournalDeduction
     */
    protected $paycheckJournalDeduction = null;

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
     * @return PaycheckJournalDeduction[]
     */
    public function getPaycheckJournalDeduction()
    {
      return $this->paycheckJournalDeduction;
    }

    /**
     * @param PaycheckJournalDeduction[] $paycheckJournalDeduction
     * @return \Nzolt\NetSuite\PaycheckJournalDeductionList
     */
    public function setPaycheckJournalDeduction(array $paycheckJournalDeduction = null)
    {
      $this->paycheckJournalDeduction = $paycheckJournalDeduction;
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
     * @return \Nzolt\NetSuite\PaycheckJournalDeductionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
