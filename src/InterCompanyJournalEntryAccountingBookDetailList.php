<?php

namespace Nzolt\NetSuite;

class InterCompanyJournalEntryAccountingBookDetailList
{

    /**
     * @var InterCompanyJournalEntryAccountingBookDetail[] $interCompanyJournalEntryAccountingBookDetail
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
     * @return InterCompanyJournalEntryAccountingBookDetail[]
     */
    public function getInterCompanyJournalEntryAccountingBookDetail()
    {
      return $this->interCompanyJournalEntryAccountingBookDetail;
    }

    /**
     * @param InterCompanyJournalEntryAccountingBookDetail[] $interCompanyJournalEntryAccountingBookDetail
     * @return \Nzolt\NetSuite\InterCompanyJournalEntryAccountingBookDetailList
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
     * @return \Nzolt\NetSuite\InterCompanyJournalEntryAccountingBookDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
