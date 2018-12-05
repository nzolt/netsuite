<?php

namespace Nzolt\NetSuite;

class StringDimensionRef extends DimensionRef
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $scriptId
     * @param string $value
     */
    public function __construct($scriptId, $value)
    {
      parent::__construct($scriptId);
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
     * @return \Nzolt\NetSuite\StringDimensionRef
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
