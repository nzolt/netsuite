<?php

namespace Nzolt\NetSuite;

class SelectCustomFieldRef extends CustomFieldRef
{

    /**
     * @var ListOrRecordRef $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param ListOrRecordRef $value
     */
    public function __construct($internalId, $scriptId, $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return ListOrRecordRef
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ListOrRecordRef $value
     * @return \Nzolt\NetSuite\SelectCustomFieldRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
