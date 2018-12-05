<?php

namespace Nzolt\NetSuite;

class RevRecTemplateRecurrenceList
{

    /**
     * @var RevRecTemplateRecurrence[] $revRecTemplateRecurrence
     */
    protected $revRecTemplateRecurrence = null;

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
     * @return RevRecTemplateRecurrence[]
     */
    public function getRevRecTemplateRecurrence()
    {
      return $this->revRecTemplateRecurrence;
    }

    /**
     * @param RevRecTemplateRecurrence[] $revRecTemplateRecurrence
     * @return \Nzolt\NetSuite\RevRecTemplateRecurrenceList
     */
    public function setRevRecTemplateRecurrence(array $revRecTemplateRecurrence = null)
    {
      $this->revRecTemplateRecurrence = $revRecTemplateRecurrence;
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
     * @return \Nzolt\NetSuite\RevRecTemplateRecurrenceList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
