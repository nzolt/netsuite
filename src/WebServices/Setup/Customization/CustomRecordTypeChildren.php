<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeChildren
 */
class CustomRecordTypeChildren {

    /**
     * @access public
     * @var string
     */
    protected $childDescr;

    /**
     * @access public
     * @var RecordRef
     */
    public $childTab;

    static $paramtypesmap = array(
    	"childDescr" => "string",
    	"childTab" => "RecordRef",
    );

    /**
     * Set childDescr
     *
     * @param string $childDescr
     * @return CustomRecordTypeChildren
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