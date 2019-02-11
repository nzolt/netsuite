<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * EntityGroupSearchRow
 */
class EntityGroupSearchRow extends SearchRow {

    /**
     * @access public
     * @var EntityGroupSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchRowBasic
     */
    protected $groupMemberJoin;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchRowBasic[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "EntityGroupSearchRowBasic",
    	"groupMemberJoin" => "EntitySearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param EntityGroupSearchRowBasic $basic
     * @return EntityGroupSearchRow
     */
    public function setBasic(EntityGroupSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return EntityGroupSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set groupMemberJoin
     *
     * @param EntitySearchRowBasic $groupMemberJoin
     * @return EntityGroupSearchRow
     */
    public function setGroupMemberJoin(EntitySearchRowBasic $groupMemberJoin) {
        $this->groupMemberJoin = $groupMemberJoin;
        return $this;
    }

    /**
     * Get groupMemberJoin
     *
     * @return EntitySearchRowBasic
     */
    public function getGroupMemberJoin() {
        return $this->groupMemberJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return EntityGroupSearchRow
     */
    public function setUserJoin(EmployeeSearchRowBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }

}