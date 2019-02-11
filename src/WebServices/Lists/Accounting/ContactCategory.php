<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Accounting;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * ContactCategory
 */
class ContactCategory extends Record {

    /**
     * @access public
     * @var string
     */
    protected $name;

    /**
     * @access public
     * @var boolean
     */
    protected $private;

    /**
     * @access public
     * @var boolean
     */
    protected $sync;

    /**
     * @access public
     * @var boolean
     */
    protected $isInactive;

    /**
     * @access public
     * @var string
     */
    protected $internalId;

    /**
     * @access public
     * @var string
     */
    protected $externalId;

    static $paramtypesmap = array(
    	"name" => "string",
    	"private" => "boolean",
    	"sync" => "boolean",
    	"isInactive" => "boolean",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set name
     *
     * @param string $name
     * @return ContactCategory
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
    }


    /**
     * Set private
     *
     * @param boolean $private
     * @return ContactCategory
     */
    public function setPrivate($private) {
        $this->private = $private;
        return $this;
    }

    /**
     * Get private
     *
     * @return boolean
     */
    public function getPrivate() {
        return $this->private;
    }


    /**
     * Set sync
     *
     * @param boolean $sync
     * @return ContactCategory
     */
    public function setSync($sync) {
        $this->sync = $sync;
        return $this;
    }

    /**
     * Get sync
     *
     * @return boolean
     */
    public function getSync() {
        return $this->sync;
    }


    /**
     * Set isInactive
     *
     * @param boolean $isInactive
     * @return ContactCategory
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
     * Set internalId
     *
     * @param string $internalId
     * @return ContactCategory
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


    /**
     * Set externalId
     *
     * @param string $externalId
     * @return ContactCategory
     */
    public function setExternalId($externalId) {
        $this->externalId = $externalId;
        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId() {
        return $this->externalId;
    }

}