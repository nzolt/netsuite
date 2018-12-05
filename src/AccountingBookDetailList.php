<?php

namespace Nzolt\NetSuite;

class AccountingBookDetailList
{

    /**
     * @var AccountingBookDetail[] $accountingBookDetail
     */
    protected $accountingBookDetail = null;

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
     * @return AccountingBookDetail[]
     */
    public function getAccountingBookDetail()
    {
      return $this->accountingBookDetail;
    }

    /**
     * @param AccountingBookDetail[] $accountingBookDetail
     * @return \Nzolt\NetSuite\AccountingBookDetailList
     */
    public function setAccountingBookDetail(array $accountingBookDetail = null)
    {
      $this->accountingBookDetail = $accountingBookDetail;
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
     * @return \Nzolt\NetSuite\AccountingBookDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
