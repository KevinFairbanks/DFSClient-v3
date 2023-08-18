<?php

namespace DFSClientV3\Entity\Custom;

use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info;
use DFSClientV3\Entity\Custom\GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info;

class GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_data 
{    
    /**
    * @var null|string $se_type;
    */
    public $se_type = null;

    /**
    * @var null|string $keyword;
    */
    public $keyword = null;

    /**
    * @var null|integer $location_code;
    */
    public $location_code = null;

    /**
    * @var null|string $language_code;
    */
    public $language_code = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_info $keyword_info;
    */
    public $keyword_info = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataKeyword_properties $keyword_properties;
    */
    public $keyword_properties = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataImpressions_info $impressions_info;
    */
    public $impressions_info = null;

    /**
    * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSerp_info $serp_info;
    */
    public $serp_info = null;

	/**
	 * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataAvg_backlinks_info $avg_backlinks_info;
	 */
	public $avg_backlinks_info = null;

	/**
	 * @var null|GoogleRelatedKeywordsLiveEntityMainTasksResultItemsKeyword_dataSearch_intent_info $search_intent_info;
	 */
	public $search_intent_info = null;

}
