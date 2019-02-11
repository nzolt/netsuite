<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * CustomerDownload
 */
class CustomerDownload {

    /**
     * @access public
     * @var RecordRef
     */
    public $file;

    /**
     * @access public
     * @var string
     */
    protected $licenseCode;

    /**
     * @access public
     * @var integer
     */
    protected $remainingDownloads;

    /**
     * @access public
     * @var dateTime
     */
    protected $expiration;

    static $paramtypesmap = array(
    	"file" => "RecordRef",
    	"licenseCode" => "string",
    	"remainingDownloads" => "integer",
    	"expiration" => "dateTime",
    );

    /**
     * Set licenseCode
     *
     * @param string $licenseCode
     * @return CustomerDownload
     */
    public function setLicenseCode($licenseCode) {
        $this->licenseCode = $licenseCode;
        return $this;
    }

    /**
     * Get licenseCode
     *
     * @return string
     */
    public function getLicenseCode() {
        return $this->licenseCode;
    }


    /**
     * Set remainingDownloads
     *
     * @param integer $remainingDownloads
     * @return CustomerDownload
     */
    public function setRemainingDownloads($remainingDownloads) {
        $this->remainingDownloads = $remainingDownloads;
        return $this;
    }

    /**
     * Get remainingDownloads
     *
     * @return integer
     */
    public function getRemainingDownloads() {
        return $this->remainingDownloads;
    }


    /**
     * Set expiration
     *
     * @param \DateTime $expiration
     * @return CustomerDownload
     */
    public function setExpiration(\DateTime $expiration) {
        $this->expiration = $expiration->format('c');
        return $this;
    }

    /**
     * Get expiration
     *
     * @return \DateTime
     */
    public function getExpiration() {
        return new \DateTime($this->expiration);
    }

}