<?php

namespace Steam\Command\GameServersService;
 
use Steam\Command\CommandInterface;

class DeleteAccount implements CommandInterface
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
        return 'DeleteAccount';
    }

    public function getVersion()
    {
        return 'v1';
    }

    public function getRequestMethod()
    {
        return 'POST';
    }

    public function getParams()
    {
        return [
            'steamid' => $this->steamId,
        ];
    }
}
