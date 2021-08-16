<?php


namespace DFSClientV3\Models\MerchantApi\Google\Sellers;


use DFSClientV3\Models\AbstractModel;

class GoogleSellersSetTask extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'merchant/google/products/task_post';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleSellersSetTaskEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleSellersSetTaskEntityMain
    {
        return parent::get();
    }

	/**
	 * @param string $url
	 * @return $this
	 */
	public function setProductId(string $productId)
	{
		$this->payload['product_id'] = $productId;
		return $this;
	}

	/**
	 * @param int $priority
	 * @return $this
	 */
	public function setPriority(int $priority)
	{
		$this->payload['priority'] = $priority;
		return $this;
	}

	/**
	 * @param string $seDomain
	 * @return $this
	 */
	public function setSeDomain(string $seDomain)
	{
		$this->payload['se_domain'] = $seDomain;
		return $this;
	}

	/**
	 * @param string $seDomain
	 * @return $this
	 */
	public function setGetShopsOnGoogle(string $getShopsOnGoogle)
	{
		$this->payload['get_shops_on_google'] = $getShopsOnGoogle;
		return $this;
	}

    /**
     * @param array $additionalSpecifications
     * @return $this
     */
	public function setAdditionalSpecifications(array $additionalSpecifications)
	{
		$this->payload['additional_specifications'] = $additionalSpecifications;
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
     * @param string $locationCoordinate
     * @return $this
     */
    public function setLocationCoordinate(string $locationCoordinate)
    {
        $this->payload['location_coordinate'] = $locationCoordinate;
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
     * @param string $langCode
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

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
     * @param string $postbackUrl
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;
        return $this;
    }

    /**
     * @param string $pingbackUrl
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;
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
