<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\EntityGroupSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EntitySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * EntityGroupSearch
 */
class EntityGroupSearch extends SearchRecord {

    /**
     * @access public
     * @var EntityGroupSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EntitySearchBasic
     */
    protected $groupMemberJoin;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    /**
     * @access public
     * @var CustomSearchJoin[]
     */
    public $customSearchJoin;

    static $paramtypesmap = array(
    	"basic" => "EntityGroupSearchBasic",
    	"groupMemberJoin" => "EntitySearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param EntityGroupSearchBasic $basic
     * @return EntityGroupSearch
     */
    public function setBasic(EntityGroupSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return EntityGroupSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set groupMemberJoin
     *
     * @param EntitySearchBasic $groupMemberJoin
     * @return EntityGroupSearch
     */
    public function setGroupMemberJoin(EntitySearchBasic $groupMemberJoin) {
        $this->groupMemberJoin = $groupMemberJoin;
        return $this;
    }

    /**
     * Get groupMemberJoin
     *
     * @return EntitySearchBasic
     */
    public function getGroupMemberJoin() {
        return $this->groupMemberJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return EntityGroupSearch
     */
    public function setUserJoin(EmployeeSearchBasic $userJoin) {
        $this->userJoin = $userJoin;
        return $this;
    }

    /**
     * Get userJoin
     *
     * @return EmployeeSearchBasic
     */
    public function getUserJoin() {
        return $this->userJoin;
    }

}