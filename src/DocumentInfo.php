<?php

namespace Nzolt\NetSuite;

class DocumentInfo
{

    /**
     * @var string $nsId
     */
    protected $nsId = null;

    /**
     * @param string $nsId
     */
    public function __construct($nsId)
    {
      $this->nsId = $nsId;
    }

    /**
     * @return string
     */
    public function getNsId()
    {
      return $this->nsId;
    }

    /**
     * @param string $nsId
     * @return \Nzolt\NetSuite\DocumentInfo
     */
    public function setNsId($nsId)
    {
      $this->nsId = $nsId;
      return $this;
    }

}
