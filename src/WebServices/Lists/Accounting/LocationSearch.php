<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRecord;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchBasic;

/**
 * LocationSearch
 */
class LocationSearch extends SearchRecord {

    /**
     * @access public
     * @var LocationSearchBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $addressJoin;

    /**
     * @access public
     * @var AddressSearchBasic
     */
    protected $returnAddressJoin;

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
    	"basic" => "LocationSearchBasic",
    	"addressJoin" => "AddressSearchBasic",
    	"returnAddressJoin" => "AddressSearchBasic",
    	"userJoin" => "EmployeeSearchBasic",
    	"customSearchJoin" => "CustomSearchJoin[]",
    );

    /**
     * Set basic
     *
     * @param LocationSearchBasic $basic
     * @return LocationSearch
     */
    public function setBasic(LocationSearchBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return LocationSearchBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set addressJoin
     *
     * @param AddressSearchBasic $addressJoin
     * @return LocationSearch
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
     * Set returnAddressJoin
     *
     * @param AddressSearchBasic $returnAddressJoin
     * @return LocationSearch
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
     * Set userJoin
     *
     * @param EmployeeSearchBasic $userJoin
     * @return LocationSearch
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