<?php

namespace Nzolt\NetSuite;

class InvoiceTimeList
{

    /**
     * @var InvoiceTime[] $time
     */
    protected $time = null;

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
     * @return InvoiceTime[]
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param InvoiceTime[] $time
     * @return \Nzolt\NetSuite\InvoiceTimeList
     */
    public function setTime(array $time = null)
    {
      $this->time = $time;
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
     * @return \Nzolt\NetSuite\InvoiceTimeList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
