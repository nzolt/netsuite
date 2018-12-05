<?php

namespace Nzolt\NetSuite;

class RecordRef extends BaseRef
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
     * @var RecordType $type
     */
    protected $type = null;

    /**
     * @param string $internalId
     * @param string $externalId
     * @param RecordType $type
     */
    public function __construct($internalId, $externalId, $type)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
      $this->type = $type;
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
     * @return \Nzolt\NetSuite\RecordRef
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
     * @return \Nzolt\NetSuite\RecordRef
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return RecordType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param RecordType $type
     * @return \Nzolt\NetSuite\RecordRef
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
