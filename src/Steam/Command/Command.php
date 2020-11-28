<?php


namespace Steam\Command;


abstract class Command implements CommandInterface {
	const REQUESTKEY_DEFAULT = null;
	const REQUESTKEY_QUERY = 'query';
	const REQUESTKEY_BODY = 'body';

	/**
	 * @inheritDoc
	 */
	public function getRequestKey(){
		return static::REQUESTKEY_DEFAULT;
	}
}
