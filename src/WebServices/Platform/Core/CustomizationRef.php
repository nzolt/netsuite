<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

/**
 * CustomizationRef
 */
class CustomizationRef extends RecordRef {

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"scriptId" => "string",
    );

    /**
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomizationRef
     */
    public function setScriptId($scriptId) {
        $this->scriptId = $scriptId;
        return $this;
    }

    /**
     * Get scriptId
     *
     * @return string
     */
    public function getScriptId() {
        return $this->scriptId;
    }

}