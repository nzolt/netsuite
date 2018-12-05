<?php

namespace Nzolt\NetSuite;

abstract class AttachReference
{

    /**
     * @var BaseRef $attachTo
     */
    protected $attachTo = null;

    /**
     * @param BaseRef $attachTo
     */
    public function __construct($attachTo)
    {
      $this->attachTo = $attachTo;
    }

    /**
     * @return BaseRef
     */
    public function getAttachTo()
    {
      return $this->attachTo;
    }

    /**
     * @param BaseRef $attachTo
     * @return \Nzolt\NetSuite\AttachReference
     */
    public function setAttachTo($attachTo)
    {
      $this->attachTo = $attachTo;
      return $this;
    }

}
