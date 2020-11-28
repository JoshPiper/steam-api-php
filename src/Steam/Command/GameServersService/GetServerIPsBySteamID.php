<?php

namespace Steam\Command\GameServersService;
 
use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetServerIPsBySteamID extends Command implements CommandInterface
{
    /**
     * @var int
     */
    protected $serverSteamId;

    /**
     * @param int $serverSteamId
     */
    public function __construct($serverSteamId)
    {
        $this->serverSteamId = (int) $serverSteamId;
    }

    public function getInterface()
    {
        return 'IGameServersService';
    }

    public function getMethod()
    {
        return 'GetServerIPsBySteamID';
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
            'server_steamids' => $this->serverSteamId,
        ];
    }
}
