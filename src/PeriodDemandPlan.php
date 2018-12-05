<?php

namespace Nzolt\NetSuite;

class PeriodDemandPlan
{

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var DayOfTheWeek $dayOfTheWeek
     */
    protected $dayOfTheWeek = null;

    /**
     * @param float $quantity
     */
    public function __construct($quantity)
    {
      $this->quantity = $quantity;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \Nzolt\NetSuite\PeriodDemandPlan
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return DayOfTheWeek
     */
    public function getDayOfTheWeek()
    {
      return $this->dayOfTheWeek;
    }

    /**
     * @param DayOfTheWeek $dayOfTheWeek
     * @return \Nzolt\NetSuite\PeriodDemandPlan
     */
    public function setDayOfTheWeek($dayOfTheWeek)
    {
      $this->dayOfTheWeek = $dayOfTheWeek;
      return $this;
    }

}
