<?php


namespace Steam\Command\RemoteStorage;


class GetCollectionDetails extends RemoteStorage {
	protected $collectionIds = [];

	/**
	 * GetPublishedFileDetails constructor.
	 * @param ?array $collectionIds Array of File IDs to get details for.
	 */
	public function __construct($collectionIds = null){
		if (!is_null($collectionIds)){
			$this->collectionIds = $collectionIds;
		}
	}

	/**
	 * Add a new file ID to the query list.
	 * @param integer $collectionId
	 */
	public function addFileID($collectionId){
		$this->collectionIds[] = $collectionId;
	}

	/**
	 * @inheritDoc
	 */
	public function getMethod(){
		return 'GetCollectionDetails';
	}

	/**
	 * @inheritDoc
	 */
	public function getRequestMethod(){
		return 'POST';
	}

	/**
	 * @inheritDoc
	 */
	public function getParams(){
		$params = [
			'collectioncount' => count($this->collectionIds),
		];
		foreach ($this->collectionIds as $idx => $collection_id){
			$params["publishedfileids[{$idx}]"] = $collection_id;
		}
		return $params;
	}
}
