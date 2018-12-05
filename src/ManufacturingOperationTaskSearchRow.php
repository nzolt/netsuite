<?php

namespace Nzolt\NetSuite;

class ManufacturingOperationTaskSearchRow extends SearchRow
{

    /**
     * @var ManufacturingOperationTaskSearchRowBasic $basic
     */
    protected $basic = null;

    /**
     * @var ManufacturingOperationTaskSearchRowBasic $predecessorJoin
     */
    protected $predecessorJoin = null;

    /**
     * @var EmployeeSearchRowBasic $userJoin
     */
    protected $userJoin = null;

    /**
     * @var TransactionSearchRowBasic $workOrderJoin
     */
    protected $workOrderJoin = null;

    /**
     * @var CustomSearchRowBasic[] $customSearchJoin
     */
    protected $customSearchJoin = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getBasic()
    {
      return $this->basic;
    }

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $basic
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRow
     */
    public function setBasic($basic)
    {
      $this->basic = $basic;
      return $this;
    }

    /**
     * @return ManufacturingOperationTaskSearchRowBasic
     */
    public function getPredecessorJoin()
    {
      return $this->predecessorJoin;
    }

    /**
     * @param ManufacturingOperationTaskSearchRowBasic $predecessorJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRow
     */
    public function setPredecessorJoin($predecessorJoin)
    {
      $this->predecessorJoin = $predecessorJoin;
      return $this;
    }

    /**
     * @return EmployeeSearchRowBasic
     */
    public function getUserJoin()
    {
      return $this->userJoin;
    }

    /**
     * @param EmployeeSearchRowBasic $userJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRow
     */
    public function setUserJoin($userJoin)
    {
      $this->userJoin = $userJoin;
      return $this;
    }

    /**
     * @return TransactionSearchRowBasic
     */
    public function getWorkOrderJoin()
    {
      return $this->workOrderJoin;
    }

    /**
     * @param TransactionSearchRowBasic $workOrderJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRow
     */
    public function setWorkOrderJoin($workOrderJoin)
    {
      $this->workOrderJoin = $workOrderJoin;
      return $this;
    }

    /**
     * @return CustomSearchRowBasic[]
     */
    public function getCustomSearchJoin()
    {
      return $this->customSearchJoin;
    }

    /**
     * @param CustomSearchRowBasic[] $customSearchJoin
     * @return \Nzolt\NetSuite\ManufacturingOperationTaskSearchRow
     */
    public function setCustomSearchJoin(array $customSearchJoin = null)
    {
      $this->customSearchJoin = $customSearchJoin;
      return $this;
    }

}
