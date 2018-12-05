<?php

namespace Nzolt\NetSuite;

class Duration
{

    /**
     * @var float $timeSpan
     */
    protected $timeSpan = null;

    /**
     * @var DurationUnit $unit
     */
    protected $unit = null;

    /**
     * @param float $timeSpan
     * @param DurationUnit $unit
     */
    public function __construct($timeSpan, $unit)
    {
      $this->timeSpan = $timeSpan;
      $this->unit = $unit;
    }

    /**
     * @return float
     */
    public function getTimeSpan()
    {
      return $this->timeSpan;
    }

    /**
     * @param float $timeSpan
     * @return \Nzolt\NetSuite\Duration
     */
    public function setTimeSpan($timeSpan)
    {
      $this->timeSpan = $timeSpan;
      return $this;
    }

    /**
     * @return DurationUnit
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param DurationUnit $unit
     * @return \Nzolt\NetSuite\Duration
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

}
