<?php

namespace Nzolt\NetSuite;

class PaycheckJournalCompanyTaxList
{

    /**
     * @var PaycheckJournalCompanyTax[] $paycheckJournalCompanyTax
     */
    protected $paycheckJournalCompanyTax = null;

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
     * @return PaycheckJournalCompanyTax[]
     */
    public function getPaycheckJournalCompanyTax()
    {
      return $this->paycheckJournalCompanyTax;
    }

    /**
     * @param PaycheckJournalCompanyTax[] $paycheckJournalCompanyTax
     * @return \Nzolt\NetSuite\PaycheckJournalCompanyTaxList
     */
    public function setPaycheckJournalCompanyTax(array $paycheckJournalCompanyTax = null)
    {
      $this->paycheckJournalCompanyTax = $paycheckJournalCompanyTax;
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
     * @return \Nzolt\NetSuite\PaycheckJournalCompanyTaxList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
