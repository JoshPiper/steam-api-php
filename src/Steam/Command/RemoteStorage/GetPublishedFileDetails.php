<?php


namespace Steam\Command\RemoteStorage;


class GetPublishedFileDetails extends RemoteStorage {
	protected $fileIds = [];

	/**
	 * GetPublishedFileDetails constructor.
	 * @param ?array $fileIds Array of File IDs to get details for.
	 */
	public function __construct($fileIds = null){
		if (!is_null($fileIds)){
			$this->fileIds = $fileIds;
		}
	}

	/**
	 * Add a new file ID to the query list.
	 * @param integer $fileId
	 */
	public function addFileID($fileId){
		$this->fileIds[] = $fileId;
	}

	/**
	 * @inheritDoc
	 */
	public function getMethod(){
		return 'GetPublishedFileDetails';
	}

	/**
	 * @inheritDoc
	 */
	public function getRequestMethod(){
		'POST';
	}

	/**
	 * @inheritDoc
	 */
	public function getParams(){
		$params = [
			'itemcount' => count($this->fileIds),
		];
		foreach ($this->fileIds as $idx => $file_id){
			$params["publishedfileids[{$idx}]"] = $file_id;
		}
		return $params;
	}
}
