<?php

namespace Nzolt\NetSuite;

class LotNumberedInventoryItemNumbersList
{

    /**
     * @var LotNumberedInventoryItemNumbers[] $numbers
     */
    protected $numbers = null;

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
     * @return LotNumberedInventoryItemNumbers[]
     */
    public function getNumbers()
    {
      return $this->numbers;
    }

    /**
     * @param LotNumberedInventoryItemNumbers[] $numbers
     * @return \Nzolt\NetSuite\LotNumberedInventoryItemNumbersList
     */
    public function setNumbers(array $numbers = null)
    {
      $this->numbers = $numbers;
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
     * @return \Nzolt\NetSuite\LotNumberedInventoryItemNumbersList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
