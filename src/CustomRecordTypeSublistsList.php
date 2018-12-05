<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeSublistsList
{

    /**
     * @var CustomRecordTypeSublists[] $sublists
     */
    protected $sublists = null;

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
     * @return CustomRecordTypeSublists[]
     */
    public function getSublists()
    {
      return $this->sublists;
    }

    /**
     * @param CustomRecordTypeSublists[] $sublists
     * @return \Nzolt\NetSuite\CustomRecordTypeSublistsList
     */
    public function setSublists(array $sublists = null)
    {
      $this->sublists = $sublists;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeSublistsList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
