<?php

namespace Steam\Command\RemoteStorage;

use Steam\Command\CommandInterface;

class GetPublishedFileDetailsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GetPublishedFileDetails
     */
    protected $instance;

    public function setUp()
    {
        $this->instance = new GetPublishedFileDetails();
    }

    public function testImplementsInterface()
    {
        $this->assertTrue($this->instance instanceof CommandInterface);
    }

    public function testValues()
    {
        $this->assertEquals('ISteamRemoteStorage', $this->instance->getInterface());
        $this->assertEquals('GetPublishedFileDetails', $this->instance->getMethod());
        $this->assertEquals('v1', $this->instance->getVersion());
        $this->assertEquals('POST', $this->instance->getRequestMethod());
        $this->assertEquals([
            'itemcount' => 0
        ], $this->instance->getParams());
    }

    public function testAddingFileID()
    {
        $this->instance->addFileID(1234);
        $this->assertParams([
        	'itemcount' => 1,
			'publishedfileids[0]' => 1234
		]);
    }

    public function assertParams($params)
    {
        $this->assertEquals(array_merge([
            'itemcount' => 0
        ], $params), $this->instance->getParams());
    }
}
 