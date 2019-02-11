<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeLinks
 */
class CustomRecordTypeLinks {

    /**
     * @access public
     * @var RecordRef
     */
    public $linkCenter;

    /**
     * @access public
     * @var RecordRef
     */
    public $linkSection;

    /**
     * @access public
     * @var string
     */
    protected $linkLabel;

    static $paramtypesmap = array(
    	"linkCenter" => "RecordRef",
    	"linkSection" => "RecordRef",
    	"linkLabel" => "string",
    );

    /**
     * Set linkLabel
     *
     * @param string $linkLabel
     * @return CustomRecordTypeLinks
     */
    public function setLinkLabel($linkLabel) {
        $this->linkLabel = $linkLabel;
        return $this;
    }

    /**
     * Get linkLabel
     *
     * @return string
     */
    public function getLinkLabel() {
        return $this->linkLabel;
    }

}