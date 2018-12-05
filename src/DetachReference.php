<?php

namespace Nzolt\NetSuite;

abstract class DetachReference
{

    /**
     * @var BaseRef $detachFrom
     */
    protected $detachFrom = null;

    /**
     * @param BaseRef $detachFrom
     */
    public function __construct($detachFrom)
    {
      $this->detachFrom = $detachFrom;
    }

    /**
     * @return BaseRef
     */
    public function getDetachFrom()
    {
      return $this->detachFrom;
    }

    /**
     * @param BaseRef $detachFrom
     * @return \Nzolt\NetSuite\DetachReference
     */
    public function setDetachFrom($detachFrom)
    {
      $this->detachFrom = $detachFrom;
      return $this;
    }

}
