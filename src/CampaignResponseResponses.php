<?php

namespace Nzolt\NetSuite;

class CampaignResponseResponses
{

    /**
     * @var string $response
     */
    protected $response = null;

    /**
     * @var string $responseDate
     */
    protected $responseDate = null;

    /**
     * @var string $author
     */
    protected $author = null;

    /**
     * @var string $note
     */
    protected $note = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param string $response
     * @return \Nzolt\NetSuite\CampaignResponseResponses
     */
    public function setResponse($response)
    {
      $this->response = $response;
      return $this;
    }

    /**
     * @return string
     */
    public function getResponseDate()
    {
      return $this->responseDate;
    }

    /**
     * @param string $responseDate
     * @return \Nzolt\NetSuite\CampaignResponseResponses
     */
    public function setResponseDate($responseDate)
    {
      $this->responseDate = $responseDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
      return $this->author;
    }

    /**
     * @param string $author
     * @return \Nzolt\NetSuite\CampaignResponseResponses
     */
    public function setAuthor($author)
    {
      $this->author = $author;
      return $this;
    }

    /**
     * @return string
     */
    public function getNote()
    {
      return $this->note;
    }

    /**
     * @param string $note
     * @return \Nzolt\NetSuite\CampaignResponseResponses
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

}
