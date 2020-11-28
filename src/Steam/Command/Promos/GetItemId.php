<?php

namespace Steam\Command\Promos;

use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetItemId extends Command implements CommandInterface
{
    /**
     * @var int
     */
    protected $appId;

    /**
     * @var int
     */
    protected $steamId;

    /**
     * @var int
     */
    protected $promoId;

    /**
     * @param int $appId
     * @param int $steamId
     * @param int $promoId
     */
    public function __construct($appId, $steamId, $promoId)
    {
        $this->appId = $appId;
        $this->steamId = $steamId;
        $this->promoId = $promoId;
    }

    public function getInterface()
    {
        return 'ITFPromos_' . $this->appId;
    }

    public function getMethod()
    {
        return 'GetItemID';
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
            'promoid' => $this->promoId,
        ];
    }
} 