<?php

namespace Nzolt\NetSuite;

class GroupMemberSearchBasic extends SearchRecordBasic
{

    /**
     * @var RecordRef $groupId
     */
    protected $groupId = null;

    /**
     * @param RecordRef $groupId
     */
    public function __construct($groupId)
    {
      $this->groupId = $groupId;
    }

    /**
     * @return RecordRef
     */
    public function getGroupId()
    {
      return $this->groupId;
    }

    /**
     * @param RecordRef $groupId
     * @return \Nzolt\NetSuite\GroupMemberSearchBasic
     */
    public function setGroupId($groupId)
    {
      $this->groupId = $groupId;
      return $this;
    }

}
