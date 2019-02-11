<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\SearchRow;
use Nzolt\NetSuite\WebServices\Platform\Common\LocationSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\AddressSearchRowBasic;
use Nzolt\NetSuite\WebServices\Platform\Common\EmployeeSearchRowBasic;

/**
 * LocationSearchRow
 */
class LocationSearchRow extends SearchRow {

    /**
     * @access public
     * @var LocationSearchRowBasic
     */
    protected $basic;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $addressJoin;

    /**
     * @access public
     * @var AddressSearchRowBasic
     */
    protected $returnAddressJoin;

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
    	"basic" => "LocationSearchRowBasic",
    	"addressJoin" => "AddressSearchRowBasic",
    	"returnAddressJoin" => "AddressSearchRowBasic",
    	"userJoin" => "EmployeeSearchRowBasic",
    	"customSearchJoin" => "CustomSearchRowBasic[]",
    );

    /**
     * Set basic
     *
     * @param LocationSearchRowBasic $basic
     * @return LocationSearchRow
     */
    public function setBasic(LocationSearchRowBasic $basic) {
        $this->basic = $basic;
        return $this;
    }

    /**
     * Get basic
     *
     * @return LocationSearchRowBasic
     */
    public function getBasic() {
        return $this->basic;
    }


    /**
     * Set addressJoin
     *
     * @param AddressSearchRowBasic $addressJoin
     * @return LocationSearchRow
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
     * Set returnAddressJoin
     *
     * @param AddressSearchRowBasic $returnAddressJoin
     * @return LocationSearchRow
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
     * Set userJoin
     *
     * @param EmployeeSearchRowBasic $userJoin
     * @return LocationSearchRow
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