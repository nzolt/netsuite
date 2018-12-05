<?php

namespace Nzolt\NetSuite;

class BooleanCustomFieldRef extends CustomFieldRef
{

    /**
     * @var boolean $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param boolean $value
     */
    public function __construct($internalId, $scriptId, $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return boolean
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param boolean $value
     * @return \Nzolt\NetSuite\BooleanCustomFieldRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
