<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Platform\Common\Types\Country;

/**
 * State
 */
class State extends Record {

    /**
     * @access public
     * @var Country
     */
    protected $country;

    /**
     * @access public
     * @var string
     */
    protected $fullName;

    /**
     * @access public
     * @var string
     */
    protected $shortname;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    static $paramtypesmap = array(
    	"country" => "Country",
    	"fullName" => "string",
    	"shortname" => "string",
    	"internalId" => "string",
    );

    /**
     * Set country
     *
     * @param Country $country
     * @return State
     */
    public function setCountry(Country $country) {
        $this->country = $country;
        return $this;
    }

    /**
     * Get country
     *
     * @return Country
     */
    public function getCountry() {
        return $this->country;
    }


    /**
     * Set fullName
     *
     * @param string $fullName
     * @return State
     */
    public function setFullName($fullName) {
        $this->fullName = $fullName;
        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName() {
        return $this->fullName;
    }


    /**
     * Set shortname
     *
     * @param string $shortname
     * @return State
     */
    public function setShortname($shortname) {
        $this->shortname = $shortname;
        return $this;
    }

    /**
     * Get shortname
     *
     * @return string
     */
    public function getShortname() {
        return $this->shortname;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return State
     */
    public function setInternalId($internalId) {
        $this->internalId = $internalId;
        return $this;
    }

    /**
     * Get internalId
     *
     * @return string
     */
    public function getInternalId() {
        return $this->internalId;
    }

}