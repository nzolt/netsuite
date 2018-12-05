<?php

namespace Nzolt\NetSuite;

class AsyncDeleteListResult extends AsyncResult
{

    /**
     * @var WriteResponseList $writeResponseList
     */
    protected $writeResponseList = null;

    /**
     * @param WriteResponseList $writeResponseList
     */
    public function __construct($writeResponseList)
    {
      $this->writeResponseList = $writeResponseList;
    }

    /**
     * @return WriteResponseList
     */
    public function getWriteResponseList()
    {
      return $this->writeResponseList;
    }

    /**
     * @param WriteResponseList $writeResponseList
     * @return \Nzolt\NetSuite\AsyncDeleteListResult
     */
    public function setWriteResponseList($writeResponseList)
    {
      $this->writeResponseList = $writeResponseList;
      return $this;
    }

}
