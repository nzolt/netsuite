<?php

namespace Nzolt\NetSuite;

class SolutionTopicsList
{

    /**
     * @var SolutionTopics[] $topics
     */
    protected $topics = null;

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
     * @return SolutionTopics[]
     */
    public function getTopics()
    {
      return $this->topics;
    }

    /**
     * @param SolutionTopics[] $topics
     * @return \Nzolt\NetSuite\SolutionTopicsList
     */
    public function setTopics(array $topics = null)
    {
      $this->topics = $topics;
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
     * @return \Nzolt\NetSuite\SolutionTopicsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
