<?php

namespace Nzolt\NetSuite;

class DetachRequest
{

    /**
     * @var DetachReference $detachReference
     */
    protected $detachReference = null;

    /**
     * @param DetachReference $detachReference
     */
    public function __construct($detachReference)
    {
      $this->detachReference = $detachReference;
    }

    /**
     * @return DetachReference
     */
    public function getDetachReference()
    {
      return $this->detachReference;
    }

    /**
     * @param DetachReference $detachReference
     * @return \Nzolt\NetSuite\DetachRequest
     */
    public function setDetachReference($detachReference)
    {
      $this->detachReference = $detachReference;
      return $this;
    }

}
