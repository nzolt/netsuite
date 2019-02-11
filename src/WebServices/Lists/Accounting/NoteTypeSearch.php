<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\NoteTypeSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * NoteTypeSearch
 */
class NoteTypeSearch extends SearchRecord {

    /**
     * @access public
     * @var NoteTypeSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "NoteTypeSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    );

    /**
     * Set basic
     *
     * @param NoteTypeSearchBasic $basic
     * @return NoteTypeSearch
     */
    public function setBasic(NoteTypeSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return NoteTypeSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return NoteTypeSearch
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