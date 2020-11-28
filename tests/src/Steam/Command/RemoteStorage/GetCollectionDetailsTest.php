<?php

namespace Steam\Command\RemoteStorage;

use Steam\Command\CommandInterface;

class GetCollectionDetailsTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var GetCollectionDetails
	 */
	protected $instance;

	public function setUp()
	{
		$this->instance = new GetCollectionDetails();
	}

	public function testImplementsInterface()
	{
		$this->assertTrue($this->instance instanceof CommandInterface);
	}

	public function testValues()
	{
		$this->assertEquals('ISteamRemoteStorage', $this->instance->getInterface());
		$this->assertEquals('GetCollectionDetails', $this->instance->getMethod());
		$this->assertEquals('v1', $this->instance->getVersion());
		$this->assertEquals('POST', $this->instance->getRequestMethod());
		$this->assertEquals([
			'collectioncount' => 0
		], $this->instance->getParams());
	}

	public function testAddingCollectionID()
	{
		$this->instance->addCollectionID(1234);
		$this->assertParams([
			'collectioncount' => 1,
			'publishedfileids[0]' => 1234
		]);
	}

	public function assertParams($params)
	{
		$this->assertEquals(array_merge([
			'collectioncount' => 0
		], $params), $this->instance->getParams());
	}
}
