<?php

namespace DFSClientV3\Models\ContentGenerationApi;

use DFSClientV3\Entity\Custom\ContentGenerationGenerateTextLiveEntityMain;
use DFSClientV3\Models\AbstractModel;

class ContentGenerationGenerateTextLive extends AbstractModel {

	protected $method = 'POST';
	protected $isSupportedMerge = true;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'content_generation/generate_text/live';
	protected $resultShouldBeTransformedToArray = true;
	protected $jsonContainVariadicType = false;
	protected $useNewMapper = true;

	/**
	 * @param string $topic
	 * @return $this
	 */
	public function setTopic(string $topic) {
		$this->payload['topic'] = $topic;

		return $this;
	}

	/**
	 * @param array $sub_topics
	 * @return $this
	 */
	public function setSubTopics(array $sub_topics) {
		$this->payload['sub_topics'] = $sub_topics;

		return $this;
	}

	/**
	 * @param array $meta_keywords
	 * @return $this
	 */
	public function setMetaKeywords(array $meta_keywords) {
		$this->payload['meta_keywords'] = $meta_keywords;

		return $this;
	}

	/**
	 * @param string $description
	 * @return $this
	 */
	public function setDescription(string $description) {
		$this->payload['description'] = $description;

		return $this;
	}

	/**
	 * @param float $creativity_index
	 * @return $this
	 */
	public function setCreativityIndex(float $creativity_index) {
		$this->payload['creativity_index'] = $creativity_index;

		return $this;
	}

	/**
	 * @param int $word_count
	 * @return $this
	 */
	public function setWordCount(int $word_count) {
		$this->payload['word_count'] = $word_count;

		return $this;
	}

	/**
	 * @param bool $include_conclusion
	 * @return $this
	 */
	public function setIncludeConclusion(bool $include_conclusion) {
		$this->payload['include_conclusion'] = $include_conclusion;

		return $this;
	}

	/**
	 * @param string $supplement_token
	 * @return $this
	 */
	public function setSupplementToken(string $supplement_token) {
		$this->payload['supplement_token'] = $supplement_token;

		return $this;
	}

	/**
	 * @return ContentGenerationGenerateTextLiveEntityMain
	 */
	public function get(): ContentGenerationGenerateTextLiveEntityMain
	{
		return parent::get(); // TODO: Change the autogenerated stub
	}

}