<?php

namespace Nzolt\NetSuite;

class GetDeletedFilter
{

    /**
     * @var SearchDateField $deletedDate
     */
    protected $deletedDate = null;

    /**
     * @var SearchEnumMultiSelectField $type
     */
    protected $type = null;

    /**
     * @var SearchStringField $scriptId
     */
    protected $scriptId = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchDateField
     */
    public function getDeletedDate()
    {
      return $this->deletedDate;
    }

    /**
     * @param SearchDateField $deletedDate
     * @return \Nzolt\NetSuite\GetDeletedFilter
     */
    public function setDeletedDate($deletedDate)
    {
      $this->deletedDate = $deletedDate;
      return $this;
    }

    /**
     * @return SearchEnumMultiSelectField
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param SearchEnumMultiSelectField $type
     * @return \Nzolt\NetSuite\GetDeletedFilter
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return SearchStringField
     */
    public function getScriptId()
    {
      return $this->scriptId;
    }

    /**
     * @param SearchStringField $scriptId
     * @return \Nzolt\NetSuite\GetDeletedFilter
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
