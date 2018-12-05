<?php

namespace Nzolt\NetSuite;

class AttachRequest
{

    /**
     * @var AttachReference $attachReference
     */
    protected $attachReference = null;

    /**
     * @param AttachReference $attachReference
     */
    public function __construct($attachReference)
    {
      $this->attachReference = $attachReference;
    }

    /**
     * @return AttachReference
     */
    public function getAttachReference()
    {
      return $this->attachReference;
    }

    /**
     * @param AttachReference $attachReference
     * @return \Nzolt\NetSuite\AttachRequest
     */
    public function setAttachReference($attachReference)
    {
      $this->attachReference = $attachReference;
      return $this;
    }

}
