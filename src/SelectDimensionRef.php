<?php

namespace Nzolt\NetSuite;

class SelectDimensionRef extends DimensionRef
{

    /**
     * @var ListOrRecordRef $value
     */
    protected $value = null;

    /**
     * @param string $scriptId
     * @param ListOrRecordRef $value
     */
    public function __construct($scriptId, $value)
    {
      parent::__construct($scriptId);
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
     * @return \Nzolt\NetSuite\SelectDimensionRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
