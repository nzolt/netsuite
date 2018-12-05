<?php

namespace Nzolt\NetSuite;

class PaycheckJournalEmployeeTaxList
{

    /**
     * @var PaycheckJournalEmployeeTax[] $paycheckJournalEmployeeTax
     */
    protected $paycheckJournalEmployeeTax = null;

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
     * @return PaycheckJournalEmployeeTax[]
     */
    public function getPaycheckJournalEmployeeTax()
    {
      return $this->paycheckJournalEmployeeTax;
    }

    /**
     * @param PaycheckJournalEmployeeTax[] $paycheckJournalEmployeeTax
     * @return \Nzolt\NetSuite\PaycheckJournalEmployeeTaxList
     */
    public function setPaycheckJournalEmployeeTax(array $paycheckJournalEmployeeTax = null)
    {
      $this->paycheckJournalEmployeeTax = $paycheckJournalEmployeeTax;
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
     * @return \Nzolt\NetSuite\PaycheckJournalEmployeeTaxList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
