<?php

namespace Nzolt\NetSuite;

class MultiSelectCustomFieldRef extends CustomFieldRef
{

    /**
     * @var ListOrRecordRef[] $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param ListOrRecordRef[] $value
     */
    public function __construct($internalId, $scriptId, array $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return ListOrRecordRef[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param ListOrRecordRef[] $value
     * @return \Nzolt\NetSuite\MultiSelectCustomFieldRef
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
