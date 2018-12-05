<?php

namespace Nzolt\NetSuite;

class CustomizationRef extends RecordRef
{

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     * @param RecordType $type
     * @param string $scriptId
     */
    public function __construct($internalId, $externalId, $type, $scriptId)
    {
      parent::__construct($internalId, $externalId, $type);
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
     * @return \Nzolt\NetSuite\CustomizationRef
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
