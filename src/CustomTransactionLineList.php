<?php

namespace Nzolt\NetSuite;

class CustomTransactionLineList
{

    /**
     * @var CustomTransactionLine[] $customTransactionLine
     */
    protected $customTransactionLine = null;

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
     * @return CustomTransactionLine[]
     */
    public function getCustomTransactionLine()
    {
      return $this->customTransactionLine;
    }

    /**
     * @param CustomTransactionLine[] $customTransactionLine
     * @return \Nzolt\NetSuite\CustomTransactionLineList
     */
    public function setCustomTransactionLine(array $customTransactionLine = null)
    {
      $this->customTransactionLine = $customTransactionLine;
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
     * @return \Nzolt\NetSuite\CustomTransactionLineList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
