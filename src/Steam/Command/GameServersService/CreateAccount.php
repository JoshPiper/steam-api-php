<?php

namespace Steam\Command\GameServersService;
 
use Steam\Command\Command;
use Steam\Command\CommandInterface;

class CreateAccount extends Command implements CommandInterface
{
    /**
     * @var int
     */
    protected $appId;

    /**
     * @var string
     */
    protected $memo;

    /**
     * @param int $appId
     * @param string $memo
     */
    public function __construct($appId, $memo)
    {
        $this->appId = (int) $appId;
        $this->memo = $memo;
    }

    public function getInterface()
    {
        return 'IGameServersService';
    }

    public function getMethod()
    {
        return 'CreateAccount';
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
            'appid' => $this->appId,
            'memo' => $this->memo,
        ];
    }
}
