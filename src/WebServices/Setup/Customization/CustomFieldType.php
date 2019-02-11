<?php

/**
 * Copyright © 2015, NetSuite, Inc.
 */

namespace Nzolt\NetSuite\WebServices\Setup\Customization;

use Nzolt\NetSuite\WebServices\Platform\Core\Record;
use Nzolt\NetSuite\WebServices\Setup\Customization\Types\CustomizationFieldType;

/**
 * CustomFieldType
 */
class CustomFieldType extends Record {

    /**
     * @access public
     * @var CustomizationFieldType
     */
    protected $fieldType;

    /**
     * @access public
     * @var string
     */
    protected $scriptId;

    static $paramtypesmap = array(
    	"fieldType" => "CustomizationFieldType",
    	"scriptId" => "string",
    );

    /**
     * Set fieldType
     *
     * @param CustomizationFieldType $fieldType
     * @return CustomFieldType
     */
    public function setFieldType(CustomizationFieldType $fieldType) {
        $this->fieldType = $fieldType;
        return $this;
    }

    /**
     * Get fieldType
     *
     * @return CustomizationFieldType
     */
    public function getFieldType() {
        return $this->fieldType;
    }


    /**
     * Set scriptId
     *
     * @param string $scriptId
     * @return CustomFieldType
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