<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Employees;

/**
 * EmployeeSubscriptions
 */
class EmployeeSubscriptions {

    /**
     * @access public
     * @var string
     */
    protected $subscribed;

    /**
     * @access public
     * @var string
     */
    protected $subscription;

    /**
     * @access public
     * @var dateTime
     */
    protected $lastModifiedDate;

    static $paramtypesmap = array(
    	"subscribed" => "string",
    	"subscription" => "string",
    	"lastModifiedDate" => "dateTime",
    );

    /**
     * Set subscribed
     *
     * @param string $subscribed
     * @return EmployeeSubscriptions
     */
    public function setSubscribed($subscribed) {
        $this->subscribed = $subscribed;
        return $this;
    }

    /**
     * Get subscribed
     *
     * @return string
     */
    public function getSubscribed() {
        return $this->subscribed;
    }


    /**
     * Set subscription
     *
     * @param string $subscription
     * @return EmployeeSubscriptions
     */
    public function setSubscription($subscription) {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * Get subscription
     *
     * @return string
     */
    public function getSubscription() {
        return $this->subscription;
    }


    /**
     * Set lastModifiedDate
     *
     * @param \DateTime $lastModifiedDate
     * @return EmployeeSubscriptions
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