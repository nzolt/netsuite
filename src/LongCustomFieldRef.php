<?php

namespace Nzolt\NetSuite;

class LongCustomFieldRef extends CustomFieldRef
{

    /**
     * @var int $value
     */
    protected $value = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     * @param int $value
     */
    public function __construct($internalId, $scriptId, $value)
    {
      parent::__construct($internalId, $scriptId);
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param int $value
     * @return \Nzolt\NetSuite\LongCustomFieldRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
