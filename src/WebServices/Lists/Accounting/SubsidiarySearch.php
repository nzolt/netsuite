<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\SubsidiarySearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AccountSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * SubsidiarySearch
 */
class SubsidiarySearch extends SearchRecord {

    /**
     * @access public
     * @var SubsidiarySearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $addressJoin;

    /**
     * @access public
     * @var AccountSearchBasic
     */
    protected $defaultAdvanceToApplyAccountJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $returnAddressJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $shippingAddressJoin;

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
    	"basic" => "SubsidiarySearchBasic",
    	"addressJoin" => "AddressSearchBasic",
    	"defaultAdvanceToApplyAccountJoin" => "AccountSearchBasic",
    	"returnAddressJoin" => "AddressSearchBasic",
    	"shippingAddressJoin" => "AddressSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param SubsidiarySearchBasic $basic
     * @return SubsidiarySearch
     */
    public function setBasic(SubsidiarySearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return SubsidiarySearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set addressJoin
     *
     * @param AddressSearchBasic $addressJoin
     * @return SubsidiarySearch
     */
    public function setAddressJoin(AddressSearchBasic $addressJoin) {
        $this->addressJoin = $addressJoin;
        return $this;
    }

    /**
     * Get addressJoin
     *
     * @return AddressSearchBasic
     */
    public function getAddressJoin() {
        return $this->addressJoin;
    }


    /**
     * Set defaultAdvanceToApplyAccountJoin
     *
     * @param AccountSearchBasic $defaultAdvanceToApplyAccountJoin
     * @return SubsidiarySearch
     */
    public function setDefaultAdvanceToApplyAccountJoin(AccountSearchBasic $defaultAdvanceToApplyAccountJoin) {
        $this->defaultAdvanceToApplyAccountJoin = $defaultAdvanceToApplyAccountJoin;
        return $this;
    }

    /**
     * Get defaultAdvanceToApplyAccountJoin
     *
     * @return AccountSearchBasic
     */
    public function getDefaultAdvanceToApplyAccountJoin() {
        return $this->defaultAdvanceToApplyAccountJoin;
    }


    /**
     * Set returnAddressJoin
     *
     * @param AddressSearchBasic $returnAddressJoin
     * @return SubsidiarySearch
     */
    public function setReturnAddressJoin(AddressSearchBasic $returnAddressJoin) {
        $this->returnAddressJoin = $returnAddressJoin;
        return $this;
    }

    /**
     * Get returnAddressJoin
     *
     * @return AddressSearchBasic
     */
    public function getReturnAddressJoin() {
        return $this->returnAddressJoin;
    }


    /**
     * Set shippingAddressJoin
     *
     * @param AddressSearchBasic $shippingAddressJoin
     * @return SubsidiarySearch
     */
    public function setShippingAddressJoin(AddressSearchBasic $shippingAddressJoin) {
        $this->shippingAddressJoin = $shippingAddressJoin;
        return $this;
    }

    /**
     * Get shippingAddressJoin
     *
     * @return AddressSearchBasic
     */
    public function getShippingAddressJoin() {
        return $this->shippingAddressJoin;
    }


    /**
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return SubsidiarySearch
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