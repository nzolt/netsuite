<?php

namespace Nzolt\NetSuite;

class GetServerTimeResult
{

    /**
     * @var Status $status
     */
    protected $status = null;

    /**
     * @var \DateTime $serverTime
     */
    protected $serverTime = null;

    /**
     * @param Status $status
     * @param \DateTime $serverTime
     */
    public function __construct($status, \DateTime $serverTime)
    {
      $this->status = $status;
      $this->serverTime = $serverTime->format(\DateTime::ATOM);
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param Status $status
     * @return \Nzolt\NetSuite\GetServerTimeResult
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getServerTime()
    {
      if ($this->serverTime == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->serverTime);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $serverTime
     * @return \Nzolt\NetSuite\GetServerTimeResult
     */
    public function setServerTime(\DateTime $serverTime)
    {
      $this->serverTime = $serverTime->format(\DateTime::ATOM);
      return $this;
    }

}
