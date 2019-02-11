<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices;

/**
 * GetDataCenterUrlsRequest
 */
class GetDataCenterUrlsRequest {

    /**
     * @access public
     * @var string
     */
    protected $account;

    static $paramtypesmap = array(
    	"account" => "string",
    );

    /**
     * Set account
     *
     * @param string $account
     * @return GetDataCenterUrlsRequest
     */
    public function setAccount($account) {
        $this->account = $account;
        return $this;
    }

    /**
     * Get account
     *
     * @return string
     */
    public function getAccount() {
        return $this->account;
    }

}