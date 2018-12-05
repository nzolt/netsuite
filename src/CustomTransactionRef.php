<?php

namespace Nzolt\NetSuite;

class CustomTransactionRef extends BaseRef
{

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var string $typeId
     */
    protected $typeId = null;

    /**
     * @var string $scriptId
     */
    protected $scriptId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     * @param string $typeId
     * @param string $scriptId
     */
    public function __construct($internalId, $externalId, $typeId, $scriptId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
      $this->typeId = $typeId;
      $this->scriptId = $scriptId;
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
     * @return \Nzolt\NetSuite\CustomTransactionRef
     */
    public function setInternalId($internalId)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Nzolt\NetSuite\CustomTransactionRef
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTypeId()
    {
      return $this->typeId;
    }

    /**
     * @param string $typeId
     * @return \Nzolt\NetSuite\CustomTransactionRef
     */
    public function setTypeId($typeId)
    {
      $this->typeId = $typeId;
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
     * @return \Nzolt\NetSuite\CustomTransactionRef
     */
    public function setScriptId($scriptId)
    {
      $this->scriptId = $scriptId;
      return $this;
    }

}
