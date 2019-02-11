<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Lists\Support;

/**
 * IssueVersion
 */
class IssueVersion {

    /**
     * @access public
     * @var boolean
     */
    protected $primary;

    /**
     * @access public
     * @var RecordRef
     */
    public $version;

    /**
     * @access public
     * @var RecordRef
     */
    public $build;

    static $paramtypesmap = array(
    	"primary" => "boolean",
    	"version" => "RecordRef",
    	"build" => "RecordRef",
    );

    /**
     * Set primary
     *
     * @param boolean $primary
     * @return IssueVersion
     */
    public function setPrimary($primary) {
        $this->primary = $primary;
        return $this;
    }

    /**
     * Get primary
     *
     * @return boolean
     */
    public function getPrimary() {
        return $this->primary;
    }

}