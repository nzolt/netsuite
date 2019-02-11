<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * DocumentInfo
 */
class DocumentInfo {

    /**
     * @access public
     * @var string
     */
    protected $nsId;

    static $paramtypesmap = array(
    	"nsId" => "string",
    );

    /**
     * Set nsId
     *
     * @param string $nsId
     * @return DocumentInfo
     */
    public function setNsId($nsId) {
        $this->nsId = $nsId;
        return $this;
    }

    /**
     * Get nsId
     *
     * @return string
     */
    public function getNsId() {
        return $this->nsId;
    }

}