<?php

namespace Steam\Command\GameServersService;
 
use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetAccountPublicInfo extends Command implements CommandInterface
{
    /**
     * @var int
     */
    protected $steamId;

    /**
     * @param int $steamId
     */
    public function __construct($steamId)
    {
        $this->steamId = (int) $steamId;
    }

    public function getInterface()
    {
        return 'IGameServersService';
    }

    public function getMethod()
    {
        return 'GetAccountPublicInfo';
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
        return [
            'steamid' => $this->steamId,
        ];
    }
}
