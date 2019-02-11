<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

/**
 * SupportCaseSolutions
 */
class SupportCaseSolutions {

    /**
     * @access public
     * @var RecordRef
     */
    public $solution;

    /**
     * @access public
     * @var string
     */
    protected $message;

    /**
     * @access public
     * @var dateTime
     */
    protected $dateApplied;

    static $paramtypesmap = array(
    	"solution" => "RecordRef",
    	"message" => "string",
    	"dateApplied" => "dateTime",
    );

    /**
     * Set message
     *
     * @param string $message
     * @return SupportCaseSolutions
     */
    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage() {
        return $this->message;
    }


    /**
     * Set dateApplied
     *
     * @param \DateTime $dateApplied
     * @return SupportCaseSolutions
     */
    public function setDateApplied(\DateTime $dateApplied) {
        $this->dateApplied = $dateApplied->format('c');
        return $this;
    }

    /**
     * Get dateApplied
     *
     * @return \DateTime
     */
    public function getDateApplied() {
        return new \DateTime($this->dateApplied);
    }

}