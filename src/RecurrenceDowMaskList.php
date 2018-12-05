<?php

namespace Nzolt\NetSuite;

class RecurrenceDowMaskList
{

    /**
     * @var RecurrenceDow[] $recurrenceDowMask
     */
    protected $recurrenceDowMask = null;

    /**
     * @param RecurrenceDow[] $recurrenceDowMask
     */
    public function __construct(array $recurrenceDowMask)
    {
      $this->recurrenceDowMask = $recurrenceDowMask;
    }

    /**
     * @return RecurrenceDow[]
     */
    public function getRecurrenceDowMask()
    {
      return $this->recurrenceDowMask;
    }

    /**
     * @param RecurrenceDow[] $recurrenceDowMask
     * @return \Nzolt\NetSuite\RecurrenceDowMaskList
     */
    public function setRecurrenceDowMask(array $recurrenceDowMask)
    {
      $this->recurrenceDowMask = $recurrenceDowMask;
      return $this;
    }

}
