<?php


namespace Steam\Command\RemoteStorage;


class GetPublishedFileDetails extends RemoteStorage {
	protected $fileIds = [];

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
