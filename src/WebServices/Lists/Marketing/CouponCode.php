<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Marketing;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;

/**
 * CouponCode
 */
class CouponCode extends Record {

    /**
     * @access public
     * @var RecordRef
     */
    public $promotion;

    /**
     * @access public
     * @var string
     */
    protected $code;

    /**
     * @access public
     * @var RecordRef
     */
    public $recipient;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateSent;

    /**
     * @access public
     * @var boolean
     */
    protected $used;

    /**
     * @access public
     * @var integer
     */
    protected $useCount;

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
    	"promotion" => "RecordRef",
    	"code" => "string",
    	"recipient" => "RecordRef",
    	"dateSent" => "dateTime",
    	"used" => "boolean",
    	"useCount" => "integer",
    	"internalId" => "string",
    	"externalId" => "string",
    );

    /**
     * Set code
     *
     * @param string $code
     * @return CouponCode
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }


    /**
     * Set dateSent
     *
     * @param \DateTime $dateSent
     * @return CouponCode
     */
    public function setDateSent(\DateTime $dateSent) {
        $this->dateSent = $dateSent->format('c');
        return $this;
    }

    /**
     * Get dateSent
     *
     * @return \DateTime
     */
    public function getDateSent() {
        return new \DateTime($this->dateSent);
    }


    /**
     * Set used
     *
     * @param boolean $used
     * @return CouponCode
     */
    public function setUsed($used) {
        $this->used = $used;
        return $this;
    }

    /**
     * Get used
     *
     * @return boolean
     */
    public function getUsed() {
        return $this->used;
    }


    /**
     * Set useCount
     *
     * @param integer $useCount
     * @return CouponCode
     */
    public function setUseCount($useCount) {
        $this->useCount = $useCount;
        return $this;
    }

    /**
     * Get useCount
     *
     * @return integer
     */
    public function getUseCount() {
        return $this->useCount;
    }


    /**
     * Set internalId
     *
     * @param string $internalId
     * @return CouponCode
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
     * @return CouponCode
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