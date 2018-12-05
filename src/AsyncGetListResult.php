<?php

namespace Nzolt\NetSuite;

class AsyncGetListResult extends AsyncResult
{

    /**
     * @var ReadResponseList $readResponseList
     */
    protected $readResponseList = null;

    /**
     * @param ReadResponseList $readResponseList
     */
    public function __construct($readResponseList)
    {
      $this->readResponseList = $readResponseList;
    }

    /**
     * @return ReadResponseList
     */
    public function getReadResponseList()
    {
      return $this->readResponseList;
    }

    /**
     * @param ReadResponseList $readResponseList
     * @return \Nzolt\NetSuite\AsyncGetListResult
     */
    public function setReadResponseList($readResponseList)
    {
      $this->readResponseList = $readResponseList;
      return $this;
    }

}
