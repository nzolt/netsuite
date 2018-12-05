<?php

namespace Nzolt\NetSuite;

class ExclusionDateList
{

    /**
     * @var dateTime[] $exclusionDate
     */
    protected $exclusionDate = null;

    /**
     * @param dateTime[] $exclusionDate
     */
    public function __construct(array $exclusionDate)
    {
      $this->exclusionDate = $exclusionDate;
    }

    /**
     * @return dateTime[]
     */
    public function getExclusionDate()
    {
      return $this->exclusionDate;
    }

    /**
     * @param dateTime[] $exclusionDate
     * @return \Nzolt\NetSuite\ExclusionDateList
     */
    public function setExclusionDate(array $exclusionDate)
    {
      $this->exclusionDate = $exclusionDate;
      return $this;
    }

}
