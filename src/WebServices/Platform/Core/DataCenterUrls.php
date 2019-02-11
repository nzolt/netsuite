<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * DataCenterUrls
 */
class DataCenterUrls {

    /**
     * @access public
     * @var string
     */
    protected $restDomain;

    /**
     * @access public
     * @var string
     */
    protected $webservicesDomain;

    /**
     * @access public
     * @var string
     */
    protected $systemDomain;

    static $paramtypesmap = array(
    	"restDomain" => "string",
    	"webservicesDomain" => "string",
    	"systemDomain" => "string",
    );

    /**
     * Set restDomain
     *
     * @param string $restDomain
     * @return DataCenterUrls
     */
    public function setRestDomain($restDomain) {
        $this->restDomain = $restDomain;
        return $this;
    }

    /**
     * Get restDomain
     *
     * @return string
     */
    public function getRestDomain() {
        return $this->restDomain;
    }


    /**
     * Set webservicesDomain
     *
     * @param string $webservicesDomain
     * @return DataCenterUrls
     */
    public function setWebservicesDomain($webservicesDomain) {
        $this->webservicesDomain = $webservicesDomain;
        return $this;
    }

    /**
     * Get webservicesDomain
     *
     * @return string
     */
    public function getWebservicesDomain() {
        return $this->webservicesDomain;
    }


    /**
     * Set systemDomain
     *
     * @param string $systemDomain
     * @return DataCenterUrls
     */
    public function setSystemDomain($systemDomain) {
        $this->systemDomain = $systemDomain;
        return $this;
    }

    /**
     * Get systemDomain
     *
     * @return string
     */
    public function getSystemDomain() {
        return $this->systemDomain;
    }

}