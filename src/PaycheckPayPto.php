<?php

namespace Nzolt\NetSuite;

class PaycheckPayPto
{

    /**
     * @var int $payItem
     */
    protected $payItem = null;

    /**
     * @var string $payItemName
     */
    protected $payItemName = null;

    /**
     * @var float $hoursAccrued
     */
    protected $hoursAccrued = null;

    /**
     * @var float $hoursUsed
     */
    protected $hoursUsed = null;

    /**
     * @var float $hoursBalance
     */
    protected $hoursBalance = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int
     */
    public function getPayItem()
    {
      return $this->payItem;
    }

    /**
     * @param int $payItem
     * @return \Nzolt\NetSuite\PaycheckPayPto
     */
    public function setPayItem($payItem)
    {
      $this->payItem = $payItem;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayItemName()
    {
      return $this->payItemName;
    }

    /**
     * @param string $payItemName
     * @return \Nzolt\NetSuite\PaycheckPayPto
     */
    public function setPayItemName($payItemName)
    {
      $this->payItemName = $payItemName;
      return $this;
    }

    /**
     * @return float
     */
    public function getHoursAccrued()
    {
      return $this->hoursAccrued;
    }

    /**
     * @param float $hoursAccrued
     * @return \Nzolt\NetSuite\PaycheckPayPto
     */
    public function setHoursAccrued($hoursAccrued)
    {
      $this->hoursAccrued = $hoursAccrued;
      return $this;
    }

    /**
     * @return float
     */
    public function getHoursUsed()
    {
      return $this->hoursUsed;
    }

    /**
     * @param float $hoursUsed
     * @return \Nzolt\NetSuite\PaycheckPayPto
     */
    public function setHoursUsed($hoursUsed)
    {
      $this->hoursUsed = $hoursUsed;
      return $this;
    }

    /**
     * @return float
     */
    public function getHoursBalance()
    {
      return $this->hoursBalance;
    }

    /**
     * @param float $hoursBalance
     * @return \Nzolt\NetSuite\PaycheckPayPto
     */
    public function setHoursBalance($hoursBalance)
    {
      $this->hoursBalance = $hoursBalance;
      return $this;
    }

}
