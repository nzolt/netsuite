<?php

namespace Nzolt\NetSuite;

class AccountingPeriodFiscalCalendars
{

    /**
     * @var RecordRef $fiscalCalendar
     */
    protected $fiscalCalendar = null;

    /**
     * @var RecordRef $parent
     */
    protected $parent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getFiscalCalendar()
    {
      return $this->fiscalCalendar;
    }

    /**
     * @param RecordRef $fiscalCalendar
     * @return \Nzolt\NetSuite\AccountingPeriodFiscalCalendars
     */
    public function setFiscalCalendar($fiscalCalendar)
    {
      $this->fiscalCalendar = $fiscalCalendar;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param RecordRef $parent
     * @return \Nzolt\NetSuite\AccountingPeriodFiscalCalendars
     */
    public function setParent($parent)
    {
      $this->parent = $parent;
      return $this;
    }

}
