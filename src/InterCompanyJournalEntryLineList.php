<?php

namespace Nzolt\NetSuite;

class InterCompanyJournalEntryLineList
{

    /**
     * @var InterCompanyJournalEntryLine[] $line
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
     * @return InterCompanyJournalEntryLine[]
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param InterCompanyJournalEntryLine[] $line
     * @return \Nzolt\NetSuite\InterCompanyJournalEntryLineList
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
     * @return \Nzolt\NetSuite\InterCompanyJournalEntryLineList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
