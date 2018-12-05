<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeManagersList
{

    /**
     * @var CustomRecordTypeManagers[] $managers
     */
    protected $managers = null;

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
     * @return CustomRecordTypeManagers[]
     */
    public function getManagers()
    {
      return $this->managers;
    }

    /**
     * @param CustomRecordTypeManagers[] $managers
     * @return \Nzolt\NetSuite\CustomRecordTypeManagersList
     */
    public function setManagers(array $managers = null)
    {
      $this->managers = $managers;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeManagersList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
