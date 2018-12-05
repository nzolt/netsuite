<?php

namespace Nzolt\NetSuite;

class ServiceItemTaskTemplatesList
{

    /**
     * @var ServiceItemTaskTemplates[] $taskTemplates
     */
    protected $taskTemplates = null;

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
     * @return ServiceItemTaskTemplates[]
     */
    public function getTaskTemplates()
    {
      return $this->taskTemplates;
    }

    /**
     * @param ServiceItemTaskTemplates[] $taskTemplates
     * @return \Nzolt\NetSuite\ServiceItemTaskTemplatesList
     */
    public function setTaskTemplates(array $taskTemplates = null)
    {
      $this->taskTemplates = $taskTemplates;
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
     * @return \Nzolt\NetSuite\ServiceItemTaskTemplatesList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
