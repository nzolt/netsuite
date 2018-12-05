<?php

namespace Nzolt\NetSuite;

class CampaignEventResponse
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var \DateTime $dateSent
     */
    protected $dateSent = null;

    /**
     * @var float $sent
     */
    protected $sent = null;

    /**
     * @var float $opened
     */
    protected $opened = null;

    /**
     * @var float $openedRatio
     */
    protected $openedRatio = null;

    /**
     * @var float $clickedThru
     */
    protected $clickedThru = null;

    /**
     * @var float $clickedThruRatio
     */
    protected $clickedThruRatio = null;

    /**
     * @var int $responded
     */
    protected $responded = null;

    /**
     * @var float $respondedRatio
     */
    protected $respondedRatio = null;

    /**
     * @var int $unsubscribed
     */
    protected $unsubscribed = null;

    /**
     * @var float $unsubscribedRatio
     */
    protected $unsubscribedRatio = null;

    /**
     * @var int $bounced
     */
    protected $bounced = null;

    /**
     * @var float $bouncedRatio
     */
    protected $bouncedRatio = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateSent()
    {
      if ($this->dateSent == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->dateSent);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $dateSent
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setDateSent(\DateTime $dateSent = null)
    {
      if ($dateSent == null) {
       $this->dateSent = null;
      } else {
        $this->dateSent = $dateSent->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return float
     */
    public function getSent()
    {
      return $this->sent;
    }

    /**
     * @param float $sent
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setSent($sent)
    {
      $this->sent = $sent;
      return $this;
    }

    /**
     * @return float
     */
    public function getOpened()
    {
      return $this->opened;
    }

    /**
     * @param float $opened
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setOpened($opened)
    {
      $this->opened = $opened;
      return $this;
    }

    /**
     * @return float
     */
    public function getOpenedRatio()
    {
      return $this->openedRatio;
    }

    /**
     * @param float $openedRatio
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setOpenedRatio($openedRatio)
    {
      $this->openedRatio = $openedRatio;
      return $this;
    }

    /**
     * @return float
     */
    public function getClickedThru()
    {
      return $this->clickedThru;
    }

    /**
     * @param float $clickedThru
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setClickedThru($clickedThru)
    {
      $this->clickedThru = $clickedThru;
      return $this;
    }

    /**
     * @return float
     */
    public function getClickedThruRatio()
    {
      return $this->clickedThruRatio;
    }

    /**
     * @param float $clickedThruRatio
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setClickedThruRatio($clickedThruRatio)
    {
      $this->clickedThruRatio = $clickedThruRatio;
      return $this;
    }

    /**
     * @return int
     */
    public function getResponded()
    {
      return $this->responded;
    }

    /**
     * @param int $responded
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setResponded($responded)
    {
      $this->responded = $responded;
      return $this;
    }

    /**
     * @return float
     */
    public function getRespondedRatio()
    {
      return $this->respondedRatio;
    }

    /**
     * @param float $respondedRatio
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setRespondedRatio($respondedRatio)
    {
      $this->respondedRatio = $respondedRatio;
      return $this;
    }

    /**
     * @return int
     */
    public function getUnsubscribed()
    {
      return $this->unsubscribed;
    }

    /**
     * @param int $unsubscribed
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setUnsubscribed($unsubscribed)
    {
      $this->unsubscribed = $unsubscribed;
      return $this;
    }

    /**
     * @return float
     */
    public function getUnsubscribedRatio()
    {
      return $this->unsubscribedRatio;
    }

    /**
     * @param float $unsubscribedRatio
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setUnsubscribedRatio($unsubscribedRatio)
    {
      $this->unsubscribedRatio = $unsubscribedRatio;
      return $this;
    }

    /**
     * @return int
     */
    public function getBounced()
    {
      return $this->bounced;
    }

    /**
     * @param int $bounced
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setBounced($bounced)
    {
      $this->bounced = $bounced;
      return $this;
    }

    /**
     * @return float
     */
    public function getBouncedRatio()
    {
      return $this->bouncedRatio;
    }

    /**
     * @param float $bouncedRatio
     * @return \Nzolt\NetSuite\CampaignEventResponse
     */
    public function setBouncedRatio($bouncedRatio)
    {
      $this->bouncedRatio = $bouncedRatio;
      return $this;
    }

}
