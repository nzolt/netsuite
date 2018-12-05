<?php

namespace Nzolt\NetSuite;

class AdvInterCompanyJournalEntryLineList
{

    /**
     * @var AdvInterCompanyJournalEntryLine[] $line
     */
    protected $line = null;

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
     * @return AdvInterCompanyJournalEntryLine[]
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param AdvInterCompanyJournalEntryLine[] $line
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLineList
     */
    public function setLine(array $line = null)
    {
      $this->line = $line;
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
     * @return \Nzolt\NetSuite\AdvInterCompanyJournalEntryLineList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
