<?php

namespace Nzolt\NetSuite;

class AdvInterCompanyJournalEntryAccountingBookDetailList
{

    /**
     * @var AdvInterCompanyJournalEntryAccountingBookDetail[] $interCompanyJournalEntryAccountingBookDetail
     */
    protected $interCompanyJournalEntryAccountingBookDetail = null;

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
     * @return AdvInterCompanyJournalEntryAccountingBookDetail[]
     */
    public function getInterCompanyJournalEntryAccountingBookDetail()
    {
      return $this->interCompanyJournalEntryAccountingBookDetail;
    }

    /**
     * @param AdvInterCompanyJournalEntryAccountingBookDetail[] $interCompanyJournalEntryAccountingBookDetail
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryAccountingBookDetailList
     */
    public function setInterCompanyJournalEntryAccountingBookDetail(array $interCompanyJournalEntryAccountingBookDetail = null)
    {
      $this->interCompanyJournalEntryAccountingBookDetail = $interCompanyJournalEntryAccountingBookDetail;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryAccountingBookDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
