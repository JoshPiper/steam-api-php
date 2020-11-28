<?php


namespace Steam\Command\RemoteStorage;

use Steam\Command\CommandInterface;

abstract class ISteamRemoteStorage implements CommandInterface {
	/**
	 * @inheritDoc
	 */
	public function getInterface(){
		return 'ISteamRemoteStorage';
	}

	/**
	 * @inheritDoc
	 */
	public function getVersion(){
		return 'v1';
	}
}
