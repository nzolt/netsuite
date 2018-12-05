<?php

namespace Nzolt\NetSuite;

class CustomRecordTypeFieldList
{

    /**
     * @var CustomRecordCustomField[] $customField
     */
    protected $customField = null;

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
     * @return CustomRecordCustomField[]
     */
    public function getCustomField()
    {
      return $this->customField;
    }

    /**
     * @param CustomRecordCustomField[] $customField
     * @return \Nzolt\NetSuite\CustomRecordTypeFieldList
     */
    public function setCustomField(array $customField = null)
    {
      $this->customField = $customField;
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
     * @return \Nzolt\NetSuite\CustomRecordTypeFieldList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
