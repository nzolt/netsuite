<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * Subscriptions
 */
class Subscriptions {

    /**
     * @access public
     * @var boolean
     */
    protected $subscribed;

    /**
     * @access public
     * @var RecordRef
     */
    public $subscription;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    static $paramtypesmap = array(
    	"subscribed" => "boolean",
    	"subscription" => "RecordRef",
    	"lastModifiedDate" => "dateTime",
    );

    /**
     * Set subscribed
     *
     * @param boolean $subscribed
     * @return Subscriptions
     */
    public function setSubscribed($subscribed) {
        $this->subscribed = $subscribed;
        return $this;
    }

    /**
     * Get subscribed
     *
     * @return boolean
     */
    public function getSubscribed() {
        return $this->subscribed;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return Subscriptions
     */
    public function setLastModifiedDate(\DateTime $lastModifiedDate) {
        $this->lastModifiedDate = $lastModifiedDate->format('c');
        return $this;
    }

    /**
     * Get lastModifiedDate
     *
     * @return \DateTime
     */
    public function getLastModifiedDate() {
        return new \DateTime($this->lastModifiedDate);
    }

}