<?php

namespace Nzolt\NetSuite;

abstract class SearchColumnCustomField
{

    /**
     * @var string $customLabel
     */
    protected $customLabel = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @param string $internalId
     * @param string $scriptId
     */
    public function __construct($internalId, $scriptId)
    {
      $this->internalId = $internalId;
      $this->scriptId = $scriptId;
    }

    /**
     * @return string
     */
    public function getCustomLabel()
    {
      return $this->customLabel;
    }

    /**
     * @param string $customLabel
     * @return \Nzolt\NetSuite\SearchColumnCustomField
     */
    public function setCustomLabel($customLabel)
    {
      $this->customLabel = $customLabel;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param string $internalId
     * @return \Nzolt\NetSuite\SearchColumnCustomField
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
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
     * @return \Nzolt\NetSuite\SearchColumnCustomField
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
