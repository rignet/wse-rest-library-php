<?php
namespace Com\Wowza\Entities\Application;

use Com\Wowza\entities\Entity;

class LiveEncoderConfig extends Entity
{
    private $serverName    = "";
    private $source        = "";
    private $saveFieldList = [];
    private $version       = "";

    public function getServerName()
    {
        return $this->serverName;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getSaveFieldList()
    {
        return $this->saveFieldList;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setServerName($serverName = "")
    {
        $this->serverName = $serverName;
    }

    public function setSource($source = "")
    {
        $this->source = $source;
    }

    public function setSaveFieldList($saveFieldList = "")
    {
        $this->saveFieldList = $saveFieldList;
    }

    public function setVersion($version = "")
    {
        $this->version = $version;
    }

}

