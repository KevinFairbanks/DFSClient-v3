<?php

namespace DFSClientV3\Models\BacklinksApi;


use DFSClientV3\Entity\Custom\BacklinksLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class BacklinksLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'backlinks/backlinks/live';
    protected $resultShouldBeTransformedToArray = true;
    protected $jsonContainVariadicType = false;
    protected $useNewMapper = true;

    /**
     * @param string $target
     * @return $this
     */
    public function setTarget(string $target)
    {
        $this->payload['target'] = $target;

        return $this;
    }

    /**
     * @param string $mode
     * @return $this
     */
    public function setMode(string $mode)
    {
        $this->payload['mode'] = $mode;

        return $this;
    }

    /**
     * @param array $orderBy
     * @return $this
     */
    public function setOrderBy(array $orderBy)
    {
        $this->payload['order_by'] = $orderBy;

        return $this;
    }

    /**
     * @param int $limit
     * @return $this
     */
    public function setLimit(int $limit)
    {
        $this->payload['limit'] = $limit;

        return $this;
    }

    /**
     * @param int $offset
     * @return $this
     */
    public function setOffset(int $offset)
    {
        $this->payload['offset'] = $offset;

        return $this;
    }

    /**
     * @param array $filters
     * @return $this
     */
    public function setFilters(array $filters)
    {
        $this->payload['filters'] = $filters;

        return $this;
    }

    /**
     * @param int $internalListLimit
     * @return $this
     */
    public function setInternalListLimit(int $internalListLimit)
    {
        $this->payload['internal_list_limit'] = $internalListLimit;

        return $this;
    }

    /**
     * @param string $backlinksStatusType
     * @return $this
     */
    public function setBacklinksStatusType(string $backlinksStatusType)
    {
        $this->payload['backlinks_status_type'] = $backlinksStatusType;

        return $this;
    }

    /**
     * @param bool $includeSubdomains
     * @return $this
     */
    public function setIncludeSubdomains(bool $includeSubdomains)
    {
        $this->payload['include_subdomains'] = $includeSubdomains;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;

        return $this;
    }


    /**
     * @return BacklinksLiveEntityMain
     */
    public function get(): BacklinksLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }

}
