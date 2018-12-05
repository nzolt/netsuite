<?php

namespace Nzolt\NetSuite;

class AccountingPeriodFiscalCalendarsList
{

    /**
     * @var AccountingPeriodFiscalCalendars[] $accountingPeriodFiscalCalendars
     */
    protected $accountingPeriodFiscalCalendars = null;

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
     * @return AccountingPeriodFiscalCalendars[]
     */
    public function getAccountingPeriodFiscalCalendars()
    {
      return $this->accountingPeriodFiscalCalendars;
    }

    /**
     * @param AccountingPeriodFiscalCalendars[] $accountingPeriodFiscalCalendars
     * @return \Nzolt\NetSuite\AccountingPeriodFiscalCalendarsList
     */
    public function setAccountingPeriodFiscalCalendars(array $accountingPeriodFiscalCalendars = null)
    {
      $this->accountingPeriodFiscalCalendars = $accountingPeriodFiscalCalendars;
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
     * @return \Nzolt\NetSuite\AccountingPeriodFiscalCalendarsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
