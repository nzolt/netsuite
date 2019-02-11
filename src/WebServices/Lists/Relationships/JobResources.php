<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Relationships;

/**
 * JobResources
 */
class JobResources {

    /**
     * @access public
     * @var RecordRef
     */
    public $jobResource;

    /**
     * @access public
     * @var string
     */
    protected $email;

    /**
     * @access public
     * @var RecordRef
     */
    public $role;

    static $paramtypesmap = array(
    	"jobResource" => "RecordRef",
    	"email" => "string",
    	"role" => "RecordRef",
    );

    /**
     * Set email
     *
     * @param string $email
     * @return JobResources
     */
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

}