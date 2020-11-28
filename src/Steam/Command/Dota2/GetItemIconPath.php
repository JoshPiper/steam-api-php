<?php

namespace Steam\Command\Dota2;

use Steam\Command\Command;
use Steam\Command\CommandInterface;
use Steam\Traits\Dota2CommandTrait;

class GetItemIconPath extends Command implements CommandInterface
{
    use Dota2CommandTrait;

    /**
     * @var string
     */
    protected $iconName;

    /**
     * @param string $iconName
     */
    public function __construct($iconName)
    {
        $this->iconName = $iconName;
    }

    public function getInterface()
    {
        return 'IEconDOTA2_' . $this->getDota2AppId();
    }

    public function getMethod()
    {
        return 'GetItemIconPath';
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
            'iconname' => $this->iconName,
        ];
    }
} 