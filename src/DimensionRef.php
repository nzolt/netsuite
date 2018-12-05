<?php

namespace Nzolt\NetSuite;

abstract class DimensionRef
{

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @param string $scriptId
     */
    public function __construct($scriptId)
    {
      $this->scriptId = $scriptId;
    }

    /**
     * @return string
     */
    public function getScriptId()
    {
      return $this->scriptId;
    }

    /**
     * @param string $scriptId
     * @return \Nzolt\NetSuite\DimensionRef
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
