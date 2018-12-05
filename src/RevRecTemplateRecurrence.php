<?php

namespace Nzolt\NetSuite;

class RevRecTemplateRecurrence
{

    /**
     * @var RecordRef $incomeaccount
     */
    protected $incomeaccount = null;

    /**
     * @var int $periodOffset
     */
    protected $periodOffset = null;

    /**
     * @var string $recamount
     */
    protected $recamount = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getIncomeaccount()
    {
      return $this->incomeaccount;
    }

    /**
     * @param RecordRef $incomeaccount
     * @return \Nzolt\NetSuite\RevRecTemplateRecurrence
     */
    public function setIncomeaccount($incomeaccount)
    {
      $this->incomeaccount = $incomeaccount;
      return $this;
    }

    /**
     * @return int
     */
    public function getPeriodOffset()
    {
      return $this->periodOffset;
    }

    /**
     * @param int $periodOffset
     * @return \Nzolt\NetSuite\RevRecTemplateRecurrence
     */
    public function setPeriodOffset($periodOffset)
    {
      $this->periodOffset = $periodOffset;
      return $this;
    }

    /**
     * @return string
     */
    public function getRecamount()
    {
      return $this->recamount;
    }

    /**
     * @param string $recamount
     * @return \Nzolt\NetSuite\RevRecTemplateRecurrence
     */
    public function setRecamount($recamount)
    {
      $this->recamount = $recamount;
      return $this;
    }

}
