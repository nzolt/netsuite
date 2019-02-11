<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeForms
 */
class CustomRecordTypeForms {

    /**
     * @access public
     * @var string
     */
    protected $formEdit;

    /**
     * @access public
     * @var string
     */
    protected $formName;

    /**
     * @access public
     * @var boolean
     */
    protected $formPref;

    static $paramtypesmap = array(
    	"formEdit" => "string",
    	"formName" => "string",
    	"formPref" => "boolean",
    );

    /**
     * Set formEdit
     *
     * @param string $formEdit
     * @return CustomRecordTypeForms
     */
    public function setFormEdit($formEdit) {
        $this->formEdit = $formEdit;
        return $this;
    }

    /**
     * Get formEdit
     *
     * @return string
     */
    public function getFormEdit() {
        return $this->formEdit;
    }


    /**
     * Set formName
     *
     * @param string $formName
     * @return CustomRecordTypeForms
     */
    public function setFormName($formName) {
        $this->formName = $formName;
        return $this;
    }

    /**
     * Get formName
     *
     * @return string
     */
    public function getFormName() {
        return $this->formName;
    }


    /**
     * Set formPref
     *
     * @param boolean $formPref
     * @return CustomRecordTypeForms
     */
    public function setFormPref($formPref) {
        $this->formPref = $formPref;
        return $this;
    }

    /**
     * Get formPref
     *
     * @return boolean
     */
    public function getFormPref() {
        return $this->formPref;
    }

}