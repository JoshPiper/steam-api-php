<?php

namespace Steam\Command\WebApiUtil;

use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetSupportedApiList extends Command implements CommandInterface
{
    public function getInterface()
    {
        return 'ISteamWebAPIUtil';
    }

    public function getMethod()
    {
        return 'GetSupportedAPIList';
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