<?php

namespace Nzolt\NetSuite;

class Status
{

    /**
     * @var StatusDetail[] $statusDetail
     */
    protected $statusDetail = null;

    /**
     * @var boolean $isSuccess
     */
    protected $isSuccess = null;

    /**
     * @param boolean $isSuccess
     */
    public function __construct($isSuccess)
    {
      $this->isSuccess = $isSuccess;
    }

    /**
     * @return StatusDetail[]
     */
    public function getStatusDetail()
    {
      return $this->statusDetail;
    }

    /**
     * @param StatusDetail[] $statusDetail
     * @return \Nzolt\NetSuite\Status
     */
    public function setStatusDetail(array $statusDetail = null)
    {
      $this->statusDetail = $statusDetail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSuccess()
    {
      return $this->isSuccess;
    }

    /**
     * @param boolean $isSuccess
     * @return \Nzolt\NetSuite\Status
     */
    public function setIsSuccess($isSuccess)
    {
      $this->isSuccess = $isSuccess;
      return $this;
    }

}
