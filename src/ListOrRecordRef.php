<?php

namespace Nzolt\NetSuite;

class ListOrRecordRef
{

    /**
     * @var string $name
     */
    protected $name = null;

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
     * @param string $internalId
     * @param string $externalId
     * @param string $typeId
     */
    public function __construct($internalId, $externalId, $typeId)
    {
      $this->internalId = $internalId;
      $this->externalId = $externalId;
      $this->typeId = $typeId;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\ListOrRecordRef
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Nzolt\NetSuite\ListOrRecordRef
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
     * @return \Nzolt\NetSuite\ListOrRecordRef
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
     * @return \Nzolt\NetSuite\ListOrRecordRef
     */
    public function setTypeId($typeId)
    {
      $this->typeId = $typeId;
      return $this;
    }

}
