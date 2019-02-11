<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

/**
 * CustomRecordTypeOnlineForms
 */
class CustomRecordTypeOnlineForms {

    /**
     * @access public
     * @var string
     */
    protected $onlineFormName;

    /**
     * @access public
     * @var string
     */
    protected $isOnline;

    /**
     * @access public
     * @var string
     */
    protected $templateName;

    static $paramtypesmap = array(
    	"onlineFormName" => "string",
    	"isOnline" => "string",
    	"templateName" => "string",
    );

    /**
     * Set onlineFormName
     *
     * @param string $onlineFormName
     * @return CustomRecordTypeOnlineForms
     */
    public function setOnlineFormName($onlineFormName) {
        $this->onlineFormName = $onlineFormName;
        return $this;
    }

    /**
     * Get onlineFormName
     *
     * @return string
     */
    public function getOnlineFormName() {
        return $this->onlineFormName;
    }


    /**
     * Set isOnline
     *
     * @param string $isOnline
     * @return CustomRecordTypeOnlineForms
     */
    public function setIsOnline($isOnline) {
        $this->isOnline = $isOnline;
        return $this;
    }

    /**
     * Get isOnline
     *
     * @return string
     */
    public function getIsOnline() {
        return $this->isOnline;
    }


    /**
     * Set templateName
     *
     * @param string $templateName
     * @return CustomRecordTypeOnlineForms
     */
    public function setTemplateName($templateName) {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * Get templateName
     *
     * @return string
     */
    public function getTemplateName() {
        return $this->templateName;
    }

}