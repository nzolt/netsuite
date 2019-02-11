<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * WsRole
 */
class WsRole {

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    /**
     * @access public
     * @var boolean
     */
    protected $isDefault;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var boolean
     */
    protected $isLoggedInRole;

    static $paramtypesmap = array(
    	"role" => "RecordRef",
    	"isDefault" => "boolean",
    	"isInactive" => "boolean",
    	"isLoggedInRole" => "boolean",
    );

    /**
     * Set isDefault
     *
     * @param boolean $isDefault
     * @return WsRole
     */
    public function setIsDefault($isDefault) {
        $this->isDefault = $isDefault;
        return $this;
    }

    /**
     * Get isDefault
     *
     * @return boolean
     */
    public function getIsDefault() {
        return $this->isDefault;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return WsRole
     */
    public function setIsInactive($isInactive) {
        $this->isInactive = $isInactive;
        return $this;
    }

    /**
     * Get isInactive
     *
     * @return boolean
     */
    public function getIsInactive() {
        return $this->isInactive;
    }


    /**
     * Set isLoggedInRole
     *
     * @param boolean $isLoggedInRole
     * @return WsRole
     */
    public function setIsLoggedInRole($isLoggedInRole) {
        $this->isLoggedInRole = $isLoggedInRole;
        return $this;
    }

    /**
     * Get isLoggedInRole
     *
     * @return boolean
     */
    public function getIsLoggedInRole() {
        return $this->isLoggedInRole;
    }

}