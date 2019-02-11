<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecordBasic;
use Nzolt\NetSuite\WebServices\Platform\Core\SearchMultiSelectField;

/**
 * GroupMemberSearchBasic
 */
class GroupMemberSearchBasic extends SearchRecordBasic {

    /**
     * @access public
     * @var SearchMultiSelectField
     */
    protected $groupId;

    static $paramtypesmap = array(
    	"groupId" => "SearchMultiSelectField",
    );

    /**
     * Set groupId
     *
     * @param SearchMultiSelectField $groupId
     * @return GroupMemberSearchBasic
     */
    public function setGroupId(SearchMultiSelectField $groupId) {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Get groupId
     *
     * @return SearchMultiSelectField
     */
    public function getGroupId() {
        return $this->groupId;
    }

}