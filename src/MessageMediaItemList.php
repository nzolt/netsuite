<?php

namespace Nzolt\NetSuite;

class MessageMediaItemList
{

    /**
     * @var File[] $mediaItem
     */
    protected $mediaItem = null;

    /**
     * @var boolean $replaceAll
     */
    protected $replaceAll = null;

    /**
     * @param File[] $mediaItem
     * @param boolean $replaceAll
     */
    public function __construct(array $mediaItem, $replaceAll)
    {
      $this->mediaItem = $mediaItem;
      $this->replaceAll = $replaceAll;
    }

    /**
     * @return File[]
     */
    public function getMediaItem()
    {
      return $this->mediaItem;
    }

    /**
     * @param File[] $mediaItem
     * @return \Nzolt\NetSuite\MessageMediaItemList
     */
    public function setMediaItem(array $mediaItem)
    {
      $this->mediaItem = $mediaItem;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReplaceAll()
    {
      return $this->replaceAll;
    }

    /**
     * @param boolean $replaceAll
     * @return \Nzolt\NetSuite\MessageMediaItemList
     */
    public function setReplaceAll($replaceAll)
    {
      $this->replaceAll = $replaceAll;
      return $this;
    }

}
