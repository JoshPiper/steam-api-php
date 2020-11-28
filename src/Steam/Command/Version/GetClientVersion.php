<?php

namespace Steam\Command\Version;

use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetClientVersion extends Command implements CommandInterface
{
    /**
     * @var int
     */
    protected $appId;

    /**
     * @param int $appId
     */
    public function __construct($appId)
    {
        $this->appId = $appId;
    }

    public function getInterface()
    {
        return 'IGCVersion_' . $this->appId;
    }

    public function getMethod()
    {
        return 'GetClientVersion';
    }

    public function getVersion()
    {
        return 'v1';
    }

    public function getRequestMethod()
    {
        return 'GET';
    }

    public function getParams()
    {
        return [];
    }
} 