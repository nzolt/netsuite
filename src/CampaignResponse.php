<?php

namespace Nzolt\NetSuite;

class CampaignResponse extends Record
{

    /**
     * @var RecordRef $entity
     */
    protected $entity = null;

    /**
     * @var RecordRef $leadSource
     */
    protected $leadSource = null;

    /**
     * @var RecordRef $campaignEvent
     */
    protected $campaignEvent = null;

    /**
     * @var \DateTime $campaignResponseDate
     */
    protected $campaignResponseDate = null;

    /**
     * @var string $channel
     */
    protected $channel = null;

    /**
     * @var CampaignResponseResponse $response
     */
    protected $response = null;

    /**
     * @var string $note
     */
    protected $note = null;

    /**
     * @var CampaignResponseResponsesList $responsesList
     */
    protected $responsesList = null;

    /**
     * @var string $internalId
     */
    protected $internalId = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @param string $internalId
     * @param string $externalId
     */
    public function __construct($internalId, $externalId)
    {
      parent::__construct();
      $this->internalId = $internalId;
      $this->externalId = $externalId;
    }

    /**
     * @return RecordRef
     */
    public function getEntity()
    {
      return $this->entity;
    }

    /**
     * @param RecordRef $entity
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setEntity($entity)
    {
      $this->entity = $entity;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getLeadSource()
    {
      return $this->leadSource;
    }

    /**
     * @param RecordRef $leadSource
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setLeadSource($leadSource)
    {
      $this->leadSource = $leadSource;
      return $this;
    }

    /**
     * @return RecordRef
     */
    public function getCampaignEvent()
    {
      return $this->campaignEvent;
    }

    /**
     * @param RecordRef $campaignEvent
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setCampaignEvent($campaignEvent)
    {
      $this->campaignEvent = $campaignEvent;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCampaignResponseDate()
    {
      if ($this->campaignResponseDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->campaignResponseDate);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $campaignResponseDate
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setCampaignResponseDate(\DateTime $campaignResponseDate = null)
    {
      if ($campaignResponseDate == null) {
       $this->campaignResponseDate = null;
      } else {
        $this->campaignResponseDate = $campaignResponseDate->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
      return $this->channel;
    }

    /**
     * @param string $channel
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setChannel($channel)
    {
      $this->channel = $channel;
      return $this;
    }

    /**
     * @return CampaignResponseResponse
     */
    public function getResponse()
    {
      return $this->response;
    }

    /**
     * @param CampaignResponseResponse $response
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setResponse($response)
    {
      $this->response = $response;
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
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setNote($note)
    {
      $this->note = $note;
      return $this;
    }

    /**
     * @return CampaignResponseResponsesList
     */
    public function getResponsesList()
    {
      return $this->responsesList;
    }

    /**
     * @param CampaignResponseResponsesList $responsesList
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setResponsesList($responsesList)
    {
      $this->responsesList = $responsesList;
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
     * @return \Nzolt\NetSuite\CampaignResponse
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
     * @return \Nzolt\NetSuite\CampaignResponse
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

}
