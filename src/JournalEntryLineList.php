<?php

namespace Nzolt\NetSuite;

class JournalEntryLineList
{

    /**
     * @var JournalEntryLine[] $line
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
     * @return JournalEntryLine[]
     */
    public function getLine()
    {
      return $this->line;
    }

    /**
     * @param JournalEntryLine[] $line
     * @return \Nzolt\NetSuite\JournalEntryLineList
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
     * @return \Nzolt\NetSuite\JournalEntryLineList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
