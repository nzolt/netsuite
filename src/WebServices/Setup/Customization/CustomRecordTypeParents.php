<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeParents
 */
class CustomRecordTypeParents {

    /**
     * @access public
     * @var string
     */
    protected $childDescr;

    static $paramtypesmap = array(
    	"childDescr" => "string",
    );

    /**
     * Set childDescr
     *
     * @param string $childDescr
     * @return CustomRecordTypeParents
     */
    public function setChildDescr($childDescr) {
        $this->childDescr = $childDescr;
        return $this;
    }

    /**
     * Get childDescr
     *
     * @return string
     */
    public function getChildDescr() {
        return $this->childDescr;
    }

}