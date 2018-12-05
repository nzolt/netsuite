<?php

namespace Nzolt\NetSuite;

class SupportCaseSolutions
{

    /**
     * @var RecordRef $solution
     */
    protected $solution = null;

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var \DateTime $dateApplied
     */
    protected $dateApplied = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getSolution()
    {
      return $this->solution;
    }

    /**
     * @param RecordRef $solution
     * @return \Nzolt\NetSuite\SupportCaseSolutions
     */
    public function setSolution($solution)
    {
      $this->solution = $solution;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Nzolt\NetSuite\SupportCaseSolutions
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateApplied()
    {
      if ($this->dateApplied == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateApplied);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateApplied
     * @return \Nzolt\NetSuite\SupportCaseSolutions
     */
    public function setDateApplied(\DateTime $dateApplied = null)
    {
      if ($dateApplied == null) {
       $this->dateApplied = null;
      } else {
        $this->dateApplied = $dateApplied->format(\DateTime::ATOM);
      }
      return $this;
    }

}
