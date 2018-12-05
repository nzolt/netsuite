<?php

namespace Nzolt\NetSuite;

class InitializeRef extends BaseRef
{

    /**
     * @var InitializeRefType $type
     */
    protected $type = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param InitializeRefType $type
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($type, $internalId, $externalId)
    {
      parent::__construct();
      $this->type = $type;
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return InitializeRefType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param InitializeRefType $type
     * @return \Nzolt\NetSuite\InitializeRef
     */
    public function setType($type)
    {
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\InitializeRef
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
     * @return \Nzolt\NetSuite\InitializeRef
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
