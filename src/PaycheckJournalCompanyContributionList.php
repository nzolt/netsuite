<?php

namespace Nzolt\NetSuite;

class PaycheckJournalCompanyContributionList
{

    /**
     * @var PaycheckJournalCompanyContribution[] $paycheckJournalCompanyContribution
     */
    protected $paycheckJournalCompanyContribution = null;

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
     * @return PaycheckJournalCompanyContribution[]
     */
    public function getPaycheckJournalCompanyContribution()
    {
      return $this->paycheckJournalCompanyContribution;
    }

    /**
     * @param PaycheckJournalCompanyContribution[] $paycheckJournalCompanyContribution
     * @return \Nzolt\NetSuite\PaycheckJournalCompanyContributionList
     */
    public function setPaycheckJournalCompanyContribution(array $paycheckJournalCompanyContribution = null)
    {
      $this->paycheckJournalCompanyContribution = $paycheckJournalCompanyContribution;
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
     * @return \Nzolt\NetSuite\PaycheckJournalCompanyContributionList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
