<?php

namespace Steam\Command\EconItems;

use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetStoreStatus extends Command implements CommandInterface
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
        return 'IEconItems_' . $this->appId;
    }

    public function getMethod()
    {
        return 'GetStoreStatus';
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