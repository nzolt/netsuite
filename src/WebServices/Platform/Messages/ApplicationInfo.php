<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * ApplicationInfo
 */
class ApplicationInfo {

    /**
     * @access public
     * @var string
     */
    protected $applicationId;

    static $paramtypesmap = array(
    	"applicationId" => "string",
    );

    /**
     * Set applicationId
     *
     * @param string $applicationId
     * @return ApplicationInfo
     */
    public function setApplicationId($applicationId) {
        $this->applicationId = $applicationId;
        return $this;
    }

    /**
     * Get applicationId
     *
     * @return string
     */
    public function getApplicationId() {
        return $this->applicationId;
    }

}