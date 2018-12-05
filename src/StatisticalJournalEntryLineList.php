<?php

namespace Nzolt\NetSuite;

class StatisticalJournalEntryLineList
{

    /**
     * @var StatisticalJournalEntryLine[] $statisticalJournalEntryLine
     */
    protected $statisticalJournalEntryLine = null;

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
     * @return StatisticalJournalEntryLine[]
     */
    public function getStatisticalJournalEntryLine()
    {
      return $this->statisticalJournalEntryLine;
    }

    /**
     * @param StatisticalJournalEntryLine[] $statisticalJournalEntryLine
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLineList
     */
    public function setStatisticalJournalEntryLine(array $statisticalJournalEntryLine = null)
    {
      $this->statisticalJournalEntryLine = $statisticalJournalEntryLine;
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
     * @return \Nzolt\NetSuite\StatisticalJournalEntryLineList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
