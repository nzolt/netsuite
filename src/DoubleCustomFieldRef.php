<?php

namespace Nzolt\NetSuite;

class DoubleCustomFieldRef extends CustomFieldRef
{

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param float $value
     */
    public function __construct($internalId, $scriptId, $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Nzolt\NetSuite\DoubleCustomFieldRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
