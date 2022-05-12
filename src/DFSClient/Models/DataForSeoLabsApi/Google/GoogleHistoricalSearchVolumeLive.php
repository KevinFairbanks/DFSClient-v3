<?php


namespace DFSClientV3\Models\DataForSeoLabsApi\Google;


use DFSClientV3\Models\AbstractModel;

class GoogleHistoricalSearchVolumeLive extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'dataforseo_labs/google/historical_search_volume/live';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleHistoricalSearchVolumeLiveEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keyword
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $languageCode
     * @return $this
     */
    public function setLanguageCode(string $languageCode)
    {
        $this->payload['language_code'] = $languageCode;

        return $this;
    }

	/**
	 * @param bool $includeSerpInfo
	 * @return $this
	 */
	public function setIncludeSerpInfo(bool $includeSerpInfo)
	{
		$this->payload['include_serp_info'] = $includeSerpInfo;

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
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
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