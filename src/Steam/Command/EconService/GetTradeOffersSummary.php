<?php

namespace Steam\Command\EconService;
 
use Steam\Command\Command;
use Steam\Command\CommandInterface;

class GetTradeOffersSummary extends Command implements CommandInterface
{
    /**
     * @var \DateTime
     */
    protected $timeLastVisit;

    /**
     * @param \DateTime $timeLastVisit
     */
    public function setTimeLastVisit(\DateTime $timeLastVisit)
    {
        $this->timeLastVisit = $timeLastVisit;
    }

    public function getInterface()
    {
        return 'IEconService';
    }

    public function getMethod()
    {
        return 'GetTradeOffersSummary';
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
        $params = [];

        empty($this->timeLastVisit) ?: $params['time_last_visit'] = $this->timeLastVisit->getTimestamp();

        return $params;
    }
}
