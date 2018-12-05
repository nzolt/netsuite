<?php

namespace Nzolt\NetSuite;

class SerializedInventoryItemNumbersList
{

    /**
     * @var SerializedInventoryItemNumbers[] $numbers
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
     * @return SerializedInventoryItemNumbers[]
     */
    public function getNumbers()
    {
      return $this->numbers;
    }

    /**
     * @param SerializedInventoryItemNumbers[] $numbers
     * @return \Nzolt\NetSuite\SerializedInventoryItemNumbersList
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
     * @return \Nzolt\NetSuite\SerializedInventoryItemNumbersList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
