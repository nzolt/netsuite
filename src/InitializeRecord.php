<?php

namespace Nzolt\NetSuite;

class InitializeRecord
{

    /**
     * @var InitializeType $type
     */
    protected $type = null;

    /**
     * @var InitializeRef $reference
     */
    protected $reference = null;

    /**
     * @var InitializeAuxRef $auxReference
     */
    protected $auxReference = null;

    /**
     * @var InitializeRefList $referenceList
     */
    protected $referenceList = null;

    /**
     * @param InitializeType $type
     */
    public function __construct($type)
    {
      $this->type = $type;
    }

    /**
     * @return InitializeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param InitializeType $type
     * @return \Nzolt\NetSuite\InitializeRecord
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return InitializeRef
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param InitializeRef $reference
     * @return \Nzolt\NetSuite\InitializeRecord
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return InitializeAuxRef
     */
    public function getAuxReference()
    {
      return $this->auxReference;
    }

    /**
     * @param InitializeAuxRef $auxReference
     * @return \Nzolt\NetSuite\InitializeRecord
     */
    public function setAuxReference($auxReference)
    {
      $this->auxReference = $auxReference;
      return $this;
    }

    /**
     * @return InitializeRefList
     */
    public function getReferenceList()
    {
      return $this->referenceList;
    }

    /**
     * @param InitializeRefList $referenceList
     * @return \Nzolt\NetSuite\InitializeRecord
     */
    public function setReferenceList($referenceList)
    {
      $this->referenceList = $referenceList;
      return $this;
    }

}
