<?php

namespace Nzolt\NetSuite;

class FileSearchRowBasic extends SearchRowBasic
{

    /**
     * @var SearchColumnBooleanField[] $availableWithoutLogin
     */
    protected $availableWithoutLogin = null;

    /**
     * @var SearchColumnDateField[] $created
     */
    protected $created = null;

    /**
     * @var SearchColumnDateField[] $dateViewed
     */
    protected $dateViewed = null;

    /**
     * @var SearchColumnStringField[] $description
     */
    protected $description = null;

    /**
     * @var SearchColumnLongField[] $documentSize
     */
    protected $documentSize = null;

    /**
     * @var SearchColumnSelectField[] $externalId
     */
    protected $externalId = null;

    /**
     * @var SearchColumnEnumSelectField[] $fileType
     */
    protected $fileType = null;

    /**
     * @var SearchColumnSelectField[] $folder
     */
    protected $folder = null;

    /**
     * @var SearchColumnLongField[] $hits
     */
    protected $hits = null;

    /**
     * @var SearchColumnStringField[] $hostedPath
     */
    protected $hostedPath = null;

    /**
     * @var SearchColumnSelectField[] $internalId
     */
    protected $internalId = null;

    /**
     * @var SearchColumnBooleanField[] $isAvailable
     */
    protected $isAvailable = null;

    /**
     * @var SearchColumnDateField[] $modified
     */
    protected $modified = null;

    /**
     * @var SearchColumnStringField[] $name
     */
    protected $name = null;

    /**
     * @var SearchColumnSelectField[] $owner
     */
    protected $owner = null;

    /**
     * @var SearchColumnStringField[] $url
     */
    protected $url = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getAvailableWithoutLogin()
    {
      return $this->availableWithoutLogin;
    }

    /**
     * @param SearchColumnBooleanField[] $availableWithoutLogin
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setAvailableWithoutLogin(array $availableWithoutLogin = null)
    {
      $this->availableWithoutLogin = $availableWithoutLogin;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getCreated()
    {
      return $this->created;
    }

    /**
     * @param SearchColumnDateField[] $created
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setCreated(array $created = null)
    {
      $this->created = $created;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getDateViewed()
    {
      return $this->dateViewed;
    }

    /**
     * @param SearchColumnDateField[] $dateViewed
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setDateViewed(array $dateViewed = null)
    {
      $this->dateViewed = $dateViewed;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param SearchColumnStringField[] $description
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setDescription(array $description = null)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getDocumentSize()
    {
      return $this->documentSize;
    }

    /**
     * @param SearchColumnLongField[] $documentSize
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setDocumentSize(array $documentSize = null)
    {
      $this->documentSize = $documentSize;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param SearchColumnSelectField[] $externalId
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setExternalId(array $externalId = null)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return SearchColumnEnumSelectField[]
     */
    public function getFileType()
    {
      return $this->fileType;
    }

    /**
     * @param SearchColumnEnumSelectField[] $fileType
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setFileType(array $fileType = null)
    {
      $this->fileType = $fileType;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getFolder()
    {
      return $this->folder;
    }

    /**
     * @param SearchColumnSelectField[] $folder
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setFolder(array $folder = null)
    {
      $this->folder = $folder;
      return $this;
    }

    /**
     * @return SearchColumnLongField[]
     */
    public function getHits()
    {
      return $this->hits;
    }

    /**
     * @param SearchColumnLongField[] $hits
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setHits(array $hits = null)
    {
      $this->hits = $hits;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getHostedPath()
    {
      return $this->hostedPath;
    }

    /**
     * @param SearchColumnStringField[] $hostedPath
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setHostedPath(array $hostedPath = null)
    {
      $this->hostedPath = $hostedPath;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getInternalId()
    {
      return $this->internalId;
    }

    /**
     * @param SearchColumnSelectField[] $internalId
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setInternalId(array $internalId = null)
    {
      $this->internalId = $internalId;
      return $this;
    }

    /**
     * @return SearchColumnBooleanField[]
     */
    public function getIsAvailable()
    {
      return $this->isAvailable;
    }

    /**
     * @param SearchColumnBooleanField[] $isAvailable
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setIsAvailable(array $isAvailable = null)
    {
      $this->isAvailable = $isAvailable;
      return $this;
    }

    /**
     * @return SearchColumnDateField[]
     */
    public function getModified()
    {
      return $this->modified;
    }

    /**
     * @param SearchColumnDateField[] $modified
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setModified(array $modified = null)
    {
      $this->modified = $modified;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param SearchColumnStringField[] $name
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setName(array $name = null)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return SearchColumnSelectField[]
     */
    public function getOwner()
    {
      return $this->owner;
    }

    /**
     * @param SearchColumnSelectField[] $owner
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setOwner(array $owner = null)
    {
      $this->owner = $owner;
      return $this;
    }

    /**
     * @return SearchColumnStringField[]
     */
    public function getUrl()
    {
      return $this->url;
    }

    /**
     * @param SearchColumnStringField[] $url
     * @return \Nzolt\NetSuite\FileSearchRowBasic
     */
    public function setUrl(array $url = null)
    {
      $this->url = $url;
      return $this;
    }

}
