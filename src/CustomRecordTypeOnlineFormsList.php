<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeOnlineFormsList
{

    /**
     * @var CustomRecordTypeOnlineForms[] $onlineForms
     */
    protected $onlineForms = null;

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
     * @return CustomRecordTypeOnlineForms[]
     */
    public function getOnlineForms()
    {
      return $this->onlineForms;
    }

    /**
     * @param CustomRecordTypeOnlineForms[] $onlineForms
     * @return \Nzolt\NetSuite\CustomRecordTypeOnlineFormsList
     */
    public function setOnlineForms(array $onlineForms = null)
    {
      $this->onlineForms = $onlineForms;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeOnlineFormsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
