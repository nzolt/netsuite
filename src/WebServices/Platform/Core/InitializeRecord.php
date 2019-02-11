<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Core;

use Nzolt\NetSuite\WebServices\Platform\Core\Types\InitializeType;

/**
 * InitializeRecord
 */
class InitializeRecord {

    /**
     * @access public
     * @var InitializeType
     */
    protected $type;

    /**
     * @access public
     * @var InitializeRef
     */
    protected $reference;

    /**
     * @access public
     * @var InitializeAuxRef
     */
    protected $auxReference;

    /**
     * @access public
     * @var InitializeRefList
     */
    protected $referenceList;

    static $paramtypesmap = array(
    	"type" => "InitializeType",
    	"reference" => "InitializeRef",
    	"auxReference" => "InitializeAuxRef",
    	"referenceList" => "InitializeRefList",
    );

    /**
     * Set type
     *
     * @param InitializeType $type
     * @return InitializeRecord
     */
    public function setType(InitializeType $type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return InitializeType
     */
    public function getType() {
        return $this->type;
    }


    /**
     * Set reference
     *
     * @param InitializeRef $reference
     * @return InitializeRecord
     */
    public function setReference(InitializeRef $reference) {
        $this->reference = $reference;
        return $this;
    }

    /**
     * Get reference
     *
     * @return InitializeRef
     */
    public function getReference() {
        return $this->reference;
    }


    /**
     * Set auxReference
     *
     * @param InitializeAuxRef $auxReference
     * @return InitializeRecord
     */
    public function setAuxReference(InitializeAuxRef $auxReference) {
        $this->auxReference = $auxReference;
        return $this;
    }

    /**
     * Get auxReference
     *
     * @return InitializeAuxRef
     */
    public function getAuxReference() {
        return $this->auxReference;
    }


    /**
     * Set referenceList
     *
     * @param InitializeRefList $referenceList
     * @return InitializeRecord
     */
    public function setReferenceList(InitializeRefList $referenceList) {
        $this->referenceList = $referenceList;
        return $this;
    }

    /**
     * Get referenceList
     *
     * @return InitializeRefList
     */
    public function getReferenceList() {
        return $this->referenceList;
    }

}