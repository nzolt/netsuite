<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\PromotionCodeSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * PromotionCodeSearchRow
 */
class PromotionCodeSearchRow extends SearchRow {

    /**
     * @access public
     * @var PromotionCodeSearchRowBasic
     */
    protected $basic;

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
    	"basic" => "PromotionCodeSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param PromotionCodeSearchRowBasic $basic
     * @return PromotionCodeSearchRow
     */
    public function setBasic(PromotionCodeSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PromotionCodeSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return PromotionCodeSearchRow
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