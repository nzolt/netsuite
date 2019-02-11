<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\PaymentMethodSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * PaymentMethodSearchRow
 */
class PaymentMethodSearchRow extends SearchRow {

    /**
     * @access public
     * @var PaymentMethodSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var EmployeeSearchRowBasic
     */
    protected $userJoin;

    static $paramtypesmap = array(
    	"basic" => "PaymentMethodSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    );

    /**
     * Set basic
     *
     * @param PaymentMethodSearchRowBasic $basic
     * @return PaymentMethodSearchRow
     */
    public function setBasic(PaymentMethodSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return PaymentMethodSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return PaymentMethodSearchRow
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