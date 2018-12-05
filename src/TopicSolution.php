<?php

namespace Nzolt\NetSuite;

class TopicSolution
{

    /**
     * @var RecordRef $solution
     */
    protected $solution = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
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
     * @return \Nzolt\NetSuite\TopicSolution
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
     * @return \Nzolt\NetSuite\TopicSolution
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
