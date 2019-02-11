<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Common;

/**
 * Partners
 */
class Partners {

    /**
     * @access public
     * @var RecordRef
     */
    public $partner;

    /**
     * @access public
     * @var RecordRef
     */
    public $partnerRole;

    /**
     * @access public
     * @var boolean
     */
    protected $isPrimary;

    /**
     * @access public
     * @var float
     */
    protected $contribution;

    static $paramtypesmap = array(
    	"partner" => "RecordRef",
    	"partnerRole" => "RecordRef",
    	"isPrimary" => "boolean",
    	"contribution" => "float",
    );

    /**
     * Set isPrimary
     *
     * @param boolean $isPrimary
     * @return Partners
     */
    public function setIsPrimary($isPrimary) {
        $this->isPrimary = $isPrimary;
        return $this;
    }

    /**
     * Get isPrimary
     *
     * @return boolean
     */
    public function getIsPrimary() {
        return $this->isPrimary;
    }


    /**
     * Set contribution
     *
     * @param float $contribution
     * @return Partners
     */
    public function setContribution($contribution) {
        $this->contribution = $contribution;
        return $this;
    }

    /**
     * Get contribution
     *
     * @return float
     */
    public function getContribution() {
        return $this->contribution;
    }

}