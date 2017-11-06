<?php
namespace Com\Wowza\Entities\Application;

use Com\Wowza\entities\Entity;

class CurrentIncomingStreamStatistics extends Entity
{
    private $version             = '';
    private $serverName          = '';
    private $applicationInstance = '_definst_';
    private $name                = '';
    private $uptime              = 0;
    private $bytesIn             = 0;
    private $bytesOut            = 0;
    private $bytesInRate         = 0;
    private $bytesOutRate        = 0;
    private $totalConnections    = 0;
    private $connectionCount     = 0;


    // Getters
    public function getVersion()
    {
        return $this->version;
    }

    public function getServerName()
    {
        return $this->serverName;
    }

    public function getApplicationInstance()
    {
        return $this->applicationInstance;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getUptime()
    {
        return $this->uptime;
    }

    public function getBytesIn()
    {
        return $this->bytesIn;
    }

    public function getBytesOut()
    {
        return $this->bytesOut;
    }

    public function getBytesInRate()
    {
        return $this->bytesInRate;
    }

    public function getBytesOutRate()
    {
        return $this->bytesOutRate;
    }

    public function getTotalConnections()
    {
        return $this->totalConnections;
    }

    public function getConnectionCount()
    {
        return $this->connectionCount;
    }


    // Setters
    public function setVersion($version = "")
    {
        $this->version = $version;
    }

    public function setServerName($serverName = "")
    {
        $this->serverName = $serverName;
    }

    public function setApplicationInstance($applicationInstance = "")
    {
        $this->applicationInstance = $applicationInstance;
    }

    public function setName($name = "")
    {
        $this->name = $name;
    }

    public function setUptime($uptime = 0)
    {
        $this->uptime = $uptime;
    }

    public function setBytesIn($bytesIn = 0)
    {
        $this->bytesIn = $bytesIn;
    }

    public function setBytesOut($bytesOut = 0)
    {
        $this->bytesOut = $bytesOut;
    }

    public function setBytesInRate($bytesInRate = 0)
    {
        $this->bytesInRate = $bytesInRate;
    }

    public function setBytesOutRate($bytesOutRate = 0)
    {
        $this->bytesOutRate = $bytesOutRate;
    }

    public function setTotalConnections($totalConnections = 0)
    {
        $this->totalConnections = $totalConnections;
    }

    public function setConnectionCount($connectionCount = 0)
    {
        $this->connectionCount = $connectionCount;
    }

}

