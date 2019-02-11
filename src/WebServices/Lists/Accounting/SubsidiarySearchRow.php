<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * SubsidiarySearchRow
 */
class SubsidiarySearchRow extends SearchRow {

    /**
     * @access public
     * @var SubsidiarySearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $addressJoin;

    /**
     * @access public
     * @var AccountSearchRowBasic
     */
    protected $defaultAdvanceToApplyAccountJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $returnAddressJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $shippingAddressJoin;

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
    	"basic" => "SubsidiarySearchRowBasic",
    	"addressJoin" => "AddressSearchRowBasic",
    	"defaultAdvanceToApplyAccountJoin" => "AccountSearchRowBasic",
    	"returnAddressJoin" => "AddressSearchRowBasic",
    	"shippingAddressJoin" => "AddressSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param SubsidiarySearchRowBasic $basic
     * @return SubsidiarySearchRow
     */
    public function setBasic(SubsidiarySearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SubsidiarySearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set addressJoin
     *
     * @param AddressSearchRowBasic $addressJoin
     * @return SubsidiarySearchRow
     */
    public function setAddressJoin(AddressSearchRowBasic $addressJoin) {
        $this->addressJoin = $addressJoin;
        return $this;
    }

    /**
     * Get addressJoin
     *
     * @return AddressSearchRowBasic
     */
    public function getAddressJoin() {
        return $this->addressJoin;
    }


    /**
     * Set defaultAdvanceToApplyAccountJoin
     *
     * @param AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin
     * @return SubsidiarySearchRow
     */
    public function setDefaultAdvanceToApplyAccountJoin(AccountSearchRowBasic $defaultAdvanceToApplyAccountJoin) {
        $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
        return $this;
    }

    /**
     * Get defaultAdvanceToApplyAccountJoin
     *
     * @return AccountSearchRowBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin() {
        return $this->defaultAdvanceToApplyAccountJoin;
    }


    /**
     * Set returnAddressJoin
     *
     * @param AddressSearchRowBasic $returnAddressJoin
     * @return SubsidiarySearchRow
     */
    public function setReturnAddressJoin(AddressSearchRowBasic $returnAddressJoin) {
        $this->returnAddressJoin = $returnAddressJoin;
        return $this;
    }

    /**
     * Get returnAddressJoin
     *
     * @return AddressSearchRowBasic
     */
    public function getReturnAddressJoin() {
        return $this->returnAddressJoin;
    }


    /**
     * Set shippingAddressJoin
     *
     * @param AddressSearchRowBasic $shippingAddressJoin
     * @return SubsidiarySearchRow
     */
    public function setShippingAddressJoin(AddressSearchRowBasic $shippingAddressJoin) {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * Get shippingAddressJoin
     *
     * @return AddressSearchRowBasic
     */
    public function getShippingAddressJoin() {
        return $this->shippingAddressJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return SubsidiarySearchRow
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