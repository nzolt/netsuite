<?php

namespace Nzolt\NetSuite;

class SupportCaseEscalateToList
{

    /**
     * @var SupportCaseEscalateTo[] $escalateTo
     */
    protected $escalateTo = null;

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
     * @return SupportCaseEscalateTo[]
     */
    public function getEscalateTo()
    {
      return $this->escalateTo;
    }

    /**
     * @param SupportCaseEscalateTo[] $escalateTo
     * @return \Nzolt\NetSuite\SupportCaseEscalateToList
     */
    public function setEscalateTo(array $escalateTo = null)
    {
      $this->escalateTo = $escalateTo;
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
     * @return \Nzolt\NetSuite\SupportCaseEscalateToList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
