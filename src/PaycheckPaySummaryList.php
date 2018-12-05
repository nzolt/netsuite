<?php

namespace Nzolt\NetSuite;

class PaycheckPaySummaryList
{

    /**
     * @var PaycheckPaySummary[] $paycheckPaySummary
     */
    protected $paycheckPaySummary = null;

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
     * @return PaycheckPaySummary[]
     */
    public function getPaycheckPaySummary()
    {
      return $this->paycheckPaySummary;
    }

    /**
     * @param PaycheckPaySummary[] $paycheckPaySummary
     * @return \Nzolt\NetSuite\PaycheckPaySummaryList
     */
    public function setPaycheckPaySummary(array $paycheckPaySummary = null)
    {
      $this->paycheckPaySummary = $paycheckPaySummary;
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
     * @return \Nzolt\NetSuite\PaycheckPaySummaryList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
