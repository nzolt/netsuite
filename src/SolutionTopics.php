<?php

namespace Nzolt\NetSuite;

class SolutionTopics
{

    /**
     * @var RecordRef $topic
     */
    protected $topic = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return RecordRef
     */
    public function getTopic()
    {
      return $this->topic;
    }

    /**
     * @param RecordRef $topic
     * @return \Nzolt\NetSuite\SolutionTopics
     */
    public function setTopic($topic)
    {
      $this->topic = $topic;
      return $this;
    }

}
