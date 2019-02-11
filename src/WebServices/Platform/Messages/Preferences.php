<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Platform\Messages;

/**
 * Preferences
 */
class Preferences {

    /**
     * @access public
     * @var boolean
     */
    protected $warningAsError;

    /**
     * @access public
     * @var boolean
     */
    protected $disableMandatoryCustomFieldValidation;

    /**
     * @access public
     * @var boolean
     */
    protected $disableSystemNotesForCustomFields;

    /**
     * @access public
     * @var boolean
     */
    protected $ignoreReadOnlyFields;

    static $paramtypesmap = array(
    	"warningAsError" => "boolean",
    	"disableMandatoryCustomFieldValidation" => "boolean",
    	"disableSystemNotesForCustomFields" => "boolean",
    	"ignoreReadOnlyFields" => "boolean",
    );

    /**
     * Set warningAsError
     *
     * @param boolean $warningAsError
     * @return Preferences
     */
    public function setWarningAsError($warningAsError) {
        $this->warningAsError = $warningAsError;
        return $this;
    }

    /**
     * Get warningAsError
     *
     * @return boolean
     */
    public function getWarningAsError() {
        return $this->warningAsError;
    }


    /**
     * Set disableMandatoryCustomFieldValidation
     *
     * @param boolean $disableMandatoryCustomFieldValidation
     * @return Preferences
     */
    public function setDisableMandatoryCustomFieldValidation($disableMandatoryCustomFieldValidation) {
        $this->disableMandatoryCustomFieldValidation = $disableMandatoryCustomFieldValidation;
        return $this;
    }

    /**
     * Get disableMandatoryCustomFieldValidation
     *
     * @return boolean
     */
    public function getDisableMandatoryCustomFieldValidation() {
        return $this->disableMandatoryCustomFieldValidation;
    }


    /**
     * Set disableSystemNotesForCustomFields
     *
     * @param boolean $disableSystemNotesForCustomFields
     * @return Preferences
     */
    public function setDisableSystemNotesForCustomFields($disableSystemNotesForCustomFields) {
        $this->disableSystemNotesForCustomFields = $disableSystemNotesForCustomFields;
        return $this;
    }

    /**
     * Get disableSystemNotesForCustomFields
     *
     * @return boolean
     */
    public function getDisableSystemNotesForCustomFields() {
        return $this->disableSystemNotesForCustomFields;
    }


    /**
     * Set ignoreReadOnlyFields
     *
     * @param boolean $ignoreReadOnlyFields
     * @return Preferences
     */
    public function setIgnoreReadOnlyFields($ignoreReadOnlyFields) {
        $this->ignoreReadOnlyFields = $ignoreReadOnlyFields;
        return $this;
    }

    /**
     * Get ignoreReadOnlyFields
     *
     * @return boolean
     */
    public function getIgnoreReadOnlyFields() {
        return $this->ignoreReadOnlyFields;
    }

}