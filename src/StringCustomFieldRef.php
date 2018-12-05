<?php

namespace Nzolt\NetSuite;

class StringCustomFieldRef extends CustomFieldRef
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param string $value
     */
    public function __construct($internalId, $scriptId, $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Nzolt\NetSuite\StringCustomFieldRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
