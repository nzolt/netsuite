<?php

namespace Nzolt\NetSuite;

class SubsidiaryAccountingBookDetailList
{

    /**
     * @var SubsidiaryAccountingBookDetail[] $subsidiaryAccountingBookDetail
     */
    protected $subsidiaryAccountingBookDetail = null;

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
     * @return SubsidiaryAccountingBookDetail[]
     */
    public function getSubsidiaryAccountingBookDetail()
    {
      return $this->subsidiaryAccountingBookDetail;
    }

    /**
     * @param SubsidiaryAccountingBookDetail[] $subsidiaryAccountingBookDetail
     * @return \Nzolt\NetSuite\SubsidiaryAccountingBookDetailList
     */
    public function setSubsidiaryAccountingBookDetail(array $subsidiaryAccountingBookDetail = null)
    {
      $this->subsidiaryAccountingBookDetail = $subsidiaryAccountingBookDetail;
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
     * @return \Nzolt\NetSuite\SubsidiaryAccountingBookDetailList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
